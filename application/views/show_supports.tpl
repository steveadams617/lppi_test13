<div class="block" id="block-tables">

                <div class="secondary-navigation">
                    <ul class="wat-cf">
                        <li class="first"><a href="main/supports">Listing</a></li>
                        <li><a href="main/supports/create/">New record</a></li>
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
                    <td>{$fields.first_name}:</td>
                    <td>{$data.first_name}</td>
                </tr><tr class="{cycle values='odd,even'}">
                    <td>{$fields.last_name}:</td>
                    <td>{$data.last_name}</td>
                </tr><tr class="{cycle values='odd,even'}">
                    <td>{$fields.nick_alias}:</td>
                    <td>{$data.nick_alias}</td>
                </tr><tr class="{cycle values='odd,even'}">
                    <td>{$fields.relationship}:</td>
                    <td>{$data.relationship}</td>
                </tr><tr class="{cycle values='odd,even'}">
                    <td>{$fields.city}:</td>
                    <td>{$data.city}</td>
                </tr><tr class="{cycle values='odd,even'}">
                    <td>{$fields.state}:</td>
                    <td>{$data.state}</td>
                </tr><tr class="{cycle values='odd,even'}">
                    <td>{$fields.zip}:</td>
                    <td>{$data.zip}</td>
                </tr><tr class="{cycle values='odd,even'}">
                    <td>{$fields.home_phone}:</td>
                    <td>{$data.home_phone}</td>
                </tr><tr class="{cycle values='odd,even'}">
                    <td>{$fields.work_phone}:</td>
                    <td>{$data.work_phone}</td>
                </tr><tr class="{cycle values='odd,even'}">
                    <td>{$fields.cell_phone}:</td>
                    <td>{$data.cell_phone}</td>
                </tr><tr class="{cycle values='odd,even'}">
                    <td>{$fields.memo}:</td>
                    <td>{$data.memo}</td>
                </tr>
						</table>
                        <div class="actions-bar wat-cf">
                            <div class="actions">
                                <a class="button" href="main/supports/edit/{$id}">
                                    <img src="iscaffold/backend_skins/images/icons/application_edit.png" alt="Edit record"> Edit record
                                </a>
                            </div>
                        </div>
                    </div><!-- .inner -->
                </div><!-- .content -->
            </div><!-- .block -->
