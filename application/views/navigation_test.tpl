<ul id="top_menu">
			<li{if isset($table_name)}{if $table_name == 'Episodes'} class='active'{/if}{/if}><a href='test/episodes'>Episodes</a></li>
			<li{if isset($table_name)}{if $table_name == 'Organizations'} class='active'{/if}{/if}><a href='test/organizations'>Organizations</a></li>
			<li{if isset($table_name)}{if $table_name == 'Provider'} class='active'{/if}{/if}><a href='test/provider'>Provider</a></li>
			<li{if isset($table_name)}{if $table_name == 'Sfzips'} class='active'{/if}{/if}><a href='test/sfzips'>Sfzips</a></li>
			<li{if isset($table_name)}{if $table_name == 'Staff'} class='active'{/if}{/if}><a href='test/staff'>Staff</a></li>
			<li{if isset($table_name)}{if $table_name == 'Tasks'} class='active'{/if}{/if}><a href='test/tasks'>Tasks</a></li>
			<li{if isset($table_name)}{if $table_name == 'Users'} class='active'{/if}{/if}><a href='test/users'>Users</a></li>
</ul>