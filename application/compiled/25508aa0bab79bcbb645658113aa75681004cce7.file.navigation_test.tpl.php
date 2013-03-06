<?php /* Smarty version Smarty-3.1.7, created on 2013-02-15 17:40:15
         compiled from "application/views\navigation_test.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5788511e64efded2e7-06951362%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25508aa0bab79bcbb645658113aa75681004cce7' => 
    array (
      0 => 'application/views\\navigation_test.tpl',
      1 => 1360946363,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5788511e64efded2e7-06951362',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'table_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_511e64efeeb35',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_511e64efeeb35')) {function content_511e64efeeb35($_smarty_tpl) {?><ul id="top_menu">
			<li<?php if (isset($_smarty_tpl->tpl_vars['table_name']->value)){?><?php if ($_smarty_tpl->tpl_vars['table_name']->value=='Episodes'){?> class='active'<?php }?><?php }?>><a href='test/episodes'>Episodes</a></li>
			<li<?php if (isset($_smarty_tpl->tpl_vars['table_name']->value)){?><?php if ($_smarty_tpl->tpl_vars['table_name']->value=='Organizations'){?> class='active'<?php }?><?php }?>><a href='test/organizations'>Organizations</a></li>
			<li<?php if (isset($_smarty_tpl->tpl_vars['table_name']->value)){?><?php if ($_smarty_tpl->tpl_vars['table_name']->value=='Provider'){?> class='active'<?php }?><?php }?>><a href='test/provider'>Provider</a></li>
			<li<?php if (isset($_smarty_tpl->tpl_vars['table_name']->value)){?><?php if ($_smarty_tpl->tpl_vars['table_name']->value=='Sfzips'){?> class='active'<?php }?><?php }?>><a href='test/sfzips'>Sfzips</a></li>
			<li<?php if (isset($_smarty_tpl->tpl_vars['table_name']->value)){?><?php if ($_smarty_tpl->tpl_vars['table_name']->value=='Staff'){?> class='active'<?php }?><?php }?>><a href='test/staff'>Staff</a></li>
			<li<?php if (isset($_smarty_tpl->tpl_vars['table_name']->value)){?><?php if ($_smarty_tpl->tpl_vars['table_name']->value=='Tasks'){?> class='active'<?php }?><?php }?>><a href='test/tasks'>Tasks</a></li>
			<li<?php if (isset($_smarty_tpl->tpl_vars['table_name']->value)){?><?php if ($_smarty_tpl->tpl_vars['table_name']->value=='Users'){?> class='active'<?php }?><?php }?>><a href='test/users'>Users</a></li>
</ul><?php }} ?>