<div class="block" id="block-tables">

                <div class="secondary-navigation">
                    <ul class="wat-cf">
                        <li class="first"><a href="test/organizations">Listing</a></li>
                        <li><a href="test/organizations/create/">New record</a></li>
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
                    <td>{$fields.organization}:</td>
                    <td>{$data.organization}</td>
                </tr><tr class="{cycle values='odd,even'}">
                    <td>{$fields.address1}:</td>
                    <td>{$data.address1}</td>
                </tr><tr class="{cycle values='odd,even'}">
                    <td>{$fields.address2}:</td>
                    <td>{$data.address2}</td>
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
                    <td>{$fields.main_phone}:</td>
                    <td>{$data.main_phone}</td>
                </tr>
						</table>
                        <div class="actions-bar wat-cf">
                            <div class="actions">
                                <a class="button" href="test/organizations/edit/{$id}">
                                    <img src="iscaffold/backend_skins/images/icons/application_edit.png" alt="Edit record"> Edit record
                                </a>
                            </div>
                        </div>
                    </div><!-- .inner -->
                </div><!-- .content -->
            </div><!-- .block -->
