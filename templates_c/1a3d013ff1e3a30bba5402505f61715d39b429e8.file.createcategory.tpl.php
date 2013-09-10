<?php /* Smarty version Smarty-3.1.13, created on 2013-05-07 10:06:41
         compiled from "./templates/createcategory.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18806165651860765e49067-74132883%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a3d013ff1e3a30bba5402505f61715d39b429e8' => 
    array (
      0 => './templates/createcategory.tpl',
      1 => 1367920875,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18806165651860765e49067-74132883',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51860765f337c0_24933831',
  'variables' => 
  array (
    'canary' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51860765f337c0_24933831')) {function content_51860765f337c0_24933831($_smarty_tpl) {?><form method="POST" action="createCategory.php" name="categoryform">
    <input type="text" name="categoryname" required />
    <input type="hidden" name="canary" value="<?php echo $_smarty_tpl->tpl_vars['canary']->value;?>
" />
    <input type="submit" value="Create Category" />
</form>
<?php }} ?>