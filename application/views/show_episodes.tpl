<div class="block" id="block-tables">

                <div class="secondary-navigation">
                    <ul class="wat-cf">
                        <li class="first"><a href="test/episodes">Listing</a></li>
                        <li><a href="test/episodes/create/">New record</a></li>
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
                    <td>{$fields.patient_id}:</td>
                    <td>{$data.patient_id}</td>
                </tr><tr class="{cycle values='odd,even'}">
                    <td>{$fields.team_id}:</td>
                    <td>{$data.team_id}</td>
                </tr><tr class="{cycle values='odd,even'}">
                    <td>{$fields.oneliner}:</td>
                    <td>{$data.oneliner}</td>
                </tr><tr class="{cycle values='odd,even'}">
                    <td>{$fields.start_date}:</td>
                    <td>{$data.start_date}</td>
                </tr><tr class="{cycle values='odd,even'}">
                    <td>{$fields.end_date}:</td>
                    <td>{$data.end_date}</td>
                </tr><tr class="{cycle values='odd,even'}">
                    <td>{$fields.historyphysical}:</td>
                    <td>{$data.historyphysical}</td>
                </tr>
						</table>
                        <div class="actions-bar wat-cf">
                            <div class="actions">
                                <a class="button" href="test/episodes/edit/{$id}">
                                    <img src="iscaffold/backend_skins/images/icons/application_edit.png" alt="Edit record"> Edit record
                                </a>
                            </div>
                        </div>
                    </div><!-- .inner -->
                </div><!-- .content -->
            </div><!-- .block -->
