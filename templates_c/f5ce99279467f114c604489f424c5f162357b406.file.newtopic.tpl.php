<?php /* Smarty version Smarty-3.1.13, created on 2013-05-07 10:46:14
         compiled from "./templates/newtopic.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17386893945186c4eb03eb20-32062117%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5ce99279467f114c604489f424c5f162357b406' => 
    array (
      0 => './templates/newtopic.tpl',
      1 => 1367921218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17386893945186c4eb03eb20-32062117',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5186c4eb09e1b2_54143026',
  'variables' => 
  array (
    'canary' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5186c4eb09e1b2_54143026')) {function content_5186c4eb09e1b2_54143026($_smarty_tpl) {?><form method="POST" action="createTopic.php" name="topicform">
    <label for="topicname">Title</label>
    <input type="text" id="topicname" name="topicname" required><br>
    <label for="OP">Message</label>
    <textarea rows="4" cols="40" id="OP" name="OP"></textarea></br>
    <input type="hidden" name="canary" value="<?php echo $_smarty_tpl->tpl_vars['canary']->value;?>
" />
    <input type="submit" value="Submit">
</form>
<?php }} ?>