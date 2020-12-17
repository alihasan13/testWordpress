<?php 
if ( ! defined( 'ABSPATH' ) ) exit; 
/***************************/
//category product section product ajax filter
/***************************/
add_action('wp_ajax_top_store_cat_filter_ajax', 'top_store_cat_filter_ajax');
add_action('wp_ajax_nopriv_top_store_cat_filter_ajax', 'top_store_cat_filter_ajax');
function top_store_cat_filter_ajax(){
$prdct_optn = get_theme_mod('top_store_category_optn','recent');
   if( taxonomy_exists( 'product_cat' ) ){
     // product filter  
            $args = array(
                      'tax_query' => array(
                          'relation' => 'AND',
                          array(
                              'taxonomy' => 'product_cat',
                              'field' => 'slug',
                              'terms' => $_POST['data_cat_slug'],
                          ),array(
                                'taxonomy'  => 'product_visibility',
                                'terms'     => array( 'exclude-from-catalog' ),
                                'field'     => 'name',
                                'operator'  => 'NOT IN',
                            )
                      ),
                      'post_type' => 'product',
                      'orderby'   => 'date',
                  );

   // product filter 
  if($prdct_optn=='random'){  
     $args = array(
                      
                      'tax_query' => array(
                        'relation' => 'AND',
                          array(
                              'taxonomy' => 'product_cat',
                              'field' => 'slug',
                              'terms' => $_POST['data_cat_slug'],
                          ),array(
                                'taxonomy'  => 'product_visibility',
                                'terms'     => array( 'exclude-from-catalog' ),
                                'field'     => 'name',
                                'operator'  => 'NOT IN',
                            )
                      ),
                      'post_type' => 'product',
                      'orderby' => 'rand'
    );
}elseif($prdct_optn=='featured'){
    $args = array(
                      
                      'tax_query' => array(
                        'relation' => 'AND',
                          array(
                              'taxonomy' => 'product_cat',
                              'field' => 'slug',
                              'terms' => $_POST['data_cat_slug'],
                          ),array(
                                'taxonomy'  => 'product_visibility',
                                'terms'     => array( 'exclude-from-catalog' ),
                                'field'     => 'name',
                                'operator'  => 'NOT IN',
                            )
                      ),
                      'post_type' => 'product',
                      'post__in'  => wc_get_featured_product_ids(),
    );

}else{
    $args = array(
                      
                      'tax_query' => array(
                         'relation' => 'AND',
                          array(
                              'taxonomy' => 'product_cat',
                              'field' => 'slug',
                              'terms' => $_POST['data_cat_slug'],
                          ),array(
                                'taxonomy'  => 'product_visibility',
                                'terms'     => array( 'exclude-from-catalog' ),
                                'field'     => 'name',
                                'operator'  => 'NOT IN',
                            )
                      ),
                      'post_type' => 'product',
                      'orderby' => 'date'
    );
}
    echo top_store_product_filter_loop($args);
    exit;
  }
}
/*****************************************/
//Product filter for List View ajax filter
/*******************************************/
add_action('wp_ajax_top_store_cat_list_filter_ajax', 'top_store_cat_list_filter_ajax');
add_action('wp_ajax_nopriv_top_store_cat_list_filter_ajax', 'top_store_cat_list_filter_ajax');
function top_store_cat_list_filter_ajax(){
$prdct_optn = get_theme_mod('top_store_category_tb_list_optn','recent');
   if( taxonomy_exists( 'product_cat' ) ){
     // product filter  
            $args = array(
                      'tax_query' => array(
                        'relation' => 'AND',
                          array(
                              'taxonomy' => 'product_cat',
                              'field' => 'slug',
                              'terms' => $_POST['data_cat_slug'],
                          ),array(
                                'taxonomy'  => 'product_visibility',
                                'terms'     => array( 'exclude-from-catalog' ),
                                'field'     => 'name',
                                'operator'  => 'NOT IN',
                            )
                      ),
                      'post_type' => 'product',
                      'orderby'   => 'date',
                  );

   // product filter 
  if($prdct_optn=='random'){  
     $args = array(
                      
                      'tax_query' => array(
                        'relation' => 'AND',
                          array(
                              'taxonomy' => 'product_cat',
                              'field' => 'slug',
                              'terms' => $_POST['data_cat_slug'],
                          ),array(
                                'taxonomy'  => 'product_visibility',
                                'terms'     => array( 'exclude-from-catalog' ),
                                'field'     => 'name',
                                'operator'  => 'NOT IN',
                            )
                      ),
                      'post_type' => 'product',
                      'orderby' => 'rand'
    );
}elseif($prdct_optn=='featured'){
    $args = array(
                      
                      'tax_query' => array(
                        'relation' => 'AND',
                          array(
                              'taxonomy' => 'product_cat',
                              'field' => 'slug',
                              'terms' => $_POST['data_cat_slug'],
                          ),array(
                                'taxonomy'  => 'product_visibility',
                                'terms'     => array( 'exclude-from-catalog' ),
                                'field'     => 'name',
                                'operator'  => 'NOT IN',
                            )
                      ),
                      'post_type' => 'product',
                      'post__in'  => wc_get_featured_product_ids(),
    );

}else{
    $args = array(
                      
                      'tax_query' => array(
                        'relation' => 'AND',
                          array(
                              'taxonomy' => 'product_cat',
                              'field' => 'slug',
                              'terms' => $_POST['data_cat_slug'],
                          ),array(
                                'taxonomy'  => 'product_visibility',
                                'terms'     => array( 'exclude-from-catalog' ),
                                'field'     => 'name',
                                'operator'  => 'NOT IN',
                            )
                      ),
                      'post_type' => 'product',
                      'orderby' => 'date'
    );
}
    echo top_store_product_list_filter_loop($args);
    exit;
  }
}