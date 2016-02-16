<?php if($variations->max_num_pages > 1) { ?>

    <form id="posts-filter" method="get">
                    
        <input type="hidden" name="page" value="jck-wt-bulk-edit">
    
        <div class="tablenav">
            <div class="tablenav-pages">
                <span class="pagination-links">
                    <a class="first-page" title="Go to the first page" href="?page=jck-wt-bulk-edit&paged=1">«</a>
                    
                    <?php if ($paged > 1) { ?>
                        <a class="prev-page" title="Go to the previous page" href="<?php echo '?page=jck-wt-bulk-edit&paged=' . ($paged -1); //prev link ?>">‹</a>
                    <?php } ?>
                    
                    <span class="paging-input"><label for="current-page-selector" class="screen-reader-text">Select Page</label><input class="current-page" id="current-page-selector" title="Current page" type="text" name="paged" value="<?php echo $paged; ?>" size="1"> of <span class="total-pages"><?php echo $variations->max_num_pages; ?></span></span>
                    
                    <?php if($paged < $variations->max_num_pages) { ?>
                        <a class="next-page" title="Go to the next page" href="<?php echo '?page=jck-wt-bulk-edit&paged=' . ($paged + 1); //next link ?>">›</a>
                    <?php } ?>
                    
                    <a class="last-page" title="Go to the last page" href="?page=jck-wt-bulk-edit&paged=<?php echo $variations->max_num_pages; ?>">»</a>
                </span>
            </div>
        </div>
    </form>

<?php } ?>