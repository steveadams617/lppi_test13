<div class="block" id="block-tables">

                <div class="secondary-navigation">
                    <ul class="wat-cf">
                        <li class="first"><a href="test/sfzips">Listing</a></li>
                        <li><a href="test/sfzips/create/">New record</a></li>
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
                    <td>{$fields.sfz_id}:</td>
                    <td>{$data.sfz_id}</td>
                </tr><tr class="{cycle values='odd,even'}">
                    <td>{$fields.sfz_zip}:</td>
                    <td>{$data.sfz_zip}</td>
                </tr><tr class="{cycle values='odd,even'}">
                    <td>{$fields.sfz_neighhoods}:</td>
                    <td>{$data.sfz_neighhoods}</td>
                </tr>
						</table>
                        <div class="actions-bar wat-cf">
                            <div class="actions">
                                <a class="button" href="test/sfzips/edit/{$id}">
                                    <img src="iscaffold/backend_skins/images/icons/application_edit.png" alt="Edit record"> Edit record
                                </a>
                            </div>
                        </div>
                    </div><!-- .inner -->
                </div><!-- .content -->
            </div><!-- .block -->
