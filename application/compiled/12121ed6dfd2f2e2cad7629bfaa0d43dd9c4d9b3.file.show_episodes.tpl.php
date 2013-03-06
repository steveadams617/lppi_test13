<?php /* Smarty version Smarty-3.1.7, created on 2013-02-15 17:40:19
         compiled from "application/views\show_episodes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1548511e64f33a6918-59144604%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12121ed6dfd2f2e2cad7629bfaa0d43dd9c4d9b3' => 
    array (
      0 => 'application/views\\show_episodes.tpl',
      1 => 1360946363,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1548511e64f33a6918-59144604',
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
  'unifunc' => 'content_511e64f34cfb2',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_511e64f34cfb2')) {function content_511e64f34cfb2($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\lppi_test13\\application\\libraries\\smarty\\plugins\\function.cycle.php';
?><div class="block" id="block-tables">

                <div class="secondary-navigation">
                    <ul class="wat-cf">
                        <li class="first"><a href="test/episodes">Listing</a></li>
                        <li><a href="test/episodes/create/">New record</a></li>
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
                    <td><?php echo $_smarty_tpl->tpl_vars['fields']->value['patient_id'];?>
:</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['data']->value['patient_id'];?>
</td>
                </tr><tr class="<?php echo smarty_function_cycle(array('values'=>'odd,even'),$_smarty_tpl);?>
">
                    <td><?php echo $_smarty_tpl->tpl_vars['fields']->value['team_id'];?>
:</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['data']->value['team_id'];?>
</td>
                </tr><tr class="<?php echo smarty_function_cycle(array('values'=>'odd,even'),$_smarty_tpl);?>
">
                    <td><?php echo $_smarty_tpl->tpl_vars['fields']->value['oneliner'];?>
:</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['data']->value['oneliner'];?>
</td>
                </tr><tr class="<?php echo smarty_function_cycle(array('values'=>'odd,even'),$_smarty_tpl);?>
">
                    <td><?php echo $_smarty_tpl->tpl_vars['fields']->value['start_date'];?>
:</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['data']->value['start_date'];?>
</td>
                </tr><tr class="<?php echo smarty_function_cycle(array('values'=>'odd,even'),$_smarty_tpl);?>
">
                    <td><?php echo $_smarty_tpl->tpl_vars['fields']->value['end_date'];?>
:</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['data']->value['end_date'];?>
</td>
                </tr><tr class="<?php echo smarty_function_cycle(array('values'=>'odd,even'),$_smarty_tpl);?>
">
                    <td><?php echo $_smarty_tpl->tpl_vars['fields']->value['historyphysical'];?>
:</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['data']->value['historyphysical'];?>
</td>
                </tr>
						</table>
                        <div class="actions-bar wat-cf">
                            <div class="actions">
                                <a class="button" href="test/episodes/edit/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                                    <img src="iscaffold/backend_skins/images/icons/application_edit.png" alt="Edit record"> Edit record
                                </a>
                            </div>
                        </div>
                    </div><!-- .inner -->
                </div><!-- .content -->
            </div><!-- .block -->
<?php }} ?>