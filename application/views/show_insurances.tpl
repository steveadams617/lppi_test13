<div class="block" id="block-tables">

                <div class="secondary-navigation">
                    <ul class="wat-cf">
                        <li class="first"><a href="Lookup/insurances">Listing</a></li>
                        <li><a href="Lookup/insurances/create/">New record</a></li>
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
                    <td>{$fields.insurance_type_id}:</td>
                    <td>{$data.insurance_type_id}</td>
                </tr><tr class="{cycle values='odd,even'}">
                    <td>{$fields.insurance}:</td>
                    <td>{$data.insurance}</td>
                </tr><tr class="{cycle values='odd,even'}">
                    <td>{$fields.face_sheet_insurance}:</td>
                    <td>{$data.face_sheet_insurance}</td>
                </tr><tr class="{cycle values='odd,even'}">
                    <td>{$fields.abbrev}:</td>
                    <td>{$data.abbrev}</td>
                </tr>
						</table>
                        <div class="actions-bar wat-cf">
                            <div class="actions">
                                <a class="button" href="Lookup/insurances/edit/{$id}">
                                    <img src="iscaffold/backend_skins/images/icons/application_edit.png" alt="Edit record"> Edit record
                                </a>
                            </div>
                        </div>
                    </div><!-- .inner -->
                </div><!-- .content -->
            </div><!-- .block -->
