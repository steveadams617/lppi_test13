<div class="block" id="block-tables">

                <div class="secondary-navigation">
                    <ul class="wat-cf">
                        <li class="first"><a href="sf_tables">Listing</a></li>
                        <li class="{if $action_mode == 'create'}active{/if}"><a href="sf_tables/create/">New record</a></li>
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

                        <form class="form" method='post' action='sf_tables/{$action_mode}/{if isset($record_id)}{$record_id}{/if}' enctype="multipart/form-data">

                            
    	<div class="group ">
            <label class="label"><span class="error">*</span>{$fields.tablename}</label>
    		<div>
    	       	<input class="text_field " type="text" maxlength="255" value="{if isset($data)}{$data.tablename}{/if}" name="tablename" />
    		</div>
    		
    	</div>
    
    	<div class="group ">
            <label class="label">{$fields.usetable}</label>
    		<div>
    	       	<input class="text_field " type="text" maxlength="255" value="{if isset($data)}{$data.usetable}{/if}" name="usetable" />
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
