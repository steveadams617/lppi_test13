<div class="block" id="block-tables">

                <div class="secondary-navigation">
                    <ul class="wat-cf">
                        <li class="first"><a href="main/supports">Listing</a></li>
                        <li class="{if $action_mode == 'create'}active{/if}"><a href="main/supports/create/">New record</a></li>
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

                        <form class="form" method='post' action='main/supports/{$action_mode}/{if isset($record_id)}{$record_id}{/if}' enctype="multipart/form-data">

                            

    
    	<div class="group ">
            <label class="label">{$fields.first_name}</label>
    		<div>
    	       	<input class="text_field medium" type="text" maxlength="255" value="{if isset($data)}{$data.first_name}{/if}" name="first_name" />
    		</div>
    		
    	</div>
    
    	<div class="group ">
            <label class="label">{$fields.last_name}</label>
    		<div>
    	       	<input class="text_field medium" type="text" maxlength="255" value="{if isset($data)}{$data.last_name}{/if}" name="last_name" />
    		</div>
    		
    	</div>
    
    	<div class="group ">
            <label class="label">{$fields.nick_alias}</label>
    		<div>
    	       	<input class="text_field medium" type="text" maxlength="255" value="{if isset($data)}{$data.nick_alias}{/if}" name="nick_alias" />
    		</div>
    		
    	</div>
    
    	<div class="group ">
            <label class="label"><span class="error">*</span>{$fields.relationship}</label>
    		<div>
    	       	<input class="text_field medium" type="text" maxlength="255" value="{if isset($data)}{$data.relationship}{/if}" name="relationship" />
    		</div>
    		
    	</div>
    
    	<div class="group ">
            <label class="label">{$fields.city}</label>
    		<div>
    	       	<input class="text_field short" type="text" maxlength="255" value="{if isset($data)}{$data.city}{/if}" name="city" />
    		</div>
    		
    	</div>
    
		{literal}
			<script>
				jQuery(function($){
					$("#state").mask("aa");
				});
			</script>
		{/literal}  
    	<div class="group ">
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
    	<div class="group ">
            <label class="label">{$fields.zip}</label>
    		<div>
    	       	<input class="text_field short" type="text" maxlength="255" value="{if isset($data)}{$data.zip}{/if}" name="zip" id="zip"/>
    		</div>
    		
    	</div>
    
		{literal}
			<script>
				jQuery(function($){
					$("#home_phone").mask("(999) 999-9999");
				});
			</script>
		{/literal}  
    	<div class="group ">
            <label class="label">{$fields.home_phone}</label>
    		<div>
    	       	<input class="text_field short" type="text" maxlength="255" value="{if isset($data)}{$data.home_phone}{/if}" name="home_phone" id="home_phone"/>
    		</div>
    		
    	</div>
    
		{literal}
			<script>
				jQuery(function($){
					$("#work_phone").mask("(999) 999-9999");
				});
			</script>
		{/literal}  
    	<div class="group ">
            <label class="label">{$fields.work_phone}</label>
    		<div>
    	       	<input class="text_field " type="text" maxlength="255" value="{if isset($data)}{$data.work_phone}{/if}" name="work_phone" id="work_phone"/>
    		</div>
    		
    	</div>
    
		{literal}
			<script>
				jQuery(function($){
					$("#cell_phone").mask("(999) 999-9999");
				});
			</script>
		{/literal}  
    	<div class="group ">
            <label class="label">{$fields.cell_phone}</label>
    		<div>
    	       	<input class="text_field " type="text" maxlength="255" value="{if isset($data)}{$data.cell_phone}{/if}" name="cell_phone" id="cell_phone"/>
    		</div>
    		
    	</div>
    
    	<div class="group ">
            <label class="label">{$fields.memo}</label>
    		<div>
    	       	<input class="text_field " type="text" maxlength="255" value="{if isset($data)}{$data.memo}{/if}" name="memo" />
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
