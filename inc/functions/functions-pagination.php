<?php 

// ---------------------------------------
//! Pagination
/*
	Place between Endwhile & Else in loop
	<?php if (function_exists('pagination')) {
		pagination($[wp_query_variable]->max_num_pages);
	} ?>
	
*/
// ---------------------------------------
	
function pagination($pages = '', $range = 2) {
	$showitems = ($range * 2)+1;  
	global $paged;
	
	if(empty($paged)) $paged = 1;
		
	if($pages == ''){
		global $wp_query;
		$pages = $wp_query->max_num_pages;
		if(!$pages){
			$pages = 1;
		}
	}   
	
	if(1 != $pages){
		//Display Postion + Number of Pages
		//echo '<span>Page '.$paged.' of '.$pages.'</span>';
		echo '<div class="pagination-block">';
		
		//Display Previous Link
		if($paged > 1){
			echo '<a title="Previous Page" class="previous pagination-button jump" href="'.get_pagenum_link($paged - 1).'"><svg xmlns="http://www.w3.org/2000/svg" width="5" height="10" viewBox="0 0 9 16"><path d="M8.4 4V1.7L8.3.2.5 8l7.7 7.7.2.2v-3.8L4.3 8l4.1-4z"/></svg>Prev</a>';
		}else {
			echo '<span title="Previous Page" class="previous pagination-button disabled"><svg xmlns="http://www.w3.org/2000/svg" width="5" height="10" viewBox="0 0 9 16"><path d="M8.4 4V1.7L8.3.2.5 8l7.7 7.7.2.2v-3.8L4.3 8l4.1-4z"/></svg>Prev</span>';
		}
		if ($paged >= 4) {
			echo '<a href="'.get_pagenum_link(1).'" class=" first-page jump-number">1</a>';
			echo '<span class="pagination-ellipses">...</span>';
		}
		echo '</div>';
		
		echo '<div class="pagination-block pagination-numbers">';
		
		//Show Page Links/Nav
		for ($i=1; $i <= $pages; $i++){
			if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){
				echo ($paged == $i)? '<span class="current">'.$i.'</span>':'<a href="' .get_pagenum_link($i).'" class="">'.$i.'</a>';
			}
		}
		echo '</div>';
		
		echo '<div class="pagination-block">';
		//Display Next Link
		if($paged <= $pages-3){
			echo '<span class="pagination-ellipses">...</span>';
			echo '<a href="'.get_pagenum_link($pages).'" class=" last-page jump-number">'.$pages.'</a>';
		}
		if ($paged < $pages) {
			echo '<a title="Next Page" class="next pagination-button jump" href="'.get_pagenum_link($paged + 1).'">Next<svg xmlns="http://www.w3.org/2000/svg" width="5" height="10" viewBox="0 0 9 16"><path d="M.7 12v3.8L8.5 8 .6.2v3.7L4.7 8l-4 4z"/></svg></a>';
		}else {
			echo '<span title="Next Page" class="next pagination-button disabled">Next<svg xmlns="http://www.w3.org/2000/svg" width="5" height="10" viewBox="0 0 9 16"><path d="M.7 12v3.8L8.5 8 .6.2v3.7L4.7 8l-4 4z"/></svg></span>';
		}		
		echo '</div>';
	
	}
}
