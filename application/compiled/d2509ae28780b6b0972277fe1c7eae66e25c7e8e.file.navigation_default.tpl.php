<?php /* Smarty version Smarty-3.1.7, created on 2013-02-15 17:40:03
         compiled from "application/views\navigation_default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24480511e64e3a777a4-77136284%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2509ae28780b6b0972277fe1c7eae66e25c7e8e' => 
    array (
      0 => 'application/views\\navigation_default.tpl',
      1 => 1360946363,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24480511e64e3a777a4-77136284',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'table_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_511e64e3a9120',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_511e64e3a9120')) {function content_511e64e3a9120($_smarty_tpl) {?><ul id="top_menu">
			<li<?php if (isset($_smarty_tpl->tpl_vars['table_name']->value)){?><?php if ($_smarty_tpl->tpl_vars['table_name']->value=='Printgroups'){?> class='active'<?php }?><?php }?>><a href='printgroups'>Printgroups</a></li>
</ul><?php }} ?>