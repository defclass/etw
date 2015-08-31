<?php
return array(
    'class' => 'ext.yii-mail.YiiMail',
    'transportType'=>'smtp',
    'transportOptions'=>array(
        'host'=>'smtp.qq.com',
        'username'=>'123423xxxx',
        'password'=>'1234234xxxx',
        'port'=>'25',
    ),
    'viewPath' => 'application.modules.Admin.views.mail',
);