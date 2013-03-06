<div class="block" id="block-tables">

                <div class="secondary-navigation">
                    <ul class="wat-cf">
                        <li class="first"><a href="misc/episode_provider">Listing</a></li>
                        <li class="{if $action_mode == 'create'}active{/if}"><a href="misc/episode_provider/create/">New record</a></li>
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

                        <form class="form" method='post' action='misc/episode_provider/{$action_mode}/{if isset($record_id)}{$record_id}{/if}' enctype="multipart/form-data">

                            
		{literal}
			<script>
					$(function() {
						$( "#provider_id_auto" ).autocomplete({
							source: function(req, add){
								$.ajax({
									url: '{/literal}{$config.base_url}{literal}test/provider/auto_first_name',
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
								$( "#provider_id" ).val(myvalue);
							}
						});	
					});
			</script>
		{/literal}

    	<div class="group ">
            <label class="label"><span class="error">*</span>{$fields.provider_id}</label>
    		<div>
    	       	<input class="text_field " type="text" maxlength="255" value="{if isset($data)}{$data.provider_id_auto}{/if}" name="provider_id_auto" id="provider_id_auto"/>
				<input type="hidden" value="{if isset($data)}{$data.provider_id}{/if}" name="provider_id" id="provider_id" />
			</div>
    		
    	</div>
    

    
    	<div class="group ">
            <label class="label">{$fields.release_signed_date}</label>
    		<div>
    	       	<input class="text_field " type="text" maxlength="255" value="{if isset($data)}{$data.release_signed_date}{/if}" name="release_signed_date" />
    		</div>
    		
    	</div>
    
    	<div class="group ">
            <label class="label">{$fields.next_appt_date}</label>
    		<div>
    	       	<input class="text_field " type="text" maxlength="255" value="{if isset($data)}{$data.next_appt_date}{/if}" name="next_appt_date" />
    		</div>
    		
    	</div>
    
    	<div class="group ">
            <label class="label">{$fields.next_appt_time}</label>
    		<div>
    	       	<input class="text_field " type="text" maxlength="255" value="{if isset($data)}{$data.next_appt_time}{/if}" name="next_appt_time" />
    		</div>
    		
    	</div>
    
    	<div class="group ">
            <label class="label">{$fields.last_collateral}</label>
    		<div>
    	       	<input class="text_field " type="text" maxlength="255" value="{if isset($data)}{$data.last_collateral}{/if}" name="last_collateral" />
    		</div>
    		
    	</div>
    
    	<div class="group ">
            <label class="label">{$fields.total_collateral}</label>
    		<div>
    	       	<input class="text_field " type="text" maxlength="255" value="{if isset($data)}{$data.total_collateral}{/if}" name="total_collateral" />
    		</div>
    		
    	</div>
    
    	<div class="group ">
            <label class="label">{$fields.dc_instructs_sent}</label>
    		<div>
    	       	<input class="text_field " type="text" maxlength="255" value="{if isset($data)}{$data.dc_instructs_sent}{/if}" name="dc_instructs_sent" />
    		</div>
    		
    	</div>
    
    	<div class="group ">
            <label class="label">{$fields.dc_summary_sent}</label>
    		<div>
    	       	<input class="text_field " type="text" maxlength="255" value="{if isset($data)}{$data.dc_summary_sent}{/if}" name="dc_summary_sent" />
    		</div>
    		
    	</div>
    
    	<div class="group ">
            <label class="label">{$fields.notify_at_dc}</label>
    		<div>
    	       	<input class="text_field " type="text" maxlength="255" value="{if isset($data)}{$data.notify_at_dc}{/if}" name="notify_at_dc" />
    		</div>
    		
    	</div>
    
    	<div class="group ">
            <label class="label">{$fields.dc_summary_requested}</label>
    		<div>
    	       	<input class="text_field " type="text" maxlength="255" value="{if isset($data)}{$data.dc_summary_requested}{/if}" name="dc_summary_requested" />
    		</div>
    		
    	</div>
    
    	<div class="group ">
            <label class="label">{$fields.scheduled_mtg_frequency}</label>
    		<div>
    	       	<input class="text_field " type="text" maxlength="255" value="{if isset($data)}{$data.scheduled_mtg_frequency}{/if}" name="scheduled_mtg_frequency" />
    		</div>
    		
    	</div>
    
    	<div class="group ">
            <label class="label">{$fields.actual_contact_frequency}</label>
    		<div>
    	       	<input class="text_field " type="text" maxlength="255" value="{if isset($data)}{$data.actual_contact_frequency}{/if}" name="actual_contact_frequency" />
    		</div>
    		
    	</div>
    
    	<div class="group ">
            <label class="label">{$fields.last_patient_contact_date}</label>
    		<div>
    	       	<input class="text_field " type="text" maxlength="255" value="{if isset($data)}{$data.last_patient_contact_date}{/if}" name="last_patient_contact_date" />
    		</div>
    		
    	</div>
    
    	<div class="group ">
            <label class="label">{$fields.provider_relationship_memo}</label>
    		<div>
    	       	<input class="text_field " type="text" maxlength="255" value="{if isset($data)}{$data.provider_relationship_memo}{/if}" name="provider_relationship_memo" />
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
