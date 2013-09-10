<?php /* Smarty version Smarty-3.1.13, created on 2013-05-07 10:42:28
         compiled from "./templates/bannerloggedin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18519076635185e68a36e035-44014823%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09e68df9d80161ad819b51d417294826c93d7907' => 
    array (
      0 => './templates/bannerloggedin.tpl',
      1 => 1367923346,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18519076635185e68a36e035-44014823',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5185e68a480f61_40559264',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5185e68a480f61_40559264')) {function content_5185e68a480f61_40559264($_smarty_tpl) {?>    <div id="welcomePanel">
        <span>Welcome,</span>
        <span class="user"><?php echo $_smarty_tpl->tpl_vars['user']->value;?>
</span>
    </div>
</div>
<?php }} ?>