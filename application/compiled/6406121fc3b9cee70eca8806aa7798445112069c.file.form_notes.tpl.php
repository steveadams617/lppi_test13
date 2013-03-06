<?php /* Smarty version Smarty-3.1.7, created on 2013-02-15 22:13:35
         compiled from "application/views\form_notes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29133511ea4ffb442b8-60172910%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6406121fc3b9cee70eca8806aa7798445112069c' => 
    array (
      0 => 'application/views\\form_notes.tpl',
      1 => 1360946363,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29133511ea4ffb442b8-60172910',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'action_mode' => 0,
    'record_id' => 0,
    'errors' => 0,
    'fields' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_511ea4ffcb2ee',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_511ea4ffcb2ee')) {function content_511ea4ffcb2ee($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\lppi_test13\\application\\libraries\\smarty\\plugins\\modifier.date_format.php';
?><div class="block" id="block-tables">

                <div class="secondary-navigation">
                    <ul class="wat-cf">
                        <li class="first"><a href="main/notes">Listing</a></li>
                        <li class="<?php if ($_smarty_tpl->tpl_vars['action_mode']->value=='create'){?>active<?php }?>"><a href="main/notes/create/">New record</a></li>
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

                        <form class="form" method='post' action='main/notes/<?php echo $_smarty_tpl->tpl_vars['action_mode']->value;?>
/<?php if (isset($_smarty_tpl->tpl_vars['record_id']->value)){?><?php echo $_smarty_tpl->tpl_vars['record_id']->value;?>
<?php }?>' enctype="multipart/form-data">

                            

    

    
    	<div class="group first ">
            <label class="label"><span class="error">*</span><?php echo $_smarty_tpl->tpl_vars['fields']->value['body'];?>
</label>
    		<div>
        		<textarea rows="3" cols="60" class="expand text_area" name="body"><?php if (isset($_smarty_tpl->tpl_vars['data']->value)){?><?php echo $_smarty_tpl->tpl_vars['data']->value['body'];?>
<?php }?></textarea>
    		</div>
    		
    	</div>
    
    	<div class="group first ">
            <label class="label"><?php echo $_smarty_tpl->tpl_vars['fields']->value['printed'];?>
</label>
            <input class="field checkbox" type="checkbox" value="1" name="printed"<?php if (isset($_smarty_tpl->tpl_vars['data']->value)){?><?php if ($_smarty_tpl->tpl_vars['data']->value['printed']==1){?> checked="checked"<?php }?><?php }?> />

    		
    	</div>
    
    	<div class="group ">
            <label class="label"><?php echo $_smarty_tpl->tpl_vars['fields']->value['include_plan'];?>
</label>
            <input class="field checkbox" type="checkbox" value="1" name="include_plan"<?php if (isset($_smarty_tpl->tpl_vars['data']->value)){?><?php if ($_smarty_tpl->tpl_vars['data']->value['include_plan']==1){?> checked="checked"<?php }?><?php }?> />

    		
    	</div>
    
	
		<script>
		$(function() {
			$( "#note_date" ).datepicker();
		});
		</script>
	 
    	<div class="group first ">
            <label class="label"><span class="error">*</span><?php echo $_smarty_tpl->tpl_vars['fields']->value['note_date'];?>
</label>
    		<div>
    	       	<input class="text_field datepicker short" type="text" maxlength="255" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value)){?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['note_date'],'m/d/Y');?>
<?php }?>" name="note_date" id="note_date"/>
    		</div>
    		
    	</div>
    
		
			<script>
				jQuery(function($){
					$("#note_time").mask("99:99:99");
				});
			</script>
		  
    	<div class="group ">
            <label class="label"><span class="error">*</span><?php echo $_smarty_tpl->tpl_vars['fields']->value['note_time'];?>
</label>
    		<div>
    	       	<input class="text_field " type="text" maxlength="255" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value)){?><?php echo $_smarty_tpl->tpl_vars['data']->value['note_time'];?>
<?php }?>" name="note_time" id="note_time"/>
    		</div>
    		
    	</div>
    
    	<div class="group ">
            <label class="label"><span class="error">*</span><?php echo $_smarty_tpl->tpl_vars['fields']->value['status_id'];?>
</label>
    		<div>
    	       	<input class="text_field " type="text" maxlength="255" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value)){?><?php echo $_smarty_tpl->tpl_vars['data']->value['status_id'];?>
<?php }?>" name="status_id" />
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