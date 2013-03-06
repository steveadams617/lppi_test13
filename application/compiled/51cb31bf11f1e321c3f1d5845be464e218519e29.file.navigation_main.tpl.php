<?php /* Smarty version Smarty-3.1.7, created on 2013-02-15 17:40:21
         compiled from "application/views\navigation_main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18794511e64f5718785-89350199%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51cb31bf11f1e321c3f1d5845be464e218519e29' => 
    array (
      0 => 'application/views\\navigation_main.tpl',
      1 => 1360946363,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18794511e64f5718785-89350199',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'table_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_511e64f57b684',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_511e64f57b684')) {function content_511e64f57b684($_smarty_tpl) {?><ul id="top_menu">
			<li<?php if (isset($_smarty_tpl->tpl_vars['table_name']->value)){?><?php if ($_smarty_tpl->tpl_vars['table_name']->value=='Dcs'){?> class='active'<?php }?><?php }?>><a href='main/dcs'>Dcs</a></li>
			<li<?php if (isset($_smarty_tpl->tpl_vars['table_name']->value)){?><?php if ($_smarty_tpl->tpl_vars['table_name']->value=='Notes'){?> class='active'<?php }?><?php }?>><a href='main/notes'>Notes</a></li>
			<li<?php if (isset($_smarty_tpl->tpl_vars['table_name']->value)){?><?php if ($_smarty_tpl->tpl_vars['table_name']->value=='Supports'){?> class='active'<?php }?><?php }?>><a href='main/supports'>Supports</a></li>
</ul><?php }} ?>