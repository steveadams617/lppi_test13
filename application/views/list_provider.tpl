Steve Wilson
<div class="block" id="block-tables">

                <div class="secondary-navigation">
                    <ul class="wat-cf">
                        <li class="first active"><a href="test/provider">Listing</a></li>
                        <li><a href="test/provider/create/">New record</a></li>
                    </ul>
                </div>

                <div class="content">
                    <div class="inner">
                        <h3>{if ($controlling_filter_text)}{$controlling_filter_text}: {/if} {$table_name}</h3>
                        {if !empty( $data )}
                        	
                            <table class="table">
                            	<thead>
                                    
                                    			<th {if ($segments.sort_by=='id')}class='sort_{$segments.sort_order}'{/if}><a href='test/provider/index/sort_by/id/sort_order/{if ($segments.sort_by=='id' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.id}</a></th>
			<th {if ($segments.sort_by=='organization_id')}class='sort_{$segments.sort_order}'{/if}><a href='test/provider/index/sort_by/organization_id/sort_order/{if ($segments.sort_by=='organization_id' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.organization_id}</a></th>
			<th {if ($segments.sort_by=='provider_type_id')}class='sort_{$segments.sort_order}'{/if}><a href='test/provider/index/sort_by/provider_type_id/sort_order/{if ($segments.sort_by=='provider_type_id' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.provider_type_id}</a></th>
			<th {if ($segments.sort_by=='first_name')}class='sort_{$segments.sort_order}'{/if}><a href='test/provider/index/sort_by/first_name/sort_order/{if ($segments.sort_by=='first_name' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.first_name}</a></th>
			<th {if ($segments.sort_by=='last_name')}class='sort_{$segments.sort_order}'{/if}><a href='test/provider/index/sort_by/last_name/sort_order/{if ($segments.sort_by=='last_name' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.last_name}</a></th>
			<th {if ($segments.sort_by=='prof_inits')}class='sort_{$segments.sort_order}'{/if}><a href='test/provider/index/sort_by/prof_inits/sort_order/{if ($segments.sort_by=='prof_inits' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.prof_inits}</a></th>
			<th {if ($segments.sort_by=='work_direct_phone')}class='sort_{$segments.sort_order}'{/if}><a href='test/provider/index/sort_by/work_direct_phone/sort_order/{if ($segments.sort_by=='work_direct_phone' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.work_direct_phone}</a></th>
			<th {if ($segments.sort_by=='work_extension')}class='sort_{$segments.sort_order}'{/if}><a href='test/provider/index/sort_by/work_extension/sort_order/{if ($segments.sort_by=='work_extension' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.work_extension}</a></th>
			<th {if ($segments.sort_by=='work_fax')}class='sort_{$segments.sort_order}'{/if}><a href='test/provider/index/sort_by/work_fax/sort_order/{if ($segments.sort_by=='work_fax' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.work_fax}</a></th>
			<th {if ($segments.sort_by=='work_pager')}class='sort_{$segments.sort_order}'{/if}><a href='test/provider/index/sort_by/work_pager/sort_order/{if ($segments.sort_by=='work_pager' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.work_pager}</a></th>
			<th {if ($segments.sort_by=='work_cell')}class='sort_{$segments.sort_order}'{/if}><a href='test/provider/index/sort_by/work_cell/sort_order/{if ($segments.sort_by=='work_cell' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.work_cell}</a></th>
			<th {if ($segments.sort_by=='personal_cell')}class='sort_{$segments.sort_order}'{/if}><a href='test/provider/index/sort_by/personal_cell/sort_order/{if ($segments.sort_by=='personal_cell' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.personal_cell}</a></th>
			<th {if ($segments.sort_by=='email')}class='sort_{$segments.sort_order}'{/if}><a href='test/provider/index/sort_by/email/sort_order/{if ($segments.sort_by=='email' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.email}</a></th>
			<th {if ($segments.sort_by=='contact_preferences')}class='sort_{$segments.sort_order}'{/if}><a href='test/provider/index/sort_by/contact_preferences/sort_order/{if ($segments.sort_by=='contact_preferences' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.contact_preferences}</a></th>

                                    <th width="80">Actions</th>
                            	</thead>
                            	<tbody>
                                	{foreach $data as $row}
                                        <tr class="{cycle values='odd,even'}">
                                            
                                            				<td>{$row.id}</td>
				<td>{$row.organization_id}</td>
				<td>{$row.provider_type_id}</td>
				<td>{$row.first_name}</td>
				<td>{$row.last_name}</td>
				<td>{$row.prof_inits}</td>
				<td>{$row.work_direct_phone}</td>
				<td>{$row.work_extension}</td>
				<td>{$row.work_fax}</td>
				<td>{$row.work_pager}</td>
				<td>{$row.work_cell}</td>
				<td>{$row.personal_cell}</td>
				<td>{$row.email}</td>
				<td>{$row.contact_preferences}</td>

                                            <td width="80">
                                                <a href="test/provider/show/{$row.id}"><img src="iscaffold/images/view.png" alt="Show record" /></a>
                                                <a href="test/provider/edit/{$row.id}"><img src="iscaffold/images/edit.png" alt="Edit record" /></a>
                                                <a href="javascript:chk('test/provider/delete/{$row.id}')"><img src="iscaffold/images/delete.png" alt="Delete record" /></a>
                                            </td>
                            		    </tr>
                                	{/foreach}
                            	</tbody>
                            </table>
                            <div class="actions-bar wat-cf">
								
                                <div class="pagination">
                                    {$pager}
                                </div>
                            </div>
                        	
                        {else}
                            No records found.
                        {/if}

                    </div><!-- .inner -->
                </div><!-- .content -->
            </div><!-- .block -->
			
			<script type="text/javascript" language="JavaScript">
               document.forms[0].elements[0].focus();
			</script>
