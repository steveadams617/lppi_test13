<?php /* Smarty version Smarty-3.1.7, created on 2013-02-15 22:08:15
         compiled from "application/views\navigation_patients.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4662511ea3bf48b732-81373901%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c77f52d7741021e7bbc3325036625dece4b9ca32' => 
    array (
      0 => 'application/views\\navigation_patients.tpl',
      1 => 1360946363,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4662511ea3bf48b732-81373901',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'table_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_511ea3bf5016e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_511ea3bf5016e')) {function content_511ea3bf5016e($_smarty_tpl) {?><ul id="top_menu">
			<li<?php if (isset($_smarty_tpl->tpl_vars['table_name']->value)){?><?php if ($_smarty_tpl->tpl_vars['table_name']->value=='Patients'){?> class='active'<?php }?><?php }?>><a href='patients/patients'>Patients</a></li>
</ul><?php }} ?>