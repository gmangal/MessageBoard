<?php /* Smarty version Smarty-3.1.13, created on 2013-05-07 10:36:19
         compiled from "./templates/originalpost.tpl" */ ?>
<?php /*%%SmartyHeaderCode:144365872851877e12b76754-87857597%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0dc1c6e31fcd26492d8667e13872637574c5eb3' => 
    array (
      0 => './templates/originalpost.tpl',
      1 => 1367922977,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '144365872851877e12b76754-87857597',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51877e12c08dc8_82881655',
  'variables' => 
  array (
    'username' => 0,
    'postid' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51877e12c08dc8_82881655')) {function content_51877e12c08dc8_82881655($_smarty_tpl) {?><table border="1">
    <th>User</th>
    <th>Original Message</th>
    <tr>
        <td class="username"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</td>
        <td id="<?php echo $_smarty_tpl->tpl_vars['postid']->value;?>
" class="message">
            <span><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</span>
            <textarea style="display:none"></textarea>
        </td>
<?php }} ?>