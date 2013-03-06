<div class="block" id="block-tables">

                <div class="secondary-navigation">
                    <ul class="wat-cf">
                        <li class="first"><a href="test/provider">Listing</a></li>
                        <li class="{if $action_mode == 'create'}active{/if}"><a href="test/provider/create/">New record</a></li>
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

                        <form class="form" method='post' action='test/provider/{$action_mode}/{if isset($record_id)}{$record_id}{/if}' enctype="multipart/form-data">

                            
		{literal}
			<script>
					$(function() {
						$( "#organization_id_auto" ).autocomplete({
							source: function(req, add){
								$.ajax({
									url: '{/literal}{$config.base_url}{literal}test/organizations/auto_organization',
									dataType: 'json',
									type: 'POST',
									data: req,
									success: function(data){
										if(data.response =='true'){
										   add(data.message);
										}
									}
								});
							},
							minLength: 2,
							
							select: function( event, ui ) {
								 myvalue = ui.item ?
									ui.item.id :
									0 ;
								$( "#organization_id" ).val(myvalue);
							}
						});	
					});
			</script>
		{/literal}

    	<div class="group ">
            <label class="label">{$fields.organization_id}</label>
    		<div>
    	       	<input class="text_field " type="text" maxlength="255" value="{if isset($data)}{$data.organization_id_auto}{/if}" name="organization_id_auto" id="organization_id_auto"/>
				<input type="hidden" value="{if isset($data)}{$data.organization_id}{/if}" name="organization_id" id="organization_id" />
			</div>
    		
    	</div>
    
    	<div class="group ">
            <label class="label">{$fields.provider_type_id}</label>
    		<div>
    	       	<input class="text_field " type="text" maxlength="255" value="{if isset($data)}{$data.provider_type_id}{/if}" name="provider_type_id" />
    		</div>
    		
    	</div>
    
    	<div class="group ">
            <label class="label">{$fields.first_name}</label>
    		<div>
    	       	<input class="text_field " type="text" maxlength="255" value="{if isset($data)}{$data.first_name}{/if}" name="first_name" />
    		</div>
    		
    	</div>
    
    	<div class="group ">
            <label class="label">{$fields.last_name}</label>
    		<div>
    	       	<input class="text_field " type="text" maxlength="255" value="{if isset($data)}{$data.last_name}{/if}" name="last_name" />
    		</div>
    		
    	</div>
    
    	<div class="group ">
            <label class="label">{$fields.prof_inits}</label>
    		<div>
    	       	<input class="text_field " type="text" maxlength="255" value="{if isset($data)}{$data.prof_inits}{/if}" name="prof_inits" />
    		</div>
    		
    	</div>
    
    	<div class="group ">
            <label class="label">{$fields.work_direct_phone}</label>
    		<div>
    	       	<input class="text_field " type="text" maxlength="255" value="{if isset($data)}{$data.work_direct_phone}{/if}" name="work_direct_phone" />
    		</div>
    		
    	</div>
    
    	<div class="group ">
            <label class="label">{$fields.work_extension}</label>
    		<div>
    	       	<input class="text_field " type="text" maxlength="255" value="{if isset($data)}{$data.work_extension}{/if}" name="work_extension" />
    		</div>
    		
    	</div>
    
    	<div class="group ">
            <label class="label">{$fields.work_fax}</label>
    		<div>
    	       	<input class="text_field " type="text" maxlength="255" value="{if isset($data)}{$data.work_fax}{/if}" name="work_fax" />
    		</div>
    		
    	</div>
    
    	<div class="group ">
            <label class="label">{$fields.work_pager}</label>
    		<div>
    	       	<input class="text_field " type="text" maxlength="255" value="{if isset($data)}{$data.work_pager}{/if}" name="work_pager" />
    		</div>
    		
    	</div>
    
    	<div class="group ">
            <label class="label">{$fields.work_cell}</label>
    		<div>
    	       	<input class="text_field " type="text" maxlength="255" value="{if isset($data)}{$data.work_cell}{/if}" name="work_cell" />
    		</div>
    		
    	</div>
    
    	<div class="group ">
            <label class="label">{$fields.personal_cell}</label>
    		<div>
    	       	<input class="text_field " type="text" maxlength="255" value="{if isset($data)}{$data.personal_cell}{/if}" name="personal_cell" />
    		</div>
    		
    	</div>
    
    	<div class="group ">
            <label class="label">{$fields.email}</label>
    		<div>
    	       	<input class="text_field " type="text" maxlength="255" value="{if isset($data)}{$data.email}{/if}" name="email" />
    		</div>
    		
    	</div>
    
    	<div class="group ">
            <label class="label">{$fields.contact_preferences}</label>
    		<div>
    	       	<input class="text_field " type="text" maxlength="255" value="{if isset($data)}{$data.contact_preferences}{/if}" name="contact_preferences" />
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
