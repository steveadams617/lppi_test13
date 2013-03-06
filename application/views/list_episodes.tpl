Steve Wilson
<div class="block" id="block-tables">

                <div class="secondary-navigation">
                    <ul class="wat-cf">
                        <li class="first active"><a href="test/episodes">Listing</a></li>
                        <li><a href="test/episodes/create/">New record</a></li>
                    </ul>
                </div>

                <div class="content">
                    <div class="inner">
                        <h3>{if ($controlling_filter_text)}{$controlling_filter_text}: {/if} {$table_name}</h3>
                        {if !empty( $data )}
                        	
                            <table class="table">
                            	<thead>
                                    
                                    			<th {if ($segments.sort_by=='id')}class='sort_{$segments.sort_order}'{/if}><a href='test/episodes/index/sort_by/id/sort_order/{if ($segments.sort_by=='id' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.id}</a></th>
			<th {if ($segments.sort_by=='patient_id')}class='sort_{$segments.sort_order}'{/if}><a href='test/episodes/index/sort_by/patient_id/sort_order/{if ($segments.sort_by=='patient_id' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.patient_id}</a></th>
			<th {if ($segments.sort_by=='team_id')}class='sort_{$segments.sort_order}'{/if}><a href='test/episodes/index/sort_by/team_id/sort_order/{if ($segments.sort_by=='team_id' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.team_id}</a></th>
			<th {if ($segments.sort_by=='start_date')}class='sort_{$segments.sort_order}'{/if}><a href='test/episodes/index/sort_by/start_date/sort_order/{if ($segments.sort_by=='start_date' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.start_date}</a></th>
			<th {if ($segments.sort_by=='end_date')}class='sort_{$segments.sort_order}'{/if}><a href='test/episodes/index/sort_by/end_date/sort_order/{if ($segments.sort_by=='end_date' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.end_date}</a></th>

                                    <th width="80">Actions</th>
                            	</thead>
                            	<tbody>
                                	{foreach $data as $row}
                                        <tr class="{cycle values='odd,even'}">
                                            
                                            				<td>{$row.id}</td>
				<td>{$row.patient_id}</td>
				<td>{$row.team_id}</td>
				<td>{$row.start_date}</td>
				<td>{$row.end_date}</td>

                                            <td width="80">
                                                <a href="test/episodes/show/{$row.id}"><img src="iscaffold/images/view.png" alt="Show record" /></a>
                                                <a href="test/episodes/edit/{$row.id}"><img src="iscaffold/images/edit.png" alt="Edit record" /></a>
                                                <a href="javascript:chk('test/episodes/delete/{$row.id}')"><img src="iscaffold/images/delete.png" alt="Delete record" /></a>
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
