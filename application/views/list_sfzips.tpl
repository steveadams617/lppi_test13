Steve Wilson
<div class="block" id="block-tables">

                <div class="secondary-navigation">
                    <ul class="wat-cf">
                        <li class="first active"><a href="test/sfzips">Listing</a></li>
                        <li><a href="test/sfzips/create/">New record</a></li>
                    </ul>
                </div>

                <div class="content">
                    <div class="inner">
                        <h3>{if ($controlling_filter_text)}{$controlling_filter_text}: {/if} {$table_name}</h3>
                        {if !empty( $data )}
                        	
                            <table class="table">
                            	<thead>
                                    
                                    			<th {if ($segments.sort_by=='sfz_id')}class='sort_{$segments.sort_order}'{/if}><a href='test/sfzips/index/sort_by/sfz_id/sort_order/{if ($segments.sort_by=='sfz_id' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.sfz_id}</a></th>
			<th {if ($segments.sort_by=='sfz_zip')}class='sort_{$segments.sort_order}'{/if}><a href='test/sfzips/index/sort_by/sfz_zip/sort_order/{if ($segments.sort_by=='sfz_zip' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.sfz_zip}</a></th>
			<th {if ($segments.sort_by=='sfz_neighhoods')}class='sort_{$segments.sort_order}'{/if}><a href='test/sfzips/index/sort_by/sfz_neighhoods/sort_order/{if ($segments.sort_by=='sfz_neighhoods' && $segments.sort_order == 'asc')}desc{else}asc{/if}{if ($segments.search_text)}/search_text/{$segments.search_text}/{/if}'>{$fields.sfz_neighhoods}</a></th>

                                    <th width="80">Actions</th>
                            	</thead>
                            	<tbody>
                                	{foreach $data as $row}
                                        <tr class="{cycle values='odd,even'}">
                                            
                                            				<td>{$row.sfz_id}</td>
				<td>{$row.sfz_zip}</td>
				<td>{$row.sfz_neighhoods}</td>

                                            <td width="80">
                                                <a href="test/sfzips/show/{$row.sfz_id}"><img src="iscaffold/images/view.png" alt="Show record" /></a>
                                                <a href="test/sfzips/edit/{$row.sfz_id}"><img src="iscaffold/images/edit.png" alt="Edit record" /></a>
                                                <a href="javascript:chk('test/sfzips/delete/{$row.sfz_id}')"><img src="iscaffold/images/delete.png" alt="Delete record" /></a>
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
