<?php /* Smarty version Smarty-3.1.13, created on 2013-05-07 10:32:33
         compiled from "./templates/reply.tpl" */ ?>
<?php /*%%SmartyHeaderCode:157114037551878853708ce8-96515549%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1307b0784ab721ce9119b6b49c587f818f803e9' => 
    array (
      0 => './templates/reply.tpl',
      1 => 1367921268,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157114037551878853708ce8-96515549',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51878853779927_81120078',
  'variables' => 
  array (
    'canary' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51878853779927_81120078')) {function content_51878853779927_81120078($_smarty_tpl) {?><form method="POST" action="reply.php" name="replyform">
    <textarea rows="4" cols="60" name="message" required></textarea>
    <input type="hidden" name="canary" value="<?php echo $_smarty_tpl->tpl_vars['canary']->value;?>
" />
    <input type="submit" value="Reply">
</form>
<?php }} ?>