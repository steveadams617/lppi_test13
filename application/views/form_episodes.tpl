<div class="block" id="block-tables">

                <div class="secondary-navigation">
                    <ul class="wat-cf">
                        <li class="first"><a href="test/episodes">Listing</a></li>
                        <li class="{if $action_mode == 'create'}active{/if}"><a href="test/episodes/create/">New record</a></li>
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

                        <form class="form" method='post' action='test/episodes/{$action_mode}/{if isset($record_id)}{$record_id}{/if}' enctype="multipart/form-data">

                            

    
    	<div class="group ">
            <label class="label"><span class="error">*</span>{$fields.team_id}</label>
    		<select class="field select addr" name="team_id" >
                <option value="0"></option>
                {foreach $related_teams as $rel}
                    <option value="{$rel.teams_id}"{if isset($data)}{if $data.team_id == $rel.teams_id} selected="selected"{/if}{/if}>{$rel.teams_name}</option>
                {/foreach}
        	</select>
    		
        </div>
    
    	<div class="group ">
            <label class="label">{$fields.oneliner}</label>
    		<div>
        		<textarea rows="3" cols="60" class="expand text_area" name="oneliner">{if isset($data)}{$data.oneliner}{/if}</textarea>
    		</div>
    		
    	</div>
    
	{literal}
		<script>
		$(function() {
			$( "#start_date" ).datepicker();
		});
		</script>
	{/literal} 
    	<div class="group first grid6">
            <label class="label"><span class="error">*</span>{$fields.start_date}</label>
    		<div>
    	       	<input class="text_field datepicker short" type="text" maxlength="255" value="{if isset($data)}{$data.start_date|date_format:'m/d/Y'}{/if}" name="start_date" id="start_date"/>
    		</div>
    		
    	</div>
    
	{literal}
		<script>
		$(function() {
			$( "#end_date" ).datepicker();
		});
		</script>
	{/literal} 
    	<div class="group grid6">
            <label class="label">{$fields.end_date}</label>
    		<div>
    	       	<input class="text_field datepicker short" type="text" maxlength="255" value="{if isset($data)}{$data.end_date|date_format:'m/d/Y'}{/if}" name="end_date" id="end_date"/>
    		</div>
    		
    	</div>
    
    	<div class="group first ">
            <label class="label">{$fields.historyphysical}</label>
    		<div>
        		<textarea rows="10" cols="50" class="text_area" name="historyphysical">{if isset($data)}{$data.historyphysical}{/if}</textarea>
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
