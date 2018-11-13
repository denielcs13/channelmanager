<?php

	class pagination {

		function pagination_function($per_page, $current_page, $get_total_rows, $pages){

			$pagination = '';

			if($pages > 0 && $pages != 1 && $current_page <= $pages){

				$pagination .= '<div class="dataTables_paginate paging_simple_numbers" id="example1_paginate"     style="float: right;"><ul class="pagination">';

				

				$right_links    = $current_page + 3; 

				$previous       = $current_page - 3; 

				$next           = $current_page + 1; 

				$first_link     = true; 

				

				if($current_page > 1){

					$previous_link = ($previous<=0)?1:$previous;

					$pagination .= '<li class="paginate_button page-item previous"><a href="#" class="page-link" data-page="1" title="First"><<</a></li>';

					$pagination .= '<li class="paginate_button page-item previous "><a href="#" class="page-link" data-page="'.$previous_link.'" title="Previous"><</a></li>'; 

						for($i = ($current_page-2); $i < $current_page; $i++){

							if($i > 0){

								$pagination .= '<li class="paginate_button page-item"><a class="page-link" href="#" data-page="'.$i.'" title="Page'.$i.'">'.$i.'</a></li>';

							}

						}   

					$first_link = false; 

				}

				if($first_link){ 

					$pagination .= '<li class="paginate_button page-item active"><a href="#" class="page-link" data-page="'.$current_page.'">'.$current_page.'</a></li>';

				}elseif($current_page == $pages){ 

					$pagination .= '<li class="paginate_button page-item active"><a href="#" class="page-link" data-page="'.$current_page.'">'.$current_page.'</a></li>';

				}else{

					$pagination .= '<li class="paginate_button page-item active"><a href="#" class="page-link" data-page="'.$current_page.'">'.$current_page.'</a></li>';

				}

						

				for($i = $current_page+1; $i < $right_links ; $i++){ 

					if($i<=$pages){

						$pagination .= '<li class="paginate_button page-item"><a href="#" class="page-link" data-page="'.$i.'" title="Page '.$i.'">'.$i.'</a></li>';

					}

				}

				if($current_page < $pages){ 

						$next_link = ($i > $pages)? $pages : $i;

						$pagination .= '<li class="paginate_button page-item next"><a href="#" class="page-link" data-page="'.$next_link.'" title="Next Page">></a></li>'; 

						$pagination .= '<li class="paginate_button page-item next last"><a href="#" class="page-link" data-page="'.$pages.'" title="Last Page">>></a></li>'; 

				}

				

				$pagination .= '</ul></div>'; 

			}

			return $pagination;

		}

	}

?>