<div class="block" id="block-tables">

                <div class="secondary-navigation">
                    <ul class="wat-cf">
                        <li class="first"><a href="test/tasks">Listing</a></li>
                        <li><a href="test/tasks/create/">New record</a></li>
                    </ul>
                </div>

                <div class="content">
                    <div class="inner">
						<h3>Details of {$table_name}, record #{$id}</h3>

						<table class="table" width="50%">
                        	<thead>
                                <th width="20%">Field</th>
                                <th>Value</th>
                        	</thead>
						    <tr class="{cycle values='odd,even'}">
                    <td>{$fields.id}:</td>
                    <td>{$data.id}</td>
                </tr><tr class="{cycle values='odd,even'}">
                    <td>{$fields.episode_id}:</td>
                    <td>{$data.episode_id}</td>
                </tr><tr class="{cycle values='odd,even'}">
                    <td>{$fields.task}:</td>
                    <td>{$data.task}</td>
                </tr><tr class="{cycle values='odd,even'}">
                    <td>{$fields.create_timestamp}:</td>
                    <td>{$data.create_timestamp}</td>
                </tr><tr class="{cycle values='odd,even'}">
                    <td>{$fields.complete_timestamp}:</td>
                    <td>{$data.complete_timestamp}</td>
                </tr>
						</table>
                        <div class="actions-bar wat-cf">
                            <div class="actions">
                                <a class="button" href="test/tasks/edit/{$id}">
                                    <img src="iscaffold/backend_skins/images/icons/application_edit.png" alt="Edit record"> Edit record
                                </a>
                            </div>
                        </div>
                    </div><!-- .inner -->
                </div><!-- .content -->
            </div><!-- .block -->
