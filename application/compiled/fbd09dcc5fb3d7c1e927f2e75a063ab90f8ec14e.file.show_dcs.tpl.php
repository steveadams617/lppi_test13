<?php /* Smarty version Smarty-3.1.7, created on 2013-02-15 22:14:18
         compiled from "application/views\show_dcs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31015511ea52a7bdf45-72439408%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fbd09dcc5fb3d7c1e927f2e75a063ab90f8ec14e' => 
    array (
      0 => 'application/views\\show_dcs.tpl',
      1 => 1360946363,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31015511ea52a7bdf45-72439408',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'table_name' => 0,
    'id' => 0,
    'fields' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_511ea52a8a732',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_511ea52a8a732')) {function content_511ea52a8a732($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\lppi_test13\\application\\libraries\\smarty\\plugins\\function.cycle.php';
?><div class="block" id="block-tables">

                <div class="secondary-navigation">
                    <ul class="wat-cf">
                        <li class="first"><a href="main/dcs">Listing</a></li>
                        <li><a href="main/dcs/create/">New record</a></li>
                    </ul>
                </div>

                <div class="content">
                    <div class="inner">
						<h3>Details of <?php echo $_smarty_tpl->tpl_vars['table_name']->value;?>
, record #<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
</h3>

						<table class="table" width="50%">
                        	<thead>
                                <th width="20%">Field</th>
                                <th>Value</th>
                        	</thead>
						    <tr class="<?php echo smarty_function_cycle(array('values'=>'odd,even'),$_smarty_tpl);?>
">
                    <td><?php echo $_smarty_tpl->tpl_vars['fields']->value['id'];?>
:</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
</td>
                </tr><tr class="<?php echo smarty_function_cycle(array('values'=>'odd,even'),$_smarty_tpl);?>
">
                    <td><?php echo $_smarty_tpl->tpl_vars['fields']->value['episode_id'];?>
:</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['data']->value['episode_id'];?>
</td>
                </tr><tr class="<?php echo smarty_function_cycle(array('values'=>'odd,even'),$_smarty_tpl);?>
">
                    <td><?php echo $_smarty_tpl->tpl_vars['fields']->value['plan'];?>
:</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['data']->value['plan'];?>
</td>
                </tr><tr class="<?php echo smarty_function_cycle(array('values'=>'odd,even'),$_smarty_tpl);?>
">
                    <td><?php echo $_smarty_tpl->tpl_vars['fields']->value['transport_arranged_date'];?>
:</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['data']->value['transport_arranged_date'];?>
</td>
                </tr><tr class="<?php echo smarty_function_cycle(array('values'=>'odd,even'),$_smarty_tpl);?>
">
                    <td><?php echo $_smarty_tpl->tpl_vars['fields']->value['transport_details'];?>
:</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['data']->value['transport_details'];?>
</td>
                </tr>
						</table>
                        <div class="actions-bar wat-cf">
                            <div class="actions">
                                <a class="button" href="main/dcs/edit/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                                    <img src="iscaffold/backend_skins/images/icons/application_edit.png" alt="Edit record"> Edit record
                                </a>
                            </div>
                        </div>
                    </div><!-- .inner -->
                </div><!-- .content -->
            </div><!-- .block -->
<?php }} ?>