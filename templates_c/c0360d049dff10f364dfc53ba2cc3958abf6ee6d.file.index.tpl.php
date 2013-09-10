<?php /* Smarty version Smarty-3.1.13, created on 2013-04-30 20:58:06
         compiled from "./templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:86476261751782508cd53c3-45070219%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0360d049dff10f364dfc53ba2cc3958abf6ee6d' => 
    array (
      0 => './templates/index.tpl',
      1 => 1367032921,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '86476261751782508cd53c3-45070219',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51782508d42d05_05892514',
  'variables' => 
  array (
    'title' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51782508d42d05_05892514')) {function content_51782508d42d05_05892514($_smarty_tpl) {?>

<!doctype html>
<html>
<head>
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <meta charset=utf-8 />
</head>
<body>
    <div id="allcategories">
        <?php echo $_smarty_tpl->getSubTemplate ("category.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

    </div>
</body>
</html>
<?php }} ?>