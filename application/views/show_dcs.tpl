<div class="block" id="block-tables">

                <div class="secondary-navigation">
                    <ul class="wat-cf">
                        <li class="first"><a href="main/dcs">Listing</a></li>
                        <li><a href="main/dcs/create/">New record</a></li>
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
                    <td>{$fields.plan}:</td>
                    <td>{$data.plan}</td>
                </tr><tr class="{cycle values='odd,even'}">
                    <td>{$fields.transport_arranged_date}:</td>
                    <td>{$data.transport_arranged_date}</td>
                </tr><tr class="{cycle values='odd,even'}">
                    <td>{$fields.transport_details}:</td>
                    <td>{$data.transport_details}</td>
                </tr>
						</table>
                        <div class="actions-bar wat-cf">
                            <div class="actions">
                                <a class="button" href="main/dcs/edit/{$id}">
                                    <img src="iscaffold/backend_skins/images/icons/application_edit.png" alt="Edit record"> Edit record
                                </a>
                            </div>
                        </div>
                    </div><!-- .inner -->
                </div><!-- .content -->
            </div><!-- .block -->
