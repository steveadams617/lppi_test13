<form class="form" method='post' action='{$partial_path}/index{$uri_segments}' enctype="multipart/form-data">

		
		<div class="group grid8 first">
            <label class="label"><span class="error">*</span>Search for {$fields.search_field}</label>
    		<div>
    	       	<input class="text_field medium" type="text" maxlength="255" value="{if isset($segments.search_text)}{$segments.search_text}{/if}" name="search_text" />
    	       	<input type='hidden' value='{if isset($sort_by)}{$sort_by}{/if}' name='sort_by' />
    	       	<input type='hidden' value='{if isset($sort_order)}{$sort_order}{/if}' name='sort_order' />
    		</div>
    		
    	</div>
    
		
		<div class="group navform wat-cf grid3">
				<label class="label">&nbsp;</label>
				<button class="button" type="submit" value="search" name="submit">
					<img src="iscaffold/backend_skins/images/icons/tick.png" alt="Search"> Search
				</button>
		
		</div>
		
		<div class="group navform wat-cf">
				<label class="label">&nbsp;</label>
				<button class="button" type="submit" value="clear" name="submit">
					<img src="iscaffold/backend_skins/images/icons/cross.png" alt="Clear"> Clear
				</button>
		
		</div>
		
		<div class="group first">
		</div>
		
		
</form>