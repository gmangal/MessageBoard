<?php /* Smarty version Smarty-3.1.13, created on 2013-05-07 21:10:56
         compiled from "./templates/post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:95818728851877e12c22c19-43538795%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46430ac155d4840379f8dcd882ea9ef779c9a76f' => 
    array (
      0 => './templates/post.tpl',
      1 => 1367925909,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '95818728851877e12c22c19-43538795',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51877e12c37b67_66334411',
  'variables' => 
  array (
    'username' => 0,
    'postid' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51877e12c37b67_66334411')) {function content_51877e12c37b67_66334411($_smarty_tpl) {?><tr>
    <td class="username"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</td>
    <td id="<?php echo $_smarty_tpl->tpl_vars['postid']->value;?>
" class="message">
        <span><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</span>
        <textarea style="display:none" class="posttextarea"></textarea>
    </td>
    
<?php }} ?>