<?php /* Smarty version Smarty-3.1.13, created on 2013-05-07 03:38:15
         compiled from "./templates/editpostbutton.tpl" */ ?>
<?php /*%%SmartyHeaderCode:170353272151877e12c0ee42-19453153%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eabe8594b6794ce43c18ee6280f0c64899b045ea' => 
    array (
      0 => './templates/editpostbutton.tpl',
      1 => 1367897643,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170353272151877e12c0ee42-19453153',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51877e12c1bea2_79952228',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51877e12c1bea2_79952228')) {function content_51877e12c1bea2_79952228($_smarty_tpl) {?><td>
    <input type="submit" value="Edit Post" onclick="editPost(this);" />
    <input type="submit" value="Edit" style="display:none" onclick="submitEdit(this);" />
</td>
<?php }} ?>