<div class="block" id="block-tables">

                <div class="secondary-navigation">
                    <ul class="wat-cf">
                        <li class="first"><a href="main/notes">Listing</a></li>
                        <li><a href="main/notes/create/">New record</a></li>
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
                    <td>{$fields.user_id}:</td>
                    <td>{$data.user_id}</td>
                </tr><tr class="{cycle values='odd,even'}">
                    <td>{$fields.body}:</td>
                    <td>{$data.body}</td>
                </tr><tr class="{cycle values='odd,even'}">
                    <td>{$fields.printed}:</td>
                    <td>{$data.printed}</td>
                </tr><tr class="{cycle values='odd,even'}">
                    <td>{$fields.include_plan}:</td>
                    <td>{$data.include_plan}</td>
                </tr><tr class="{cycle values='odd,even'}">
                    <td>{$fields.note_date}:</td>
                    <td>{$data.note_date}</td>
                </tr><tr class="{cycle values='odd,even'}">
                    <td>{$fields.note_time}:</td>
                    <td>{$data.note_time}</td>
                </tr><tr class="{cycle values='odd,even'}">
                    <td>{$fields.status_id}:</td>
                    <td>{$data.status_id}</td>
                </tr>
						</table>
                        <div class="actions-bar wat-cf">
                            <div class="actions">
                                <a class="button" href="main/notes/edit/{$id}">
                                    <img src="iscaffold/backend_skins/images/icons/application_edit.png" alt="Edit record"> Edit record
                                </a>
                            </div>
                        </div>
                    </div><!-- .inner -->
                </div><!-- .content -->
            </div><!-- .block -->
