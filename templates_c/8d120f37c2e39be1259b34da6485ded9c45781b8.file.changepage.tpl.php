<?php /* Smarty version Smarty-3.1.13, created on 2013-05-07 08:56:43
         compiled from "./templates/changepage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16003209775188bdfa0c9859-82487142%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d120f37c2e39be1259b34da6485ded9c45781b8' => 
    array (
      0 => './templates/changepage.tpl',
      1 => 1367916979,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16003209775188bdfa0c9859-82487142',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5188bdfa13e019_88106361',
  'variables' => 
  array (
    'buttonvalue' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5188bdfa13e019_88106361')) {function content_5188bdfa13e019_88106361($_smarty_tpl) {?><input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['buttonvalue']->value;?>
" onclick="window.location='<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
'" />
<?php }} ?>