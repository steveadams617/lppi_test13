<div class="block" id="block-tables">

                <div class="secondary-navigation">
                    <ul class="wat-cf">
                        <li class="first"><a href="patients/patients">Listing</a></li>
                        <li class="{if $action_mode == 'create'}active{/if}"><a href="patients/patients/create/">New record</a></li>
                    </ul>
                </div>

                <div class="content">
                    <div class="inner">
                        {if $action_mode == 'create'}
                            <h3>Add new record</h3>
                        {else}
                            <h3>Edit record: #{$record_id}</h3>
                        {/if}
                        {if isset($errors)}
                            <div class="flash">
                                <div class="message error">
                                    <p>{$errors}</p>
                                </div>
                            </div>
                        {/if}

                        <form class="form" method='post' action='patients/patients/{$action_mode}/{if isset($record_id)}{$record_id}{/if}' enctype="multipart/form-data">

                            
    	<div class="group first grid6">
            <label class="label"><span class="error">*</span>{$fields.first_name}</label>
    		<div>
    	       	<input class="text_field " type="text" maxlength="255" value="{if isset($data)}{$data.first_name}{/if}" name="first_name" />
    		</div>
    		
    	</div>
    
    	<div class="group grid6">
            <label class="label"><span class="error">*</span>{$fields.last_name}</label>
    		<div>
    	       	<input class="text_field " type="text" maxlength="255" value="{if isset($data)}{$data.last_name}{/if}" name="last_name" />
    		</div>
    		
    	</div>
    
    	<div class="group first grid6">
            <label class="label">{$fields.middle_name}</label>
    		<div>
    	       	<input class="text_field " type="text" maxlength="255" value="{if isset($data)}{$data.middle_name}{/if}" name="middle_name" />
    		</div>
    		
    	</div>
    
    	<div class="group grid6">
            <label class="label">{$fields.nick_alias}</label>
    		<div>
    	       	<input class="text_field " type="text" maxlength="255" value="{if isset($data)}{$data.nick_alias}{/if}" name="nick_alias" />
    		</div>
    		
    	</div>
    
		{literal}
			<script>
				jQuery(function($){
					$("#mrn").mask("9999-9999");
				});
			</script>
		{/literal}  
    	<div class="group first grid6">
            <label class="label"><span class="error">*</span>{$fields.mrn}</label>
    		<div>
    	       	<input class="text_field short" type="text" maxlength="255" value="{if isset($data)}{$data.mrn}{/if}" name="mrn" id="mrn"/>
    		</div>
    		
    	</div>
    
	{literal}
		<script>
		$(function() {
			$( "#DOB" ).datepicker();
		});
		</script>
	{/literal} 
    	<div class="group grid6">
            <label class="label"><span class="error">*</span>{$fields.DOB}</label>
    		<div>
    	       	<input class="text_field datepicker short" type="text" maxlength="255" value="{if isset($data)}{$data.DOB|date_format:'m/d/Y'}{/if}" name="DOB" id="DOB"/>
    		</div>
    		
    	</div>
    
    	<div class="group first grid4">
            <label class="label">{$fields.city}</label>
    		<div>
    	       	<input class="text_field " type="text" maxlength="255" value="{if isset($data)}{$data.city}{/if}" name="city" />
    		</div>
    		
    	</div>
    
		{literal}
			<script>
				jQuery(function($){
					$("#state").mask("aa");
				});
			</script>
		{/literal}  
    	<div class="group grid4">
            <label class="label">{$fields.state}</label>
    		<div>
    	       	<input class="text_field " type="text" maxlength="255" value="{if isset($data)}{$data.state}{/if}" name="state" id="state"/>
    		</div>
    		
    	</div>
    
		{literal}
			<script>
				jQuery(function($){
					$("#zip").mask("99999");
				});
			</script>
		{/literal}  
    	<div class="group grid4">
            <label class="label">{$fields.zip}</label>
    		<div>
    	       	<input class="text_field " type="text" maxlength="255" value="{if isset($data)}{$data.zip}{/if}" name="zip" id="zip"/>
    		</div>
    		
    	</div>
    
		{literal}
			<script>
				jQuery(function($){
					$("#phone").mask("(999) 999-9999");
				});
			</script>
		{/literal}  
    	<div class="group first ">
            <label class="label">{$fields.phone}</label>
    		<div>
    	       	<input class="text_field short" type="text" maxlength="255" value="{if isset($data)}{$data.phone}{/if}" name="phone" id="phone"/>
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
