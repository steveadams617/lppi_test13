Steve Wilson
<div class="block" id="block-tables">

                <div class="secondary-navigation">
                    <ul class="wat-cf">
                        <li class="first active"><a href="test/tasks">Listing</a></li>
                        <li><a href="test/tasks/create/">New record</a></li>
                    </ul>
                </div>

                <div class="content">
                    <div class="inner">
                        <h3>{if ($controlling_filter_text)}{$controlling_filter_text}: {/if} {$table_name}</h3>
                        {if !empty( $data )}
                        	
                            <table class="table">
                            	<thead>
                                    
                                    			<th {if ($segments.sort_by=='id')}class='sort_{$segments.sort_order}'{/if}><a href='test/tasks/index/sort_by/id/sort_order/{if ($segments.sort_by=='id' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.id}</a></th>
			<th {if ($segments.sort_by=='episode_id')}class='sort_{$segments.sort_order}'{/if}><a href='test/tasks/index/sort_by/episode_id/sort_order/{if ($segments.sort_by=='episode_id' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.episode_id}</a></th>
			<th {if ($segments.sort_by=='task')}class='sort_{$segments.sort_order}'{/if}><a href='test/tasks/index/sort_by/task/sort_order/{if ($segments.sort_by=='task' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.task}</a></th>
			<th {if ($segments.sort_by=='create_timestamp')}class='sort_{$segments.sort_order}'{/if}><a href='test/tasks/index/sort_by/create_timestamp/sort_order/{if ($segments.sort_by=='create_timestamp' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.create_timestamp}</a></th>
			<th {if ($segments.sort_by=='complete_timestamp')}class='sort_{$segments.sort_order}'{/if}><a href='test/tasks/index/sort_by/complete_timestamp/sort_order/{if ($segments.sort_by=='complete_timestamp' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.complete_timestamp}</a></th>

                                    <th width="80">Actions</th>
                            	</thead>
                            	<tbody>
                                	{foreach $data as $row}
                                        <tr class="{cycle values='odd,even'}">
                                            
                                            				<td>{$row.id}</td>
				<td>{$row.episode_id}</td>
				<td>{$row.task}</td>
				<td>{$row.create_timestamp}</td>
				<td>{$row.complete_timestamp}</td>

                                            <td width="80">
                                                <a href="test/tasks/show/{$row.id}"><img src="iscaffold/images/view.png" alt="Show record" /></a>
                                                <a href="test/tasks/edit/{$row.id}"><img src="iscaffold/images/edit.png" alt="Edit record" /></a>
                                                <a href="javascript:chk('test/tasks/delete/{$row.id}')"><img src="iscaffold/images/delete.png" alt="Delete record" /></a>
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
