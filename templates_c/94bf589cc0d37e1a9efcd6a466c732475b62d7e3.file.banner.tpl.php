<?php /* Smarty version Smarty-3.1.13, created on 2013-04-24 19:07:11
         compiled from "./templates/banner.tpl" */ ?>
<?php /*%%SmartyHeaderCode:72991651151782d5f66ad21-21820310%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94bf589cc0d37e1a9efcd6a466c732475b62d7e3' => 
    array (
      0 => './templates/banner.tpl',
      1 => 1366501660,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '72991651151782d5f66ad21-21820310',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51782d5f6d58d7_70598393',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51782d5f6d58d7_70598393')) {function content_51782d5f6d58d7_70598393($_smarty_tpl) {?><div id="banner">
    <h1>Message Board</h1>
    <div id="loginpanel">
        <form method="post" action="processlogin.php" name="loginform">
            Username: <input type="text" name="username" /><br>
            Password: <input type="password" name="password" /><br>
            <input type="submit" value="Login" />
        </form>
        </div>
            <a href="newuser.php">Sign up for an account</a>
        </div>
    </div>
    <div id="welcomePanel">
        Welcome, <?php echo $_smarty_tpl->tpl_vars['user']->value;?>

    </div>
</div>
        
<?php }} ?>