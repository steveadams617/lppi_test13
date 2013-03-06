<?php /* Smarty version Smarty-3.1.7, created on 2013-02-15 17:40:23
         compiled from "application/views\list_notes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17407511e64f7899074-58813001%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e116e97a1b96aa4f39bcf60a2d1640a9af1c411' => 
    array (
      0 => 'application/views\\list_notes.tpl',
      1 => 1360946363,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17407511e64f7899074-58813001',
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
  'unifunc' => 'content_511e64f7c3425',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_511e64f7c3425')) {function content_511e64f7c3425($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include 'C:\\xampp\\htdocs\\lppi_test13\\application\\libraries\\smarty\\plugins\\function.cycle.php';
?>Steve Wilson
<div class="block" id="block-tables">

                <div class="secondary-navigation">
                    <ul class="wat-cf">
                        <li class="first active"><a href="main/notes">Listing</a></li>
                        <li><a href="main/notes/create/">New record</a></li>
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
'<?php }?>><a href='main/notes/index/sort_by/id/sort_order/<?php if (($_smarty_tpl->tpl_vars['segments']->value['sort_by']=='id'&&$_smarty_tpl->tpl_vars['segments']->value['sort_order']=='asc')){?>desc<?php }else{ ?>asc<?php }?><?php if (($_smarty_tpl->tpl_vars['segments']->value['search_text'])){?>/search_text/<?php echo $_smarty_tpl->tpl_vars['segments']->value['search_text'];?>
/<?php }?>'><?php echo $_smarty_tpl->tpl_vars['fields']->value['id'];?>
</a></th>
			<th <?php if (($_smarty_tpl->tpl_vars['segments']->value['sort_by']=='episode_id')){?>class='sort_<?php echo $_smarty_tpl->tpl_vars['segments']->value['sort_order'];?>
'<?php }?>><a href='main/notes/index/sort_by/episode_id/sort_order/<?php if (($_smarty_tpl->tpl_vars['segments']->value['sort_by']=='episode_id'&&$_smarty_tpl->tpl_vars['segments']->value['sort_order']=='asc')){?>desc<?php }else{ ?>asc<?php }?><?php if (($_smarty_tpl->tpl_vars['segments']->value['search_text'])){?>/search_text/<?php echo $_smarty_tpl->tpl_vars['segments']->value['search_text'];?>
/<?php }?>'><?php echo $_smarty_tpl->tpl_vars['fields']->value['episode_id'];?>
</a></th>
			<th <?php if (($_smarty_tpl->tpl_vars['segments']->value['sort_by']=='user_id')){?>class='sort_<?php echo $_smarty_tpl->tpl_vars['segments']->value['sort_order'];?>
'<?php }?>><a href='main/notes/index/sort_by/user_id/sort_order/<?php if (($_smarty_tpl->tpl_vars['segments']->value['sort_by']=='user_id'&&$_smarty_tpl->tpl_vars['segments']->value['sort_order']=='asc')){?>desc<?php }else{ ?>asc<?php }?><?php if (($_smarty_tpl->tpl_vars['segments']->value['search_text'])){?>/search_text/<?php echo $_smarty_tpl->tpl_vars['segments']->value['search_text'];?>
/<?php }?>'><?php echo $_smarty_tpl->tpl_vars['fields']->value['user_id'];?>
</a></th>
			<th <?php if (($_smarty_tpl->tpl_vars['segments']->value['sort_by']=='body')){?>class='sort_<?php echo $_smarty_tpl->tpl_vars['segments']->value['sort_order'];?>
'<?php }?>><a href='main/notes/index/sort_by/body/sort_order/<?php if (($_smarty_tpl->tpl_vars['segments']->value['sort_by']=='body'&&$_smarty_tpl->tpl_vars['segments']->value['sort_order']=='asc')){?>desc<?php }else{ ?>asc<?php }?><?php if (($_smarty_tpl->tpl_vars['segments']->value['search_text'])){?>/search_text/<?php echo $_smarty_tpl->tpl_vars['segments']->value['search_text'];?>
/<?php }?>'><?php echo $_smarty_tpl->tpl_vars['fields']->value['body'];?>
</a></th>
			<th <?php if (($_smarty_tpl->tpl_vars['segments']->value['sort_by']=='printed')){?>class='sort_<?php echo $_smarty_tpl->tpl_vars['segments']->value['sort_order'];?>
'<?php }?>><a href='main/notes/index/sort_by/printed/sort_order/<?php if (($_smarty_tpl->tpl_vars['segments']->value['sort_by']=='printed'&&$_smarty_tpl->tpl_vars['segments']->value['sort_order']=='asc')){?>desc<?php }else{ ?>asc<?php }?><?php if (($_smarty_tpl->tpl_vars['segments']->value['search_text'])){?>/search_text/<?php echo $_smarty_tpl->tpl_vars['segments']->value['search_text'];?>
/<?php }?>'><?php echo $_smarty_tpl->tpl_vars['fields']->value['printed'];?>
</a></th>
			<th <?php if (($_smarty_tpl->tpl_vars['segments']->value['sort_by']=='include_plan')){?>class='sort_<?php echo $_smarty_tpl->tpl_vars['segments']->value['sort_order'];?>
'<?php }?>><a href='main/notes/index/sort_by/include_plan/sort_order/<?php if (($_smarty_tpl->tpl_vars['segments']->value['sort_by']=='include_plan'&&$_smarty_tpl->tpl_vars['segments']->value['sort_order']=='asc')){?>desc<?php }else{ ?>asc<?php }?><?php if (($_smarty_tpl->tpl_vars['segments']->value['search_text'])){?>/search_text/<?php echo $_smarty_tpl->tpl_vars['segments']->value['search_text'];?>
/<?php }?>'><?php echo $_smarty_tpl->tpl_vars['fields']->value['include_plan'];?>
</a></th>
			<th <?php if (($_smarty_tpl->tpl_vars['segments']->value['sort_by']=='note_date')){?>class='sort_<?php echo $_smarty_tpl->tpl_vars['segments']->value['sort_order'];?>
'<?php }?>><a href='main/notes/index/sort_by/note_date/sort_order/<?php if (($_smarty_tpl->tpl_vars['segments']->value['sort_by']=='note_date'&&$_smarty_tpl->tpl_vars['segments']->value['sort_order']=='asc')){?>desc<?php }else{ ?>asc<?php }?><?php if (($_smarty_tpl->tpl_vars['segments']->value['search_text'])){?>/search_text/<?php echo $_smarty_tpl->tpl_vars['segments']->value['search_text'];?>
/<?php }?>'><?php echo $_smarty_tpl->tpl_vars['fields']->value['note_date'];?>
</a></th>
			<th <?php if (($_smarty_tpl->tpl_vars['segments']->value['sort_by']=='note_time')){?>class='sort_<?php echo $_smarty_tpl->tpl_vars['segments']->value['sort_order'];?>
'<?php }?>><a href='main/notes/index/sort_by/note_time/sort_order/<?php if (($_smarty_tpl->tpl_vars['segments']->value['sort_by']=='note_time'&&$_smarty_tpl->tpl_vars['segments']->value['sort_order']=='asc')){?>desc<?php }else{ ?>asc<?php }?><?php if (($_smarty_tpl->tpl_vars['segments']->value['search_text'])){?>/search_text/<?php echo $_smarty_tpl->tpl_vars['segments']->value['search_text'];?>
/<?php }?>'><?php echo $_smarty_tpl->tpl_vars['fields']->value['note_time'];?>
</a></th>
			<th <?php if (($_smarty_tpl->tpl_vars['segments']->value['sort_by']=='status_id')){?>class='sort_<?php echo $_smarty_tpl->tpl_vars['segments']->value['sort_order'];?>
'<?php }?>><a href='main/notes/index/sort_by/status_id/sort_order/<?php if (($_smarty_tpl->tpl_vars['segments']->value['sort_by']=='status_id'&&$_smarty_tpl->tpl_vars['segments']->value['sort_order']=='asc')){?>desc<?php }else{ ?>asc<?php }?><?php if (($_smarty_tpl->tpl_vars['segments']->value['search_text'])){?>/search_text/<?php echo $_smarty_tpl->tpl_vars['segments']->value['search_text'];?>
/<?php }?>'><?php echo $_smarty_tpl->tpl_vars['fields']->value['status_id'];?>
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
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['user_id'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['body'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['printed'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['include_plan'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['note_date'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['note_time'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['row']->value['status_id'];?>
</td>

                                            <td width="80">
                                                <a href="main/notes/show/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><img src="iscaffold/images/view.png" alt="Show record" /></a>
                                                <a href="main/notes/edit/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><img src="iscaffold/images/edit.png" alt="Edit record" /></a>
                                                <a href="javascript:chk('main/notes/delete/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
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