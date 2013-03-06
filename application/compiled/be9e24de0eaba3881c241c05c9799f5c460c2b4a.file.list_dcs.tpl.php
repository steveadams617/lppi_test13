<?php /* Smarty version Smarty-3.1.7, created on 2013-02-15 22:14:07
         compiled from "application/views\list_dcs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31770511ea51f0b2c29-67485897%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be9e24de0eaba3881c241c05c9799f5c460c2b4a' => 
    array (
      0 => 'application/views\\list_dcs.tpl',
      1 => 1360946363,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31770511ea51f0b2c29-67485897',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'controlling_filter_text' => 0,
    'table_name' => 0,
    'data' => 0,
    'segments' => 0,
    'fields' => 0,
    'row' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_511ea51f28885',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_511ea51f28885')) {function content_511ea51f28885($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\lppi_test13\\application\\libraries\\smarty\\plugins\\function.cycle.php';
?>Steve Wilson
<div class="block" id="block-tables">

                <div class="secondary-navigation">
                    <ul class="wat-cf">
                        <li class="first active"><a href="main/dcs">Listing</a></li>
                        <li><a href="main/dcs/create/">New record</a></li>
                    </ul>
                </div>

                <div class="content">
                    <div class="inner">
                        <h3><?php if (($_smarty_tpl->tpl_vars['controlling_filter_text']->value)){?><?php echo $_smarty_tpl->tpl_vars['controlling_filter_text']->value;?>
: <?php }?> <?php echo $_smarty_tpl->tpl_vars['table_name']->value;?>
</h3>
                        <?php if (!empty($_smarty_tpl->tpl_vars['data']->value)){?>
                        	
                            <table class="table">
                            	<thead>
                                    
                                    			<th <?php if (($_smarty_tpl->tpl_vars['segments']->value['sort_by']=='id')){?>class='sort_<?php echo $_smarty_tpl->tpl_vars['segments']->value['sort_order'];?>
'<?php }?>><a href='main/dcs/index/sort_by/id/sort_order/<?php if (($_smarty_tpl->tpl_vars['segments']->value['sort_by']=='id'&&$_smarty_tpl->tpl_vars['segments']->value['sort_order']=='asc')){?>desc<?php }else{ ?>asc<?php }?><?php if (($_smarty_tpl->tpl_vars['segments']->value['search_text'])){?>/search_text/<?php echo $_smarty_tpl->tpl_vars['segments']->value['search_text'];?>
/<?php }?>'><?php echo $_smarty_tpl->tpl_vars['fields']->value['id'];?>
</a></th>
			<th <?php if (($_smarty_tpl->tpl_vars['segments']->value['sort_by']=='episode_id')){?>class='sort_<?php echo $_smarty_tpl->tpl_vars['segments']->value['sort_order'];?>
'<?php }?>><a href='main/dcs/index/sort_by/episode_id/sort_order/<?php if (($_smarty_tpl->tpl_vars['segments']->value['sort_by']=='episode_id'&&$_smarty_tpl->tpl_vars['segments']->value['sort_order']=='asc')){?>desc<?php }else{ ?>asc<?php }?><?php if (($_smarty_tpl->tpl_vars['segments']->value['search_text'])){?>/search_text/<?php echo $_smarty_tpl->tpl_vars['segments']->value['search_text'];?>
/<?php }?>'><?php echo $_smarty_tpl->tpl_vars['fields']->value['episode_id'];?>
</a></th>
			<th <?php if (($_smarty_tpl->tpl_vars['segments']->value['sort_by']=='plan')){?>class='sort_<?php echo $_smarty_tpl->tpl_vars['segments']->value['sort_order'];?>
'<?php }?>><a href='main/dcs/index/sort_by/plan/sort_order/<?php if (($_smarty_tpl->tpl_vars['segments']->value['sort_by']=='plan'&&$_smarty_tpl->tpl_vars['segments']->value['sort_order']=='asc')){?>desc<?php }else{ ?>asc<?php }?><?php if (($_smarty_tpl->tpl_vars['segments']->value['search_text'])){?>/search_text/<?php echo $_smarty_tpl->tpl_vars['segments']->value['search_text'];?>
/<?php }?>'><?php echo $_smarty_tpl->tpl_vars['fields']->value['plan'];?>
</a></th>

                                    <th width="80">Actions</th>
                            	</thead>
                            	<tbody>
                                	<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                                        <tr class="<?php echo smarty_function_cycle(array('values'=>'odd,even'),$_smarty_tpl);?>
">
                                            
                                            				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['episode_id'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['plan'];?>
</td>

                                            <td width="80">
                                                <a href="main/dcs/show/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><img src="iscaffold/images/view.png" alt="Show record" /></a>
                                                <a href="main/dcs/edit/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><img src="iscaffold/images/edit.png" alt="Edit record" /></a>
                                                <a href="javascript:chk('main/dcs/delete/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
')"><img src="iscaffold/images/delete.png" alt="Delete record" /></a>
                                            </td>
                            		    </tr>
                                	<?php } ?>
                            	</tbody>
                            </table>
                            <div class="actions-bar wat-cf">
								
                                <div class="pagination">
                                    <?php echo $_smarty_tpl->tpl_vars['pager']->value;?>

                                </div>
                            </div>
                        	
                        <?php }else{ ?>
                            No records found.
                        <?php }?>

                    </div><!-- .inner -->
                </div><!-- .content -->
            </div><!-- .block -->
			
			<script type="text/javascript" language="JavaScript">
               document.forms[0].elements[0].focus();
			</script>
<?php }} ?>