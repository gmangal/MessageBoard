<?php /* Smarty version Smarty-3.1.13, created on 2013-05-07 10:26:47
         compiled from "./templates/topic.tpl" */ ?>
<?php /*%%SmartyHeaderCode:101109142951863e4c0b4af3-01724132%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06bd467a41e6c2714e6b757018b04c85352b50ad' => 
    array (
      0 => './templates/topic.tpl',
      1 => 1367922405,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '101109142951863e4c0b4af3-01724132',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51863e4c12bde0_88064442',
  'variables' => 
  array (
    'url' => 0,
    'topicname' => 0,
    'topicposts' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51863e4c12bde0_88064442')) {function content_51863e4c12bde0_88064442($_smarty_tpl) {?><tr>
    <td class="name">
        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">
            <span class="topicname"><?php echo $_smarty_tpl->tpl_vars['topicname']->value;?>
</span>
        </a>
    </td>
    <td class="numsomething">
        <span class="topicposts"><?php echo $_smarty_tpl->tpl_vars['topicposts']->value;?>
</span>
    </td>
</tr>
<?php }} ?>