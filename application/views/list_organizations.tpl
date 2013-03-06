Steve Wilson
<div class="block" id="block-tables">

                <div class="secondary-navigation">
                    <ul class="wat-cf">
                        <li class="first active"><a href="test/organizations">Listing</a></li>
                        <li><a href="test/organizations/create/">New record</a></li>
                    </ul>
                </div>

                <div class="content">
                    <div class="inner">
                        <h3>{if ($controlling_filter_text)}{$controlling_filter_text}: {/if} {$table_name}</h3>
                        {if !empty( $data )}
                        	
                            <table class="table">
                            	<thead>
                                    
                                    			<th {if ($segments.sort_by=='id')}class='sort_{$segments.sort_order}'{/if}><a href='test/organizations/index/sort_by/id/sort_order/{if ($segments.sort_by=='id' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.id}</a></th>
			<th {if ($segments.sort_by=='organization')}class='sort_{$segments.sort_order}'{/if}><a href='test/organizations/index/sort_by/organization/sort_order/{if ($segments.sort_by=='organization' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.organization}</a></th>
			<th {if ($segments.sort_by=='address1')}class='sort_{$segments.sort_order}'{/if}><a href='test/organizations/index/sort_by/address1/sort_order/{if ($segments.sort_by=='address1' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.address1}</a></th>
			<th {if ($segments.sort_by=='address2')}class='sort_{$segments.sort_order}'{/if}><a href='test/organizations/index/sort_by/address2/sort_order/{if ($segments.sort_by=='address2' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.address2}</a></th>
			<th {if ($segments.sort_by=='city')}class='sort_{$segments.sort_order}'{/if}><a href='test/organizations/index/sort_by/city/sort_order/{if ($segments.sort_by=='city' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.city}</a></th>
			<th {if ($segments.sort_by=='state')}class='sort_{$segments.sort_order}'{/if}><a href='test/organizations/index/sort_by/state/sort_order/{if ($segments.sort_by=='state' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.state}</a></th>
			<th {if ($segments.sort_by=='zip')}class='sort_{$segments.sort_order}'{/if}><a href='test/organizations/index/sort_by/zip/sort_order/{if ($segments.sort_by=='zip' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.zip}</a></th>
			<th {if ($segments.sort_by=='main_phone')}class='sort_{$segments.sort_order}'{/if}><a href='test/organizations/index/sort_by/main_phone/sort_order/{if ($segments.sort_by=='main_phone' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.main_phone}</a></th>

                                    <th width="80">Actions</th>
                            	</thead>
                            	<tbody>
                                	{foreach $data as $row}
                                        <tr class="{cycle values='odd,even'}">
                                            
                                            				<td>{$row.id}</td>
				<td>{$row.organization}</td>
				<td>{$row.address1}</td>
				<td>{$row.address2}</td>
				<td>{$row.city}</td>
				<td>{$row.state}</td>
				<td>{$row.zip}</td>
				<td>{$row.main_phone}</td>

                                            <td width="80">
                                                <a href="test/organizations/show/{$row.id}"><img src="iscaffold/images/view.png" alt="Show record" /></a>
                                                <a href="test/organizations/edit/{$row.id}"><img src="iscaffold/images/edit.png" alt="Edit record" /></a>
                                                <a href="javascript:chk('test/organizations/delete/{$row.id}')"><img src="iscaffold/images/delete.png" alt="Delete record" /></a>
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
