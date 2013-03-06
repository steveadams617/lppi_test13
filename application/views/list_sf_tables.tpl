Steve Wilson
<div class="block" id="block-tables">

                <div class="secondary-navigation">
                    <ul class="wat-cf">
                        <li class="first active"><a href="sf_tables">Listing</a></li>
                        <li><a href="sf_tables/create/">New record</a></li>
                    </ul>
                </div>

                <div class="content">
                    <div class="inner">
                        <h3>{if ($controlling_filter_text)}{$controlling_filter_text}: {/if} {$table_name}</h3>
                        {if !empty( $data )}
                        	
                            <table class="table">
                            	<thead>
                                    
                                    			<th {if ($segments.sort_by=='t_id')}class='sort_{$segments.sort_order}'{/if}><a href='sf_tables/index/sort_by/t_id/sort_order/{if ($segments.sort_by=='t_id' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.t_id}</a></th>
			<th {if ($segments.sort_by=='tablename')}class='sort_{$segments.sort_order}'{/if}><a href='sf_tables/index/sort_by/tablename/sort_order/{if ($segments.sort_by=='tablename' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.tablename}</a></th>
			<th {if ($segments.sort_by=='usetable')}class='sort_{$segments.sort_order}'{/if}><a href='sf_tables/index/sort_by/usetable/sort_order/{if ($segments.sort_by=='usetable' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.usetable}</a></th>

                                    <th width="80">Actions</th>
                            	</thead>
                            	<tbody>
                                	{foreach $data as $row}
                                        <tr class="{cycle values='odd,even'}">
                                            
                                            				<td>{$row.t_id}</td>
				<td>{$row.tablename}</td>
				<td>{$row.usetable}</td>

                                            <td width="80">
                                                <a href="sf_tables/show/{$row.t_id}"><img src="iscaffold/images/view.png" alt="Show record" /></a>
                                                <a href="sf_tables/edit/{$row.t_id}"><img src="iscaffold/images/edit.png" alt="Edit record" /></a>
                                                <a href="javascript:chk('sf_tables/delete/{$row.t_id}')"><img src="iscaffold/images/delete.png" alt="Delete record" /></a>
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
