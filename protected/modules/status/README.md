模块间通讯采用的方式
==========
建立门面对象 服务集

可以通过工具来生成
------------
根据表名来生成对应的CRUD 方法 :D (test1/insertMethod4table/tableName/{yourTableHere})

服务对象的方法全部是粗粒度的 服务对象本身一般也是粗粒度对象较之AR而言，参数一般是元类型（基本类型）不能有特殊的自定义
对象出现。方法参数，返回类型也是泛类型 这样能够保证接口的稳定性（多用数组作为参数）。

模块安装器的问题
----------------
如果是前后台 那么必须在controllers、views目录下 存在back 和front 目录 不然安装器会报错
Yii::app()->getModule('{moduleId}'); 这个方法有时会被调用到 所以注意这个问题！


调试问题：
-----------
- 注意status的提交用到了隐藏iframe 所以错误不容易显现 调试时改掉ifrmae的名字即可：
  <iframe name="helperFrame"  style="display: none;"></iframe>
