<?php /* Smarty version Smarty-3.1.13, created on 2014-12-19 10:58:40
         compiled from "/mnt/hgfs/ffui/application/modules/user/views/sign/signin.html" */ ?>
<?php /*%%SmartyHeaderCode:184139215854939460644694-55540300%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34a74cc3d461b016f10ef27276e5a28dfe20ebce' => 
    array (
      0 => '/mnt/hgfs/ffui/application/modules/user/views/sign/signin.html',
      1 => 1418460900,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184139215854939460644694-55540300',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_549394606b0091_71761284',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549394606b0091_71761284')) {function content_549394606b0091_71761284($_smarty_tpl) {?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>微官网登录-互动阳光微信平台</title>
    <link rel="stylesheet" href="/public/css/base.css" type="text/css" />
    <link rel="stylesheet" href="/public/css/admin/admin.css" type="text/css" />
    <link rel="stylesheet" href="/public/css/admin/weixin.css" type="text/css" />
    <script type="text/javascript" src="/public/js/jquery-1.8.1.min.js"></script>
    <script type="text/javascript" src="/public/js/common.js"></script>
    <script type="text/javascript" src="/public/js/qDialog.js"></script>
</head>
<body style="background:#f0f3f7;">
<div id="wrap">
    <div class="header">
        <div class="htop clearfix">
            <h1 class="logo left"><a href="http://ovpp.net"><img src="/public/img/logo.png" width="33" height="33" alt="微品牌"></a></h1>
            <div class="htop-login right">
                <a href="http://ovpp.net/admin.html" data-id="12">登录</a>
                <a href="http://ovpp.net/user/register">注册</a>
            </div>
        </div>
    </div>
    <div class="container clearfix ">
        <div class="login-con">
            <div class="login-form">
                <form action="http://ovpp.net/admin/login_auth.html" method="post">
                    <p class="login-form-box">
                        <label for="">用户名：</label><input type="text" name="username" id="username" value="">
                    </p>
                    <p class="login-form-box">
                        <label for="">密&nbsp;&nbsp;&nbsp;码：</label><input name="password" id="password" type="password" value="">
                    </p>
                    <p class="clearfix">

                    </p>
                    <p class="clearfix">
                        <label for="remember" class="login-form-chk left"><span></span></label>
                        <button type="submit" class="btn btn-success btn-xxl right js_loginBtn">&nbsp;&nbsp;登&nbsp;录&nbsp;&nbsp;</button>
                    </p>
                </form>
            </div>
        </div>
        <script>
            $(function(){

                $('.js_loginBtn').click(function(e){
                    e.preventDefault();
                    if ($('.js_loginBtn').attr('is_post') == 1) {
                        showMsg('正在提交信息，请稍候 ...');
                        return false;
                    }
                    var userName = $.trim($('#username').val());
                    if (!userName) {
                        showMsg('用户名不能为空');
                        return;
                    }
                    var password = $.trim($('#password').val());
                    if (!password) {
                        showMsg('密码不能为空');
                        return;
                    }
                    $('.js_loginBtn').attr('is_post', 1);
                    var frm = $(this).closest('form');
                    $('.js_loginBtn').attr('is_post', 0);
                    frm.submit();
                });
            });
        </script>
        <div class="footer">
            <div class="footer-inner">
                CopyRight@凡人的设计室
            </div>
        </div>
    </div>
</div>
</body>
</html><?php }} ?>