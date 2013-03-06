<?php /* Smarty version Smarty-3.1.7, created on 2013-02-15 22:13:57
         compiled from "application/views\show_notes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10704511ea5154f92b8-06319714%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a2ea425c4f7074f90aa3863551c89e8e83df081' => 
    array (
      0 => 'application/views\\show_notes.tpl',
      1 => 1360946363,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10704511ea5154f92b8-06319714',
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
  'unifunc' => 'content_511ea515660b0',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_511ea515660b0')) {function content_511ea515660b0($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\lppi_test13\\application\\libraries\\smarty\\plugins\\function.cycle.php';
?><div class="block" id="block-tables">

                <div class="secondary-navigation">
                    <ul class="wat-cf">
                        <li class="first"><a href="main/notes">Listing</a></li>
                        <li><a href="main/notes/create/">New record</a></li>
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
                    <td><?php echo $_smarty_tpl->tpl_vars['fields']->value['user_id'];?>
:</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['data']->value['user_id'];?>
</td>
                </tr><tr class="<?php echo smarty_function_cycle(array('values'=>'odd,even'),$_smarty_tpl);?>
">
                    <td><?php echo $_smarty_tpl->tpl_vars['fields']->value['body'];?>
:</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['data']->value['body'];?>
</td>
                </tr><tr class="<?php echo smarty_function_cycle(array('values'=>'odd,even'),$_smarty_tpl);?>
">
                    <td><?php echo $_smarty_tpl->tpl_vars['fields']->value['printed'];?>
:</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['data']->value['printed'];?>
</td>
                </tr><tr class="<?php echo smarty_function_cycle(array('values'=>'odd,even'),$_smarty_tpl);?>
">
                    <td><?php echo $_smarty_tpl->tpl_vars['fields']->value['include_plan'];?>
:</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['data']->value['include_plan'];?>
</td>
                </tr><tr class="<?php echo smarty_function_cycle(array('values'=>'odd,even'),$_smarty_tpl);?>
">
                    <td><?php echo $_smarty_tpl->tpl_vars['fields']->value['note_date'];?>
:</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['data']->value['note_date'];?>
</td>
                </tr><tr class="<?php echo smarty_function_cycle(array('values'=>'odd,even'),$_smarty_tpl);?>
">
                    <td><?php echo $_smarty_tpl->tpl_vars['fields']->value['note_time'];?>
:</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['data']->value['note_time'];?>
</td>
                </tr><tr class="<?php echo smarty_function_cycle(array('values'=>'odd,even'),$_smarty_tpl);?>
">
                    <td><?php echo $_smarty_tpl->tpl_vars['fields']->value['status_id'];?>
:</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['data']->value['status_id'];?>
</td>
                </tr>
						</table>
                        <div class="actions-bar wat-cf">
                            <div class="actions">
                                <a class="button" href="main/notes/edit/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                                    <img src="iscaffold/backend_skins/images/icons/application_edit.png" alt="Edit record"> Edit record
                                </a>
                            </div>
                        </div>
                    </div><!-- .inner -->
                </div><!-- .content -->
            </div><!-- .block -->
<?php }} ?>