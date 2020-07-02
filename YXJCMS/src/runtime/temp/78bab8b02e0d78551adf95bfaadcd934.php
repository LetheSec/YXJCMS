<?php /*a:2:{s:61:"/var/www/public/../public/templates/default/member/login.html";i:1589651409;s:61:"/var/www/public/../public/templates/default/member/layui.html";i:1589651409;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>会员登录</title>
    <link rel="stylesheet" type="text/css" href="/static/libs/layui/css/layui.css" />
    <link rel="stylesheet" type="text/css" href="/static/modules/member/css/style.css" />
    <script src="/static/libs/layui/layui.js"></script>
</head>

<body>
    <div id="mydiv">
        <div class="login-main">
            <div class="layui-elip">会员登录</div>
            <form class="layui-form" action="<?php echo url('login'); ?>">
                <div class="layui-form-item">
                    <div class="layui-input-inline input-item">
                        <label class="item">用户名</label>
                        <input type="text" name="username" lay-verify="required" autocomplete="off" placeholder="账号" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <div class="layui-input-inline input-item">
                        <label class="item">密码</label>
                        <input type="password" name="password" lay-verify="required" autocomplete="off" placeholder="密码" class="layui-input">
                    </div>
                </div>
                <?php if($Member_config['openverification'] == '1'): ?>
                <div class="layui-form-item">
                    <div class="layui-input-inline input-item verify-box">
                        <label class="item">验证码</label>
                        <input type="text" name="verify" lay-verify="required" placeholder="验证码" autocomplete="off" class="layui-input">
                        <img id="verify" src="<?php echo url('api/checkcode/getVerify','font_size=18&imageW=130&imageH=38'); ?>" alt="验证码" class="captcha">
                    </div>
                </div>
                <?php endif; ?>
                <div class="layui-form-item">
                    <input type="checkbox" name="remember" lay-skin="primary" title="记住密码">
                    <a href="<?php echo url('forget'); ?>" class="lay-user-jump-change lay-link" style="margin-top: 7px;">忘记密码？</a>
                </div>
                <div class="layui-form-item">
                    <div class="layui-input-inline login-btn">
                        <button class="layui-btn" lay-filter="login" lay-submit>登录</button>
                    </div>
                </div>
                <div class="layui-form-item">
                    <div class="layui-trans layui-form-item lay-user-login-other">
                        <?php echo hook('syncLogin'); ?>
                        <a href="<?php echo url('register'); ?>" class="lay-user-jump-change lay-link">注册帐号</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
layui.config({
    version: "3.0.0",
    base: '/static/modules/member/mods/'
}).extend({
    fly: 'index'
}).use('fly');
</script>
</body>

</html>