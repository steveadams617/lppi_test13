Steve Wilson
<div class="block" id="block-tables">

                <div class="secondary-navigation">
                    <ul class="wat-cf">
                        <li class="first active"><a href="misc/episode_provider">Listing</a></li>
                        <li><a href="misc/episode_provider/create/">New record</a></li>
                    </ul>
                </div>

                <div class="content">
                    <div class="inner">
                        <h3>{if ($controlling_filter_text)}{$controlling_filter_text}: {/if} {$table_name}</h3>
                        {if !empty( $data )}
                        	
                            <table class="table">
                            	<thead>
                                    
                                    			<th {if ($segments.sort_by=='id')}class='sort_{$segments.sort_order}'{/if}><a href='misc/episode_provider/index/sort_by/id/sort_order/{if ($segments.sort_by=='id' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.id}</a></th>
			<th {if ($segments.sort_by=='provider_id')}class='sort_{$segments.sort_order}'{/if}><a href='misc/episode_provider/index/sort_by/provider_id/sort_order/{if ($segments.sort_by=='provider_id' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.provider_id}</a></th>
			<th {if ($segments.sort_by=='release_signed_date')}class='sort_{$segments.sort_order}'{/if}><a href='misc/episode_provider/index/sort_by/release_signed_date/sort_order/{if ($segments.sort_by=='release_signed_date' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.release_signed_date}</a></th>
			<th {if ($segments.sort_by=='next_appt_date')}class='sort_{$segments.sort_order}'{/if}><a href='misc/episode_provider/index/sort_by/next_appt_date/sort_order/{if ($segments.sort_by=='next_appt_date' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.next_appt_date}</a></th>
			<th {if ($segments.sort_by=='next_appt_time')}class='sort_{$segments.sort_order}'{/if}><a href='misc/episode_provider/index/sort_by/next_appt_time/sort_order/{if ($segments.sort_by=='next_appt_time' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.next_appt_time}</a></th>
			<th {if ($segments.sort_by=='last_collateral')}class='sort_{$segments.sort_order}'{/if}><a href='misc/episode_provider/index/sort_by/last_collateral/sort_order/{if ($segments.sort_by=='last_collateral' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.last_collateral}</a></th>
			<th {if ($segments.sort_by=='total_collateral')}class='sort_{$segments.sort_order}'{/if}><a href='misc/episode_provider/index/sort_by/total_collateral/sort_order/{if ($segments.sort_by=='total_collateral' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.total_collateral}</a></th>
			<th {if ($segments.sort_by=='dc_instructs_sent')}class='sort_{$segments.sort_order}'{/if}><a href='misc/episode_provider/index/sort_by/dc_instructs_sent/sort_order/{if ($segments.sort_by=='dc_instructs_sent' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.dc_instructs_sent}</a></th>
			<th {if ($segments.sort_by=='dc_summary_sent')}class='sort_{$segments.sort_order}'{/if}><a href='misc/episode_provider/index/sort_by/dc_summary_sent/sort_order/{if ($segments.sort_by=='dc_summary_sent' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.dc_summary_sent}</a></th>
			<th {if ($segments.sort_by=='notify_at_dc')}class='sort_{$segments.sort_order}'{/if}><a href='misc/episode_provider/index/sort_by/notify_at_dc/sort_order/{if ($segments.sort_by=='notify_at_dc' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.notify_at_dc}</a></th>
			<th {if ($segments.sort_by=='dc_summary_requested')}class='sort_{$segments.sort_order}'{/if}><a href='misc/episode_provider/index/sort_by/dc_summary_requested/sort_order/{if ($segments.sort_by=='dc_summary_requested' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.dc_summary_requested}</a></th>
			<th {if ($segments.sort_by=='scheduled_mtg_frequency')}class='sort_{$segments.sort_order}'{/if}><a href='misc/episode_provider/index/sort_by/scheduled_mtg_frequency/sort_order/{if ($segments.sort_by=='scheduled_mtg_frequency' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.scheduled_mtg_frequency}</a></th>
			<th {if ($segments.sort_by=='actual_contact_frequency')}class='sort_{$segments.sort_order}'{/if}><a href='misc/episode_provider/index/sort_by/actual_contact_frequency/sort_order/{if ($segments.sort_by=='actual_contact_frequency' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.actual_contact_frequency}</a></th>
			<th {if ($segments.sort_by=='last_patient_contact_date')}class='sort_{$segments.sort_order}'{/if}><a href='misc/episode_provider/index/sort_by/last_patient_contact_date/sort_order/{if ($segments.sort_by=='last_patient_contact_date' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.last_patient_contact_date}</a></th>
			<th {if ($segments.sort_by=='provider_relationship_memo')}class='sort_{$segments.sort_order}'{/if}><a href='misc/episode_provider/index/sort_by/provider_relationship_memo/sort_order/{if ($segments.sort_by=='provider_relationship_memo' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.provider_relationship_memo}</a></th>

                                    <th width="80">Actions</th>
                            	</thead>
                            	<tbody>
                                	{foreach $data as $row}
                                        <tr class="{cycle values='odd,even'}">
                                            
                                            				<td>{$row.id}</td>
				<td>{$row.provider_id}</td>
				<td>{$row.release_signed_date}</td>
				<td>{$row.next_appt_date}</td>
				<td>{$row.next_appt_time}</td>
				<td>{$row.last_collateral}</td>
				<td>{$row.total_collateral}</td>
				<td>{$row.dc_instructs_sent}</td>
				<td>{$row.dc_summary_sent}</td>
				<td>{$row.notify_at_dc}</td>
				<td>{$row.dc_summary_requested}</td>
				<td>{$row.scheduled_mtg_frequency}</td>
				<td>{$row.actual_contact_frequency}</td>
				<td>{$row.last_patient_contact_date}</td>
				<td>{$row.provider_relationship_memo}</td>

                                            <td width="80">
                                                <a href="misc/episode_provider/show/{$row.id}"><img src="iscaffold/images/view.png" alt="Show record" /></a>
                                                <a href="misc/episode_provider/edit/{$row.id}"><img src="iscaffold/images/edit.png" alt="Edit record" /></a>
                                                <a href="javascript:chk('misc/episode_provider/delete/{$row.id}')"><img src="iscaffold/images/delete.png" alt="Delete record" /></a>
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
