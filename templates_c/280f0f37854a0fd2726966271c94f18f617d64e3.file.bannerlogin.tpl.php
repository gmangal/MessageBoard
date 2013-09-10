<?php /* Smarty version Smarty-3.1.13, created on 2013-05-05 09:15:17
         compiled from "./templates/bannerlogin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:33972641518034c83b4100-30379922%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '280f0f37854a0fd2726966271c94f18f617d64e3' => 
    array (
      0 => './templates/bannerlogin.tpl',
      1 => 1367745285,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '33972641518034c83b4100-30379922',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_518034c83b6948_48317539',
  'variables' => 
  array (
    'canary' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_518034c83b6948_48317539')) {function content_518034c83b6948_48317539($_smarty_tpl) {?>    <div id="loginpanel">
        <form method="post" action="processlogin.php" name="loginform">
            Username: <input type="text" name="username" /><br>
            Password: <input type="password" name="password" /><br>
            <input type="hidden" name="canary" value="<?php echo $_smarty_tpl->tpl_vars['canary']->value;?>
"
            />
            <input type="submit" value="Login" />
        </form>
        </div>
            <a href="newuser.php">Sign up for an account</a>
        </div>
    </div>
</div>
        
<?php }} ?>