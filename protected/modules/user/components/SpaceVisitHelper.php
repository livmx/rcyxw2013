<?php
/**
 *
 * User: yiqing
 * Date: 13-4-26
 * Time: 上午11:40
 * To change this template use File | Settings | File Templates.
 * -------------------------------------------------------
 * -------------------------------------------------------
 */

class SpaceVisitHelper
{
    /**
     * 记录本次访问
     * @param $day
     * @param $target
     * @internal param array $AccessInfo 改数组记录访问信息的封装：
     *               如哪天$AccessInfo['day'];，注意格式是 Date('Y-m-d');
     *                 什么类型（space,photo,ad等等）$AccessInfo['type'],访问对象的id号$AccessInfo['target']
     * @return bool 本次记录是否成功
     */
    static public function recordAccess($day, $target)
    {

        $condition = 'target = :target AND day = :day';

        $exist = UserSpaceVisitStat::model()->exists($condition,
            array(':target' => $target, ':day' => $day)
        );

        if ($exist) {
            UserSpaceVisitStat::model()->updateCounters(array('times' => 1), $condition, array(':target' => $target, ':day' => $day));
        } else {
           // die(__METHOD__. 'pp');
            $model = new   UserSpaceVisitStat();
            $model->target = $target;
            $model->day = $day;
            $model->times = 1;
            $model->save();
        }

    }

    /**
     * 获取最近N天的访问统计数据
     * 数据格式为结果集形式  date => amount  即 日期=>访问量 的形式
     * @param PDO $pdo PDO实例
     * @param string $type 类型  ，这里目前取 space 空间统计
     * @param int $target 目标ID  这里可以是 空间id ，照片id等
     * @param string $endDate 良格式日期字符串 只要能作为strtotime的参数就行
     *                         一般取 date('Y-m-d',strtotime('20010-1-1'));
     * @param  int $days 指定日期的前 N 天
     * @param string $orders 排序规则 默认是 id desc 即时间降序
     *                        也就是数组中越靠前的数据越是最近的
     * @return array 返回两列的 二维数组 ，存放的是 那一天 => 访问量
     */
    static public function getLatestVisitStatistic(PDO $pdo, $type, $target, $endDate, $days, $orders = ' id desc')
    {
        //N天前的日期：
        $startDate = self::offsetDateFor($endDate, -$days);
        $selectStr = "
              SELECT  day, quantity
              FROM access_stat
              WHERE type = :type AND target = :target AND
              (day BETWEEN :startDate AND :endDate)
              ORDER BY $orders
            ";
        try {

            $stmt = $pdo->prepare($selectStr);
            $stmt->execute(array(':type' => $type, ':target' => $target, ":startDate" => $startDate, ":endDate" => $endDate));
            //$rsltList = $stmt->fetchAll(PDO::FETCH_BOTH);
            $rsltList = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $stmt->closeCursor();
            $stmt = null;
            return $rsltList;
        } catch (PDOException $e) {

            error_log('Error reading the session data table in the session writing method.');
            error_log(' Query with error: ' . $selectStr);
            error_log(' Reason given:' . $e->getMessage() . "\n");
            throw $e;
            //return false;
        }
    }

    static public function getMax4LatestVisit(PDO $pdo, $type, $target, $endDate, $days)
    {
        //N天前的日期：
        $startDate = self::offsetDateFor($endDate, -$days);
        $selectStr = "
              SELECT   MAX(quantity)
              FROM access_stat
              WHERE type = :type AND target = :target AND
              (day BETWEEN :startDate AND :endDate)
            ";
        try {

            $stmt = $pdo->prepare($selectStr);
            $stmt->execute(array(':type' => $type, ':target' => $target, ":startDate" => $startDate, ":endDate" => $endDate));
            $rslt = $stmt->fetchColumn(0);
            $stmt->closeCursor();
            $stmt = null;
            return $rslt;
        } catch (PDOException $e) {

            error_log('Error reading the session data table in the session writing method.');
            error_log(' Query with error: ' . $selectStr);
            error_log(' Reason given:' . $e->getMessage() . "\n");
            throw $e;
            //return false;
        }
    }

    /**
     * 计算指定日期 偏移N天后的日期，偏移天可正可负
     * @param string $date 合法的日期格式
     * @param  int $offsetDay 偏移的天数 如5 ，-5 0 等
     * @return string  偏移后的日期
     */
    static private function offsetDateFor($date, $offsetDay)
    {
        if ($offsetDay >= 0) {
            return date('Y-m-d', strtotime("$date + $offsetDay day"));
        } else {
            return date('Y-m-d', strtotime("$date $offsetDay day"));
        }
    }
}