<?php /* Smarty version Smarty-3.1.13, created on 2013-05-07 10:27:52
         compiled from "./templates/category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11001250895180305ee25ac3-23541026%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b52f9f46cc5c3c06e852e228923844d9826c0b2' => 
    array (
      0 => './templates/category.tpl',
      1 => 1367922470,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11001250895180305ee25ac3-23541026',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5180305ee98803_38644213',
  'variables' => 
  array (
    'url' => 0,
    'categoryname' => 0,
    'categorythreads' => 0,
    'categoryposts' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5180305ee98803_38644213')) {function content_5180305ee98803_38644213($_smarty_tpl) {?><div class="category">
    <tr>
        <td class="name">
            <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">
                <span class="categoryname"><?php echo $_smarty_tpl->tpl_vars['categoryname']->value;?>
</span>
            </a>
        </td>
        <td class="numsomething">
            <span class="categorythreads"><?php echo $_smarty_tpl->tpl_vars['categorythreads']->value;?>
</span>
        </td>
        <td class="numsomething">
            <span class="categoryposts"><?php echo $_smarty_tpl->tpl_vars['categoryposts']->value;?>
</span>
        </td>
    </tr>
</div>
<?php }} ?>