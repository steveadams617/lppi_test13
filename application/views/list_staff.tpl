Steve Wilson
<div class="block" id="block-tables">

                <div class="secondary-navigation">
                    <ul class="wat-cf">
                        <li class="first active"><a href="test/staff">Listing</a></li>
                        <li><a href="test/staff/create/">New record</a></li>
                    </ul>
                </div>

                <div class="content">
                    <div class="inner">
                        <h3>{if ($controlling_filter_text)}{$controlling_filter_text}: {/if} {$table_name}</h3>
                        {if !empty( $data )}
                        	
                            <table class="table">
                            	<thead>
                                    
                                    			<th {if ($segments.sort_by=='st_id')}class='sort_{$segments.sort_order}'{/if}><a href='test/staff/index/sort_by/st_id/sort_order/{if ($segments.sort_by=='st_id' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.st_id}</a></th>
			<th {if ($segments.sort_by=='Column 2')}class='sort_{$segments.sort_order}'{/if}><a href='test/staff/index/sort_by/Column 2/sort_order/{if ($segments.sort_by=='Column 2' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.Column 2}</a></th>
			<th {if ($segments.sort_by=='st_room')}class='sort_{$segments.sort_order}'{/if}><a href='test/staff/index/sort_by/st_room/sort_order/{if ($segments.sort_by=='st_room' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.st_room}</a></th>

                                    <th width="80">Actions</th>
                            	</thead>
                            	<tbody>
                                	{foreach $data as $row}
                                        <tr class="{cycle values='odd,even'}">
                                            
                                            				<td>{$row.st_id}</td>
				<td>{$row.Column 2}</td>
				<td>{$row.st_room}</td>

                                            <td width="80">
                                                <a href="test/staff/show/{$row.st_id}"><img src="iscaffold/images/view.png" alt="Show record" /></a>
                                                <a href="test/staff/edit/{$row.st_id}"><img src="iscaffold/images/edit.png" alt="Edit record" /></a>
                                                <a href="javascript:chk('test/staff/delete/{$row.st_id}')"><img src="iscaffold/images/delete.png" alt="Delete record" /></a>
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
