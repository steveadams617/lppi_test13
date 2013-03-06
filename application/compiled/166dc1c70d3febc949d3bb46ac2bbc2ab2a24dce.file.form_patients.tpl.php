<?php /* Smarty version Smarty-3.1.7, created on 2013-02-15 22:08:21
         compiled from "application/views\form_patients.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19606511ea3c597b0c1-11118399%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '166dc1c70d3febc949d3bb46ac2bbc2ab2a24dce' => 
    array (
      0 => 'application/views\\form_patients.tpl',
      1 => 1360946363,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19606511ea3c597b0c1-11118399',
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
  'unifunc' => 'content_511ea3c5b8ddc',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_511ea3c5b8ddc')) {function content_511ea3c5b8ddc($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\lppi_test13\\application\\libraries\\smarty\\plugins\\modifier.date_format.php';
?><div class="block" id="block-tables">

                <div class="secondary-navigation">
                    <ul class="wat-cf">
                        <li class="first"><a href="patients/patients">Listing</a></li>
                        <li class="<?php if ($_smarty_tpl->tpl_vars['action_mode']->value=='create'){?>active<?php }?>"><a href="patients/patients/create/">New record</a></li>
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

                        <form class="form" method='post' action='patients/patients/<?php echo $_smarty_tpl->tpl_vars['action_mode']->value;?>
/<?php if (isset($_smarty_tpl->tpl_vars['record_id']->value)){?><?php echo $_smarty_tpl->tpl_vars['record_id']->value;?>
<?php }?>' enctype="multipart/form-data">

                            
    	<div class="group first grid6">
            <label class="label"><span class="error">*</span><?php echo $_smarty_tpl->tpl_vars['fields']->value['first_name'];?>
</label>
    		<div>
    	       	<input class="text_field " type="text" maxlength="255" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value)){?><?php echo $_smarty_tpl->tpl_vars['data']->value['first_name'];?>
<?php }?>" name="first_name" />
    		</div>
    		
    	</div>
    
    	<div class="group grid6">
            <label class="label"><span class="error">*</span><?php echo $_smarty_tpl->tpl_vars['fields']->value['last_name'];?>
</label>
    		<div>
    	       	<input class="text_field " type="text" maxlength="255" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value)){?><?php echo $_smarty_tpl->tpl_vars['data']->value['last_name'];?>
<?php }?>" name="last_name" />
    		</div>
    		
    	</div>
    
    	<div class="group first grid6">
            <label class="label"><?php echo $_smarty_tpl->tpl_vars['fields']->value['middle_name'];?>
</label>
    		<div>
    	       	<input class="text_field " type="text" maxlength="255" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value)){?><?php echo $_smarty_tpl->tpl_vars['data']->value['middle_name'];?>
<?php }?>" name="middle_name" />
    		</div>
    		
    	</div>
    
    	<div class="group grid6">
            <label class="label"><?php echo $_smarty_tpl->tpl_vars['fields']->value['nick_alias'];?>
</label>
    		<div>
    	       	<input class="text_field " type="text" maxlength="255" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value)){?><?php echo $_smarty_tpl->tpl_vars['data']->value['nick_alias'];?>
<?php }?>" name="nick_alias" />
    		</div>
    		
    	</div>
    
		
			<script>
				jQuery(function($){
					$("#mrn").mask("9999-9999");
				});
			</script>
		  
    	<div class="group first grid6">
            <label class="label"><span class="error">*</span><?php echo $_smarty_tpl->tpl_vars['fields']->value['mrn'];?>
</label>
    		<div>
    	       	<input class="text_field short" type="text" maxlength="255" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value)){?><?php echo $_smarty_tpl->tpl_vars['data']->value['mrn'];?>
<?php }?>" name="mrn" id="mrn"/>
    		</div>
    		
    	</div>
    
	
		<script>
		$(function() {
			$( "#DOB" ).datepicker();
		});
		</script>
	 
    	<div class="group grid6">
            <label class="label"><span class="error">*</span><?php echo $_smarty_tpl->tpl_vars['fields']->value['DOB'];?>
</label>
    		<div>
    	       	<input class="text_field datepicker short" type="text" maxlength="255" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value)){?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['DOB'],'m/d/Y');?>
<?php }?>" name="DOB" id="DOB"/>
    		</div>
    		
    	</div>
    
    	<div class="group first grid4">
            <label class="label"><?php echo $_smarty_tpl->tpl_vars['fields']->value['city'];?>
</label>
    		<div>
    	       	<input class="text_field " type="text" maxlength="255" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value)){?><?php echo $_smarty_tpl->tpl_vars['data']->value['city'];?>
<?php }?>" name="city" />
    		</div>
    		
    	</div>
    
		
			<script>
				jQuery(function($){
					$("#state").mask("aa");
				});
			</script>
		  
    	<div class="group grid4">
            <label class="label"><?php echo $_smarty_tpl->tpl_vars['fields']->value['state'];?>
</label>
    		<div>
    	       	<input class="text_field " type="text" maxlength="255" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value)){?><?php echo $_smarty_tpl->tpl_vars['data']->value['state'];?>
<?php }?>" name="state" id="state"/>
    		</div>
    		
    	</div>
    
		
			<script>
				jQuery(function($){
					$("#zip").mask("99999");
				});
			</script>
		  
    	<div class="group grid4">
            <label class="label"><?php echo $_smarty_tpl->tpl_vars['fields']->value['zip'];?>
</label>
    		<div>
    	       	<input class="text_field " type="text" maxlength="255" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value)){?><?php echo $_smarty_tpl->tpl_vars['data']->value['zip'];?>
<?php }?>" name="zip" id="zip"/>
    		</div>
    		
    	</div>
    
		
			<script>
				jQuery(function($){
					$("#phone").mask("(999) 999-9999");
				});
			</script>
		  
    	<div class="group first ">
            <label class="label"><?php echo $_smarty_tpl->tpl_vars['fields']->value['phone'];?>
</label>
    		<div>
    	       	<input class="text_field short" type="text" maxlength="255" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value)){?><?php echo $_smarty_tpl->tpl_vars['data']->value['phone'];?>
<?php }?>" name="phone" id="phone"/>
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