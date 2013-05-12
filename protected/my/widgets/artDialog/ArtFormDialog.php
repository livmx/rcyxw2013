<?php
/**
 *  
 * User: yiqing
 * Date: 13-5-11
 * Time: 下午9:31
 * To change this template use File | Settings | File Templates.
 * -------------------------------------------------------
 * -------------------------------------------------------
 */
$alias = 'artDialog';
Yii::setPathOfAlias($alias,dirname(__FILE__));
Yii::import($alias.'.ArtDialog');

class ArtFormDialog extends ArtDialog{

    public $link;

    public $dialogOptions = array();

    public function init(){
        parent::init();
        $this->options['id'] = $this->getId();
    }

    public function run(){
        parent::run();
        $this->registerFormDialogPlugin();

        if (!$this->options['onSuccess'])
            $this->options['onSuccess']='js:function(data, e){alert("Success")}';


        $this->options['dialogOptions'] = $this->dialogOptions ;

        $options= CJavaScript::encode($this->options);

        $jsCode = <<<INIT

 $(document).on('click',"{$this->link}", function (e) {
                e.preventDefault();
             //   alert($(this).html());
                  $(this).formDialog({$options});
                return false;
            });


INIT;


        Yii::app()->clientScript->registerScript('FormDialog'.$this->link, $jsCode,CClientScript::POS_HEAD);

    }

    protected function registerFormDialogPlugin(){
        $js = <<<PLUGIN
(function ($) {
    $.fn.formDialog = function (options) {

        return this.each(function(){
            var link = $(this);
            var url = link.attr('href');
            //alert(url);

            var artDialogId = options['id'];

            $.ajax({
                'url':url,
                'dataType': 'json',
                'success': function (data) {

                    var dialogContent = $('<div class="content-wrapper"> <div class="forView  "></div> </div> ');
                   //  dialogContent.find('.forView').html('lskadjf;lsakdjg;ladfjg;dfgjd;lfkjgd;lsfkgj;dlkfjg;ldskfg');

                    dialogContent.find('.forView').html(data.view || data.form);

                    var defaultDialogOptions = {
                        id:artDialogId,
                        width: 460
                    }
                    var dialogOptions = $.extend(defaultDialogOptions,options["dialogOptions"]);
                    dialogOptions['content'] = dialogContent.html();

                    artDialogId =  $.dialog(dialogOptions);

                    $(".forView").delegate('form', 'submit', function (e) {
                        e.preventDefault();
                        $.ajax({
                            'url': link.attr('href'),
                            'type': 'post',
                            'data': $(this).serialize(),
                            'dataType': 'json',
                            'success': function (data) {
                                if (data.status == 'failure')
                                    $('.forView').html(data.view || data.form);
                                else if (data.status == 'success') {
                                    // var dialog = $.dialog.get(artDialogId);
                                    artDialogId.close();
                                    options['onSuccess'](data, e);
                                }
                            }
                        });

                    });

                }
            });
        });
    }
})(jQuery);

PLUGIN;
      $this->cs->registerScript(__CLASS__.__METHOD__,$js,CClientScript::POS_END);


    }

}