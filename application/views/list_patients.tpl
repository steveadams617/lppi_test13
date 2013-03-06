Steve Wilson
<div class="block" id="block-tables">

                <div class="secondary-navigation">
                    <ul class="wat-cf">
                        <li class="first active"><a href="patients/patients">Listing</a></li>
                        <li><a href="patients/patients/create/">New record</a></li>
                    </ul>
                </div>

                <div class="content">
                    <div class="inner">
                        <h3>{if ($controlling_filter_text)}{$controlling_filter_text}: {/if} {$table_name}</h3>
                        {if !empty( $data )}
                        	
                            <table class="table">
                            	<thead>
                                    
                                    			<th {if ($segments.sort_by=='id')}class='sort_{$segments.sort_order}'{/if}><a href='patients/patients/index/sort_by/id/sort_order/{if ($segments.sort_by=='id' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.id}</a></th>
			<th {if ($segments.sort_by=='first_name')}class='sort_{$segments.sort_order}'{/if}><a href='patients/patients/index/sort_by/first_name/sort_order/{if ($segments.sort_by=='first_name' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.first_name}</a></th>
			<th {if ($segments.sort_by=='last_name')}class='sort_{$segments.sort_order}'{/if}><a href='patients/patients/index/sort_by/last_name/sort_order/{if ($segments.sort_by=='last_name' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.last_name}</a></th>
			<th {if ($segments.sort_by=='nick_alias')}class='sort_{$segments.sort_order}'{/if}><a href='patients/patients/index/sort_by/nick_alias/sort_order/{if ($segments.sort_by=='nick_alias' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.nick_alias}</a></th>
			<th {if ($segments.sort_by=='mrn')}class='sort_{$segments.sort_order}'{/if}><a href='patients/patients/index/sort_by/mrn/sort_order/{if ($segments.sort_by=='mrn' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.mrn}</a></th>
			<th {if ($segments.sort_by=='DOB')}class='sort_{$segments.sort_order}'{/if}><a href='patients/patients/index/sort_by/DOB/sort_order/{if ($segments.sort_by=='DOB' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.DOB}</a></th>

                                    <th width="80">Actions</th>
                            	</thead>
                            	<tbody>
                                	{foreach $data as $row}
                                        <tr class="{cycle values='odd,even'}">
                                            
                                            				<td>{$row.id}</td>
				<td>{$row.first_name}</td>
				<td>{$row.last_name}</td>
				<td>{$row.nick_alias}</td>
				<td>{$row.mrn}</td>
				<td>{$row.DOB}</td>

                                            <td width="80">
                                                <a href="patients/patients/show/{$row.id}"><img src="iscaffold/images/view.png" alt="Show record" /></a>
                                                <a href="patients/patients/edit/{$row.id}"><img src="iscaffold/images/edit.png" alt="Edit record" /></a>
                                                <a href="javascript:chk('patients/patients/delete/{$row.id}')"><img src="iscaffold/images/delete.png" alt="Delete record" /></a>
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
