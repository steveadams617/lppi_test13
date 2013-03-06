<?php /* Smarty version Smarty-3.1.7, created on 2013-02-15 22:14:08
         compiled from "application/views\form_dcs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8488511ea520c72e09-99173737%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9bcae52878ecc0bb851a8c96201293ed1018636' => 
    array (
      0 => 'application/views\\form_dcs.tpl',
      1 => 1360946363,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8488511ea520c72e09-99173737',
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
  'unifunc' => 'content_511ea520d8eae',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_511ea520d8eae')) {function content_511ea520d8eae($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\lppi_test13\\application\\libraries\\smarty\\plugins\\modifier.date_format.php';
?><div class="block" id="block-tables">

                <div class="secondary-navigation">
                    <ul class="wat-cf">
                        <li class="first"><a href="main/dcs">Listing</a></li>
                        <li class="<?php if ($_smarty_tpl->tpl_vars['action_mode']->value=='create'){?>active<?php }?>"><a href="main/dcs/create/">New record</a></li>
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

                        <form class="form" method='post' action='main/dcs/<?php echo $_smarty_tpl->tpl_vars['action_mode']->value;?>
/<?php if (isset($_smarty_tpl->tpl_vars['record_id']->value)){?><?php echo $_smarty_tpl->tpl_vars['record_id']->value;?>
<?php }?>' enctype="multipart/form-data">

                            

    
    	<div class="group ">
            <label class="label"><?php echo $_smarty_tpl->tpl_vars['fields']->value['plan'];?>
</label>
    		<div>
        		<textarea rows="3" cols="60" class="expand text_area" name="plan"><?php if (isset($_smarty_tpl->tpl_vars['data']->value)){?><?php echo $_smarty_tpl->tpl_vars['data']->value['plan'];?>
<?php }?></textarea>
    		</div>
    		
    	</div>
    
	
		<script>
		$(function() {
			$( "#transport_arranged_date" ).datepicker();
		});
		</script>
	 
    	<div class="group ">
            <label class="label"><?php echo $_smarty_tpl->tpl_vars['fields']->value['transport_arranged_date'];?>
</label>
    		<div>
    	       	<input class="text_field datepicker short" type="text" maxlength="255" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value)){?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['transport_arranged_date'],'m/d/Y');?>
<?php }?>" name="transport_arranged_date" id="transport_arranged_date"/>
    		</div>
    		
    	</div>
    
    	<div class="group ">
            <label class="label"><?php echo $_smarty_tpl->tpl_vars['fields']->value['transport_details'];?>
</label>
    		<div>
        		<textarea rows="3" cols="60" class="expand text_area" name="transport_details"><?php if (isset($_smarty_tpl->tpl_vars['data']->value)){?><?php echo $_smarty_tpl->tpl_vars['data']->value['transport_details'];?>
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