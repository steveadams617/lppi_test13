<?php /* Smarty version Smarty-3.1.7, created on 2013-02-15 17:40:17
         compiled from "application/views\search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13355511e64f15162a7-69350278%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9b292b6b9b4bff20c1c2f9a57a2116f6243dc8b' => 
    array (
      0 => 'application/views\\search.tpl',
      1 => 1360946362,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13355511e64f15162a7-69350278',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'partial_path' => 0,
    'uri_segments' => 0,
    'fields' => 0,
    'segments' => 0,
    'sort_by' => 0,
    'sort_order' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_511e64f15bee8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_511e64f15bee8')) {function content_511e64f15bee8($_smarty_tpl) {?><form class="form" method='post' action='<?php echo $_smarty_tpl->tpl_vars['partial_path']->value;?>
/index<?php echo $_smarty_tpl->tpl_vars['uri_segments']->value;?>
' enctype="multipart/form-data">

		
		<div class="group grid8 first">
            <label class="label"><span class="error">*</span>Search for <?php echo $_smarty_tpl->tpl_vars['fields']->value['search_field'];?>
</label>
    		<div>
    	       	<input class="text_field medium" type="text" maxlength="255" value="<?php if (isset($_smarty_tpl->tpl_vars['segments']->value['search_text'])){?><?php echo $_smarty_tpl->tpl_vars['segments']->value['search_text'];?>
<?php }?>" name="search_text" />
    	       	<input type='hidden' value='<?php if (isset($_smarty_tpl->tpl_vars['sort_by']->value)){?><?php echo $_smarty_tpl->tpl_vars['sort_by']->value;?>
<?php }?>' name='sort_by' />
    	       	<input type='hidden' value='<?php if (isset($_smarty_tpl->tpl_vars['sort_order']->value)){?><?php echo $_smarty_tpl->tpl_vars['sort_order']->value;?>
<?php }?>' name='sort_order' />
    		</div>
    		
    	</div>
    
		
		<div class="group navform wat-cf grid3">
				<label class="label">&nbsp;</label>
				<button class="button" type="submit" value="search" name="submit">
					<img src="iscaffold/backend_skins/images/icons/tick.png" alt="Search"> Search
				</button>
		
		</div>
		
		<div class="group navform wat-cf">
				<label class="label">&nbsp;</label>
				<button class="button" type="submit" value="clear" name="submit">
					<img src="iscaffold/backend_skins/images/icons/cross.png" alt="Clear"> Clear
				</button>
		
		</div>
		
		<div class="group first">
		</div>
		
		
</form><?php }} ?>