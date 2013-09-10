<?php /* Smarty version Smarty-3.1.13, created on 2013-05-06 09:55:30
         compiled from "./templates/editpost.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17668966751877e12c3cc93-97164274%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88e34903e0350eeabdd6c3f38440188a953a1009' => 
    array (
      0 => './templates/editpost.tpl',
      1 => 1367833860,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17668966751877e12c3cc93-97164274',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'canary' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51877e12c4edf5_45257813',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51877e12c4edf5_45257813')) {function content_51877e12c4edf5_45257813($_smarty_tpl) {?><form method="POST" action="alterpost.php" name="editpostform">
    <input type="hidden" name="canary" value="<?php echo $_smarty_tpl->tpl_vars['canary']->value;?>
" />
    <label for="message">Message</label>
    <textarea rows="4" cols="40" id="message" name="message" value="<?php echo $_smarty_tpl->tpl_vars['message']->value;?>
"></textarea>
    <input type="submit" value="Submit" />
</form>
<?php }} ?>