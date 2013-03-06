<div class="block" id="block-tables">

                <div class="secondary-navigation">
                    <ul class="wat-cf">
                        <li class="first"><a href="main/notes">Listing</a></li>
                        <li class="{if $action_mode == 'create'}active{/if}"><a href="main/notes/create/">New record</a></li>
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

                        <form class="form" method='post' action='main/notes/{$action_mode}/{if isset($record_id)}{$record_id}{/if}' enctype="multipart/form-data">

                            

    

    
    	<div class="group first ">
            <label class="label"><span class="error">*</span>{$fields.body}</label>
    		<div>
        		<textarea rows="3" cols="60" class="expand text_area" name="body">{if isset($data)}{$data.body}{/if}</textarea>
    		</div>
    		
    	</div>
    
    	<div class="group first ">
            <label class="label">{$fields.printed}</label>
            <input class="field checkbox" type="checkbox" value="1" name="printed"{if isset($data)}{if $data.printed == 1} checked="checked"{/if}{/if} />

    		
    	</div>
    
    	<div class="group ">
            <label class="label">{$fields.include_plan}</label>
            <input class="field checkbox" type="checkbox" value="1" name="include_plan"{if isset($data)}{if $data.include_plan == 1} checked="checked"{/if}{/if} />

    		
    	</div>
    
	{literal}
		<script>
		$(function() {
			$( "#note_date" ).datepicker();
		});
		</script>
	{/literal} 
    	<div class="group first ">
            <label class="label"><span class="error">*</span>{$fields.note_date}</label>
    		<div>
    	       	<input class="text_field datepicker short" type="text" maxlength="255" value="{if isset($data)}{$data.note_date|date_format:'m/d/Y'}{/if}" name="note_date" id="note_date"/>
    		</div>
    		
    	</div>
    
		{literal}
			<script>
				jQuery(function($){
					$("#note_time").mask("99:99:99");
				});
			</script>
		{/literal}  
    	<div class="group ">
            <label class="label"><span class="error">*</span>{$fields.note_time}</label>
    		<div>
    	       	<input class="text_field " type="text" maxlength="255" value="{if isset($data)}{$data.note_time}{/if}" name="note_time" id="note_time"/>
    		</div>
    		
    	</div>
    
    	<div class="group ">
            <label class="label"><span class="error">*</span>{$fields.status_id}</label>
    		<div>
    	       	<input class="text_field " type="text" maxlength="255" value="{if isset($data)}{$data.status_id}{/if}" name="status_id" />
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
