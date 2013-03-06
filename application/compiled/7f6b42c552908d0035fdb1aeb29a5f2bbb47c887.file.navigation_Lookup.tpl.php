<?php /* Smarty version Smarty-3.1.7, created on 2013-02-15 17:42:47
         compiled from "application/views\navigation_Lookup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21077511e65872e0e49-53761582%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f6b42c552908d0035fdb1aeb29a5f2bbb47c887' => 
    array (
      0 => 'application/views\\navigation_Lookup.tpl',
      1 => 1360946363,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21077511e65872e0e49-53761582',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'table_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_511e6587368ad',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_511e6587368ad')) {function content_511e6587368ad($_smarty_tpl) {?><ul id="top_menu">
			<li<?php if (isset($_smarty_tpl->tpl_vars['table_name']->value)){?><?php if ($_smarty_tpl->tpl_vars['table_name']->value=='Insurances'){?> class='active'<?php }?><?php }?>><a href='Lookup/insurances'>Insurances</a></li>
			<li<?php if (isset($_smarty_tpl->tpl_vars['table_name']->value)){?><?php if ($_smarty_tpl->tpl_vars['table_name']->value=='Teams'){?> class='active'<?php }?><?php }?>><a href='Lookup/teams'>Teams</a></li>
</ul><?php }} ?>