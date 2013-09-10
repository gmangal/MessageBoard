<?php /* Smarty version Smarty-3.1.13, created on 2013-05-05 20:19:55
         compiled from "./templates/createtopic.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26521655851863c6c823ef1-19769133%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '747a259225a488e80b548de464edc7cef1c0b7b4' => 
    array (
      0 => './templates/createtopic.tpl',
      1 => 1367752313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26521655851863c6c823ef1-19769133',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51863c6c83cfd9_52194751',
  'variables' => 
  array (
    'canary' => 0,
    'catid' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51863c6c83cfd9_52194751')) {function content_51863c6c83cfd9_52194751($_smarty_tpl) {?><form method="POST" action="createTopic.php" name="topicform">
    <input type="text" name="topicname" />
    <input type="hidden" name="canary" value="<?php echo $_smarty_tpl->tpl_vars['canary']->value;?>
" />
    <input type="hidden" name="catid" value="<?php echo $_smarty_tpl->tpl_vars['catid']->value;?>
" />
    <input type="submit" value="Create Topic" />
</form>
<?php }} ?>