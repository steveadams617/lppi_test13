<div class="block" id="block-tables">

                <div class="secondary-navigation">
                    <ul class="wat-cf">
                        <li class="first"><a href="test/organizations">Listing</a></li>
                        <li class="{if $action_mode == 'create'}active{/if}"><a href="test/organizations/create/">New record</a></li>
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

                        <form class="form" method='post' action='test/organizations/{$action_mode}/{if isset($record_id)}{$record_id}{/if}' enctype="multipart/form-data">

                            
    	<div class="group ">
            <label class="label"><span class="error">*</span>{$fields.organization}</label>
    		<div>
    	       	<input class="text_field " type="text" maxlength="255" value="{if isset($data)}{$data.organization}{/if}" name="organization" />
    		</div>
    		
    	</div>
    
    	<div class="group ">
            <label class="label">{$fields.address1}</label>
    		<div>
    	       	<input class="text_field " type="text" maxlength="255" value="{if isset($data)}{$data.address1}{/if}" name="address1" />
    		</div>
    		
    	</div>
    
    	<div class="group ">
            <label class="label">{$fields.address2}</label>
    		<div>
    	       	<input class="text_field " type="text" maxlength="255" value="{if isset($data)}{$data.address2}{/if}" name="address2" />
    		</div>
    		
    	</div>
    
    	<div class="group ">
            <label class="label">{$fields.city}</label>
    		<div>
    	       	<input class="text_field " type="text" maxlength="255" value="{if isset($data)}{$data.city}{/if}" name="city" />
    		</div>
    		
    	</div>
    
    	<div class="group ">
            <label class="label">{$fields.state}</label>
    		<div>
    	       	<input class="text_field " type="text" maxlength="255" value="{if isset($data)}{$data.state}{/if}" name="state" />
    		</div>
    		
    	</div>
    
    	<div class="group ">
            <label class="label">{$fields.zip}</label>
    		<div>
    	       	<input class="text_field " type="text" maxlength="255" value="{if isset($data)}{$data.zip}{/if}" name="zip" />
    		</div>
    		
    	</div>
    
    	<div class="group ">
            <label class="label">{$fields.main_phone}</label>
    		<div>
    	       	<input class="text_field " type="text" maxlength="255" value="{if isset($data)}{$data.main_phone}{/if}" name="main_phone" />
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
