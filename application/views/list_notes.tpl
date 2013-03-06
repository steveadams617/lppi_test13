Steve Wilson
<div class="block" id="block-tables">

                <div class="secondary-navigation">
                    <ul class="wat-cf">
                        <li class="first active"><a href="main/notes">Listing</a></li>
                        <li><a href="main/notes/create/">New record</a></li>
                    </ul>
                </div>

                <div class="content">
                    <div class="inner">
                        <h3>{if ($controlling_filter_text)}{$controlling_filter_text}: {/if} {$table_name}</h3>
                        {if !empty( $data )}
                        	
                            <table class="table">
                            	<thead>
                                    
                                    			<th {if ($segments.sort_by=='id')}class='sort_{$segments.sort_order}'{/if}><a href='main/notes/index/sort_by/id/sort_order/{if ($segments.sort_by=='id' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.id}</a></th>
			<th {if ($segments.sort_by=='episode_id')}class='sort_{$segments.sort_order}'{/if}><a href='main/notes/index/sort_by/episode_id/sort_order/{if ($segments.sort_by=='episode_id' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.episode_id}</a></th>
			<th {if ($segments.sort_by=='user_id')}class='sort_{$segments.sort_order}'{/if}><a href='main/notes/index/sort_by/user_id/sort_order/{if ($segments.sort_by=='user_id' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.user_id}</a></th>
			<th {if ($segments.sort_by=='body')}class='sort_{$segments.sort_order}'{/if}><a href='main/notes/index/sort_by/body/sort_order/{if ($segments.sort_by=='body' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.body}</a></th>
			<th {if ($segments.sort_by=='printed')}class='sort_{$segments.sort_order}'{/if}><a href='main/notes/index/sort_by/printed/sort_order/{if ($segments.sort_by=='printed' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.printed}</a></th>
			<th {if ($segments.sort_by=='include_plan')}class='sort_{$segments.sort_order}'{/if}><a href='main/notes/index/sort_by/include_plan/sort_order/{if ($segments.sort_by=='include_plan' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.include_plan}</a></th>
			<th {if ($segments.sort_by=='note_date')}class='sort_{$segments.sort_order}'{/if}><a href='main/notes/index/sort_by/note_date/sort_order/{if ($segments.sort_by=='note_date' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.note_date}</a></th>
			<th {if ($segments.sort_by=='note_time')}class='sort_{$segments.sort_order}'{/if}><a href='main/notes/index/sort_by/note_time/sort_order/{if ($segments.sort_by=='note_time' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.note_time}</a></th>
			<th {if ($segments.sort_by=='status_id')}class='sort_{$segments.sort_order}'{/if}><a href='main/notes/index/sort_by/status_id/sort_order/{if ($segments.sort_by=='status_id' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.status_id}</a></th>

                                    <th width="80">Actions</th>
                            	</thead>
                            	<tbody>
                                	{foreach $data as $row}
                                        <tr class="{cycle values='odd,even'}">
                                            
                                            				<td>{$row.id}</td>
				<td>{$row.episode_id}</td>
				<td>{$row.user_id}</td>
				<td>{$row.body}</td>
				<td>{$row.printed}</td>
				<td>{$row.include_plan}</td>
				<td>{$row.note_date}</td>
				<td>{$row.note_time}</td>
				<td>{$row.status_id}</td>

                                            <td width="80">
                                                <a href="main/notes/show/{$row.id}"><img src="iscaffold/images/view.png" alt="Show record" /></a>
                                                <a href="main/notes/edit/{$row.id}"><img src="iscaffold/images/edit.png" alt="Edit record" /></a>
                                                <a href="javascript:chk('main/notes/delete/{$row.id}')"><img src="iscaffold/images/delete.png" alt="Delete record" /></a>
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
