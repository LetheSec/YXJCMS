<?php
// +----------------------------------------------------------------------

// +----------------------------------------------------------------------

// +----------------------------------------------------------------------
// | 模型验证
// +----------------------------------------------------------------------
namespace app\message\validate;

use think\Validate;

class Message extends Validate
{
    //定义验证规则
    protected $rule = [
        'send_from|发件人' => 'require',
        'send_to|收件人' => 'require',
        'subject|标题' => 'require',
        'content|内容' => 'require',
    ];
}
