<div class="block" id="block-tables">

                <div class="secondary-navigation">
                    <ul class="wat-cf">
                        <li class="first"><a href="main/dcs">Listing</a></li>
                        <li class="{if $action_mode == 'create'}active{/if}"><a href="main/dcs/create/">New record</a></li>
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

                        <form class="form" method='post' action='main/dcs/{$action_mode}/{if isset($record_id)}{$record_id}{/if}' enctype="multipart/form-data">

                            

    
    	<div class="group ">
            <label class="label">{$fields.plan}</label>
    		<div>
        		<textarea rows="3" cols="60" class="expand text_area" name="plan">{if isset($data)}{$data.plan}{/if}</textarea>
    		</div>
    		
    	</div>
    
	{literal}
		<script>
		$(function() {
			$( "#transport_arranged_date" ).datepicker();
		});
		</script>
	{/literal} 
    	<div class="group ">
            <label class="label">{$fields.transport_arranged_date}</label>
    		<div>
    	       	<input class="text_field datepicker short" type="text" maxlength="255" value="{if isset($data)}{$data.transport_arranged_date|date_format:'m/d/Y'}{/if}" name="transport_arranged_date" id="transport_arranged_date"/>
    		</div>
    		
    	</div>
    
    	<div class="group ">
            <label class="label">{$fields.transport_details}</label>
    		<div>
        		<textarea rows="3" cols="60" class="expand text_area" name="transport_details">{if isset($data)}{$data.transport_details}{/if}</textarea>
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
