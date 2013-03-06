<div class="block" id="block-tables">

                <div class="secondary-navigation">
                    <ul class="wat-cf">
                        <li class="first"><a href="test/tasks">Listing</a></li>
                        <li class="{if $action_mode == 'create'}active{/if}"><a href="test/tasks/create/">New record</a></li>
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

                        <form class="form" method='post' action='test/tasks/{$action_mode}/{if isset($record_id)}{$record_id}{/if}' enctype="multipart/form-data">

                            
    	<div class="group ">
            <label class="label"><span class="error">*</span>{$fields.episode_id}</label>
    		<div>
    	       	<input class="text_field " type="text" maxlength="255" value="{if isset($data)}{$data.episode_id}{/if}" name="episode_id" />
    		</div>
    		
    	</div>
    
    	<div class="group ">
            <label class="label"><span class="error">*</span>{$fields.task}</label>
    		<div>
    	       	<input class="text_field " type="text" maxlength="255" value="{if isset($data)}{$data.task}{/if}" name="task" />
    		</div>
    		
    	</div>
    
    	<div class="group ">
            <label class="label"><span class="error">*</span>{$fields.create_timestamp}</label>
    		<div>
    	       	<input class="text_field " type="text" maxlength="255" value="{if isset($data)}{$data.create_timestamp}{/if}" name="create_timestamp" />
    		</div>
    		
    	</div>
    
    	<div class="group ">
            <label class="label">{$fields.complete_timestamp}</label>
    		<div>
    	       	<input class="text_field " type="text" maxlength="255" value="{if isset($data)}{$data.complete_timestamp}{/if}" name="complete_timestamp" />
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
