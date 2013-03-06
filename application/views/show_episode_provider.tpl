<div class="block" id="block-tables">

                <div class="secondary-navigation">
                    <ul class="wat-cf">
                        <li class="first"><a href="misc/episode_provider">Listing</a></li>
                        <li><a href="misc/episode_provider/create/">New record</a></li>
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
                    <td>{$fields.provider_id}:</td>
                    <td>{$data.provider_id}</td>
                </tr><tr class="{cycle values='odd,even'}">
                    <td>{$fields.episode_id}:</td>
                    <td>{$data.episode_id}</td>
                </tr><tr class="{cycle values='odd,even'}">
                    <td>{$fields.release_signed_date}:</td>
                    <td>{$data.release_signed_date}</td>
                </tr><tr class="{cycle values='odd,even'}">
                    <td>{$fields.next_appt_date}:</td>
                    <td>{$data.next_appt_date}</td>
                </tr><tr class="{cycle values='odd,even'}">
                    <td>{$fields.next_appt_time}:</td>
                    <td>{$data.next_appt_time}</td>
                </tr><tr class="{cycle values='odd,even'}">
                    <td>{$fields.last_collateral}:</td>
                    <td>{$data.last_collateral}</td>
                </tr><tr class="{cycle values='odd,even'}">
                    <td>{$fields.total_collateral}:</td>
                    <td>{$data.total_collateral}</td>
                </tr><tr class="{cycle values='odd,even'}">
                    <td>{$fields.dc_instructs_sent}:</td>
                    <td>{$data.dc_instructs_sent}</td>
                </tr><tr class="{cycle values='odd,even'}">
                    <td>{$fields.dc_summary_sent}:</td>
                    <td>{$data.dc_summary_sent}</td>
                </tr><tr class="{cycle values='odd,even'}">
                    <td>{$fields.notify_at_dc}:</td>
                    <td>{$data.notify_at_dc}</td>
                </tr><tr class="{cycle values='odd,even'}">
                    <td>{$fields.dc_summary_requested}:</td>
                    <td>{$data.dc_summary_requested}</td>
                </tr><tr class="{cycle values='odd,even'}">
                    <td>{$fields.scheduled_mtg_frequency}:</td>
                    <td>{$data.scheduled_mtg_frequency}</td>
                </tr><tr class="{cycle values='odd,even'}">
                    <td>{$fields.actual_contact_frequency}:</td>
                    <td>{$data.actual_contact_frequency}</td>
                </tr><tr class="{cycle values='odd,even'}">
                    <td>{$fields.last_patient_contact_date}:</td>
                    <td>{$data.last_patient_contact_date}</td>
                </tr><tr class="{cycle values='odd,even'}">
                    <td>{$fields.provider_relationship_memo}:</td>
                    <td>{$data.provider_relationship_memo}</td>
                </tr>
						</table>
                        <div class="actions-bar wat-cf">
                            <div class="actions">
                                <a class="button" href="misc/episode_provider/edit/{$id}">
                                    <img src="iscaffold/backend_skins/images/icons/application_edit.png" alt="Edit record"> Edit record
                                </a>
                            </div>
                        </div>
                    </div><!-- .inner -->
                </div><!-- .content -->
            </div><!-- .block -->
