<div class="block" id="block-tables">

                <div class="secondary-navigation">
                    <ul class="wat-cf">
                        <li class="first"><a href="test/provider">Listing</a></li>
                        <li><a href="test/provider/create/">New record</a></li>
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
                    <td>{$fields.organization_id}:</td>
                    <td>{$data.organization_id}</td>
                </tr><tr class="{cycle values='odd,even'}">
                    <td>{$fields.provider_type_id}:</td>
                    <td>{$data.provider_type_id}</td>
                </tr><tr class="{cycle values='odd,even'}">
                    <td>{$fields.first_name}:</td>
                    <td>{$data.first_name}</td>
                </tr><tr class="{cycle values='odd,even'}">
                    <td>{$fields.last_name}:</td>
                    <td>{$data.last_name}</td>
                </tr><tr class="{cycle values='odd,even'}">
                    <td>{$fields.prof_inits}:</td>
                    <td>{$data.prof_inits}</td>
                </tr><tr class="{cycle values='odd,even'}">
                    <td>{$fields.work_direct_phone}:</td>
                    <td>{$data.work_direct_phone}</td>
                </tr><tr class="{cycle values='odd,even'}">
                    <td>{$fields.work_extension}:</td>
                    <td>{$data.work_extension}</td>
                </tr><tr class="{cycle values='odd,even'}">
                    <td>{$fields.work_fax}:</td>
                    <td>{$data.work_fax}</td>
                </tr><tr class="{cycle values='odd,even'}">
                    <td>{$fields.work_pager}:</td>
                    <td>{$data.work_pager}</td>
                </tr><tr class="{cycle values='odd,even'}">
                    <td>{$fields.work_cell}:</td>
                    <td>{$data.work_cell}</td>
                </tr><tr class="{cycle values='odd,even'}">
                    <td>{$fields.personal_cell}:</td>
                    <td>{$data.personal_cell}</td>
                </tr><tr class="{cycle values='odd,even'}">
                    <td>{$fields.email}:</td>
                    <td>{$data.email}</td>
                </tr><tr class="{cycle values='odd,even'}">
                    <td>{$fields.contact_preferences}:</td>
                    <td>{$data.contact_preferences}</td>
                </tr>
						</table>
                        <div class="actions-bar wat-cf">
                            <div class="actions">
                                <a class="button" href="test/provider/edit/{$id}">
                                    <img src="iscaffold/backend_skins/images/icons/application_edit.png" alt="Edit record"> Edit record
                                </a>
                            </div>
                        </div>
                    </div><!-- .inner -->
                </div><!-- .content -->
            </div><!-- .block -->
