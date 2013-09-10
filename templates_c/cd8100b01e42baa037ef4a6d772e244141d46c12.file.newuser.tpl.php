<?php /* Smarty version Smarty-3.1.13, created on 2013-05-07 01:44:52
         compiled from "./templates/newuser.tpl" */ ?>
<?php /*%%SmartyHeaderCode:129370913051885016c38132-29086890%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd8100b01e42baa037ef4a6d772e244141d46c12' => 
    array (
      0 => './templates/newuser.tpl',
      1 => 1367888436,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '129370913051885016c38132-29086890',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51885016d17035_21518002',
  'variables' => 
  array (
    'canary' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51885016d17035_21518002')) {function content_51885016d17035_21518002($_smarty_tpl) {?><form method="POST" action="adduser.php">
    <label for="username">Username</label>
    <input type="text" required name="username" id="username" />
    <br>
    <label for="password">Password</label>
    <input type="password" required name="password" id=password"
        oninput="check_password()" />
    <br>
    <label for="password_rt">Password(repeat)</label>
    <input type="password" required name="password_rt" id="password_rt"
        oninput="check_passwords()" />
    <br>
    <input type="hidden" name="canary" value="<?php echo $_smarty_tpl->tpl_vars['canary']->value;?>
" />
    <input type="submit" value="Create Account" />
</form>
<?php }} ?>