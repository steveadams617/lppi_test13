Steve Wilson
<div class="block" id="block-tables">

                <div class="secondary-navigation">
                    <ul class="wat-cf">
                        <li class="first active"><a href="main/supports">Listing</a></li>
                        <li><a href="main/supports/create/">New record</a></li>
                    </ul>
                </div>

                <div class="content">
                    <div class="inner">
                        <h3>{if ($controlling_filter_text)}{$controlling_filter_text}: {/if} {$table_name}</h3>
                        {if !empty( $data )}
                        	
                            <table class="table">
                            	<thead>
                                    
                                    			<th {if ($segments.sort_by=='first_name')}class='sort_{$segments.sort_order}'{/if}><a href='main/supports/index/sort_by/first_name/sort_order/{if ($segments.sort_by=='first_name' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.first_name}</a></th>
			<th {if ($segments.sort_by=='last_name')}class='sort_{$segments.sort_order}'{/if}><a href='main/supports/index/sort_by/last_name/sort_order/{if ($segments.sort_by=='last_name' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.last_name}</a></th>
			<th {if ($segments.sort_by=='relationship')}class='sort_{$segments.sort_order}'{/if}><a href='main/supports/index/sort_by/relationship/sort_order/{if ($segments.sort_by=='relationship' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.relationship}</a></th>
			<th {if ($segments.sort_by=='city')}class='sort_{$segments.sort_order}'{/if}><a href='main/supports/index/sort_by/city/sort_order/{if ($segments.sort_by=='city' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.city}</a></th>
			<th {if ($segments.sort_by=='home_phone')}class='sort_{$segments.sort_order}'{/if}><a href='main/supports/index/sort_by/home_phone/sort_order/{if ($segments.sort_by=='home_phone' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.home_phone}</a></th>
			<th {if ($segments.sort_by=='work_phone')}class='sort_{$segments.sort_order}'{/if}><a href='main/supports/index/sort_by/work_phone/sort_order/{if ($segments.sort_by=='work_phone' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.work_phone}</a></th>
			<th {if ($segments.sort_by=='cell_phone')}class='sort_{$segments.sort_order}'{/if}><a href='main/supports/index/sort_by/cell_phone/sort_order/{if ($segments.sort_by=='cell_phone' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.cell_phone}</a></th>

                                    <th width="80">Actions</th>
                            	</thead>
                            	<tbody>
                                	{foreach $data as $row}
                                        <tr class="{cycle values='odd,even'}">
                                            
                                            				<td>{$row.first_name}</td>
				<td>{$row.last_name}</td>
				<td>{$row.relationship}</td>
				<td>{$row.city}</td>
				<td>{$row.home_phone}</td>
				<td>{$row.work_phone}</td>
				<td>{$row.cell_phone}</td>

                                            <td width="80">
                                                <a href="main/supports/show/{$row.id}"><img src="iscaffold/images/view.png" alt="Show record" /></a>
                                                <a href="main/supports/edit/{$row.id}"><img src="iscaffold/images/edit.png" alt="Edit record" /></a>
                                                <a href="javascript:chk('main/supports/delete/{$row.id}')"><img src="iscaffold/images/delete.png" alt="Delete record" /></a>
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
