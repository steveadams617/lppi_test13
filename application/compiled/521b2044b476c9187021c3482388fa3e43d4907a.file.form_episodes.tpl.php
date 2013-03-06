<?php /* Smarty version Smarty-3.1.7, created on 2013-02-15 22:09:34
         compiled from "application/views\form_episodes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15364511ea40e0a6ee8-04726659%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '521b2044b476c9187021c3482388fa3e43d4907a' => 
    array (
      0 => 'application/views\\form_episodes.tpl',
      1 => 1360946363,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15364511ea40e0a6ee8-04726659',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'action_mode' => 0,
    'record_id' => 0,
    'errors' => 0,
    'fields' => 0,
    'related_teams' => 0,
    'rel' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_511ea40e22ae0',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_511ea40e22ae0')) {function content_511ea40e22ae0($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\lppi_test13\\application\\libraries\\smarty\\plugins\\modifier.date_format.php';
?><div class="block" id="block-tables">

                <div class="secondary-navigation">
                    <ul class="wat-cf">
                        <li class="first"><a href="test/episodes">Listing</a></li>
                        <li class="<?php if ($_smarty_tpl->tpl_vars['action_mode']->value=='create'){?>active<?php }?>"><a href="test/episodes/create/">New record</a></li>
                    </ul>
                </div>

                <div class="content">
                    <div class="inner">
                        <?php if ($_smarty_tpl->tpl_vars['action_mode']->value=='create'){?>
                            <h3>Add new record</h3>
                        <?php }else{ ?>
                            <h3>Edit record: #<?php echo $_smarty_tpl->tpl_vars['record_id']->value;?>
</h3>
                        <?php }?>
                        <?php if (isset($_smarty_tpl->tpl_vars['errors']->value)){?>
                            <div class="flash">
                                <div class="message error">
                                    <p><?php echo $_smarty_tpl->tpl_vars['errors']->value;?>
</p>
                                </div>
                            </div>
                        <?php }?>

                        <form class="form" method='post' action='test/episodes/<?php echo $_smarty_tpl->tpl_vars['action_mode']->value;?>
/<?php if (isset($_smarty_tpl->tpl_vars['record_id']->value)){?><?php echo $_smarty_tpl->tpl_vars['record_id']->value;?>
<?php }?>' enctype="multipart/form-data">

                            

    
    	<div class="group ">
            <label class="label"><span class="error">*</span><?php echo $_smarty_tpl->tpl_vars['fields']->value['team_id'];?>
</label>
    		<select class="field select addr" name="team_id" >
                <option value="0"></option>
                <?php  $_smarty_tpl->tpl_vars['rel'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rel']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['related_teams']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rel']->key => $_smarty_tpl->tpl_vars['rel']->value){
$_smarty_tpl->tpl_vars['rel']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['rel']->value['teams_id'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['data']->value)){?><?php if ($_smarty_tpl->tpl_vars['data']->value['team_id']==$_smarty_tpl->tpl_vars['rel']->value['teams_id']){?> selected="selected"<?php }?><?php }?>><?php echo $_smarty_tpl->tpl_vars['rel']->value['teams_name'];?>
</option>
                <?php } ?>
        	</select>
    		
        </div>
    
    	<div class="group ">
            <label class="label"><?php echo $_smarty_tpl->tpl_vars['fields']->value['oneliner'];?>
</label>
    		<div>
        		<textarea rows="3" cols="60" class="expand text_area" name="oneliner"><?php if (isset($_smarty_tpl->tpl_vars['data']->value)){?><?php echo $_smarty_tpl->tpl_vars['data']->value['oneliner'];?>
<?php }?></textarea>
    		</div>
    		
    	</div>
    
	
		<script>
		$(function() {
			$( "#start_date" ).datepicker();
		});
		</script>
	 
    	<div class="group first grid6">
            <label class="label"><span class="error">*</span><?php echo $_smarty_tpl->tpl_vars['fields']->value['start_date'];?>
</label>
    		<div>
    	       	<input class="text_field datepicker short" type="text" maxlength="255" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value)){?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['start_date'],'m/d/Y');?>
<?php }?>" name="start_date" id="start_date"/>
    		</div>
    		
    	</div>
    
	
		<script>
		$(function() {
			$( "#end_date" ).datepicker();
		});
		</script>
	 
    	<div class="group grid6">
            <label class="label"><?php echo $_smarty_tpl->tpl_vars['fields']->value['end_date'];?>
</label>
    		<div>
    	       	<input class="text_field datepicker short" type="text" maxlength="255" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value)){?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['end_date'],'m/d/Y');?>
<?php }?>" name="end_date" id="end_date"/>
    		</div>
    		
    	</div>
    
    	<div class="group first ">
            <label class="label"><?php echo $_smarty_tpl->tpl_vars['fields']->value['historyphysical'];?>
</label>
    		<div>
        		<textarea rows="10" cols="50" class="text_area" name="historyphysical"><?php if (isset($_smarty_tpl->tpl_vars['data']->value)){?><?php echo $_smarty_tpl->tpl_vars['data']->value['historyphysical'];?>
<?php }?></textarea>
    		</div>
    		
    	</div>
    

                            <div class="group navform wat-cf first">
                                    <button class="button" type="submit">
                                        <img src="iscaffold/backend_skins/images/icons/tick.png" alt="Save"> Save
                                    </button>
                                    <span class="text_button_padding">or</span>
                                    <a class="text_button_padding link_button" href="javascript:window.history.back();">Cancel</a>
                            </div>
                        </form>
                    </div><!-- .inner -->
                </div><!-- .content -->
            </div><!-- .block -->

	 <script type="text/javascript" language="JavaScript">
               document.forms[0].elements[0].focus();
     </script>
<?php }} ?>