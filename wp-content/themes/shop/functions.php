<?php

define("THEME_URL", get_bloginfo('template_directory'));


function THEM_URL(){
    echo get_template_directory_uri();
}

function IN_RA($data){
    echo '<pre style="font-size:70%;text-align:initial;max-width:1000px;margin:0 auto;">';
    print_r($data);
    echo '</pre>';
}
add_filter( 'use_block_editor_for_post', '__return_false' );    

add_action('init', "theme_Setup");
add_action('after_setup_theme', 'mycustom_Wc_theme_support');
add_action('init', 'tao_custom_post_type');
add_action('wp_enqueue_scripts','set_up_theme_style');
function theme_Setup(){ // init theme

    //đăng kí menu header
    register_nav_menu('header-top', __("Menu  top code"));
    register_nav_menu('header-main', __("Menu chính code"));
    register_nav_menu('header-menu', __("Menu  footer code"));
     
    //đăng kí sidebar =>> widget
    register_sidebar([   'name'=> "Sidebar Cột Bên",  'id' =>'main-sidebar'   ]);

}
function set_up_theme_style(){
        wp_register_style('main-style',get_template_directory_uri().'/style.css','all');
        wp_enqueue_style('main-style');
        
        wp_register_script('test-js',get_template_directory_uri().'test.js');
        wp_enqueue_script('test-js');
}
function mycustom_Wc_theme_support(){
    add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
}
add_action ( 'admin_menu' , function() {
    add_management_page (
        __ ( 'Welcome' , 'textdomain' ),
        __ ( 'Welcome' , 'textdomain' ),
        'manage_options' ,
        'my-welcome' ,
        'prefix_render'
   );
} );
function prefix_render() {
    echo '<div class="wrap">';
    echo "VCCCCCCCCCCCCCCCCCCCCCCCCCC";
    echo '</div>';
}

// function create_product_cpt() {
//     $labels = array(
//         'name' => 'Sản phẩm aaa',
//         'singular_name' => 'Sản phẩm aaaa',
//         'menu_name' => 'Sản phẩm aaa',
//         'name_admin_bar' => 'Sản phẩm aaaa',
//         'add_new' => 'Thêm mới',
//         'add_new_item' => 'Thêm sản phẩm mới',
//         'new_item' => 'Sản phẩm mới',
//         'edit_new_item' => 'Sửa sản phẩm',
//         'view_items' => 'Xem sản phẩm',
//         'all_items' => 'Tất cả sản phẩm',
//         'search_items' => 'Tìm kiếm sản phẩm',
//         'parent_item_colon' => 'Sản phẩm cha:',
//         'not_found' => 'Không tìm thấy sản phẩm nào.',
//         'not_found_in_trash' => 'Không tìm thấy sản phẩm nào trong thùng rác.'
//     );
 
//     $args = array(
//         'labels' => $labels,
//         'public' => true,
//         'publicly_queryable' => true,
//         'show_ui' => true,
//         'show_in_menu' => true,
//         'query_var' => true,
//         'rewrite' => array( 'slug' => 'san-pham' ),
//         'capability_type' => 'post',
//         'has_archive' => true,
//         'hierarchical' => false,
//         'menu_position' => 5,
//         'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' )
//     );
 
//     register_post_type( 'product_sp', $args );
// }
 
// add_action( 'init', 'create_product_cpt' );

add_action ( 'init', 'create' );
function create(){
   	
   	$labels = array(
               'name' 				=> __('Products'),
               'singular_name' 	=> __('Product'),
               'menu_name'			=> __('ZProduct'),
               'name_admin_bar' 	=> __('ZProduct'),
               'add_new'			=> __('Add Product'),
               'add_new_item'		=> __('Add New Product'),
               'search_items' 		=> __('Search Product'),
               'not_found'			=> __('No products found.'),
               'not_found_in_trash'=> __('No products found in Trash'),
               'view_item' 		=> __('View product'),
               'edit_item'			=> __('Edit product'),
   			);
   	$args = array(
   			'labels'               => $labels,
   			'description'          => 'Hiển thị nội dung mô tả về phần Custom Post',
   			'public'               => true,
				'hierarchical'         => true,
               // 'exclude_from_search'  => null, //public
               // 'publicly_queryable'   => null, //public
               // 'show_ui'              => null, //public
               // 'show_in_menu'         => null, 
				'show_in_nav_menus'    => true, //public
				'show_in_admin_bar'    => true, //public
				'menu_position'        => 5,
				'menu_icon'            =>  '/icon-setting16x16.png',
				'capability_type'      => 'post',
               // 'capabilities'         => array(),
               // 'map_meta_cap'         => null,
				'supports'             => array('title' ,'editor','author','thumbnail','excerpt','trackbacks' ,'custom-fields' ,'comments','revisions' ,'page-attributes','post-formats'),
                // 'register_meta_box_cb' => null,
               //	'taxonomies'           => array(),
				'has_archive'          => true,
				'rewrite'              => array('slug'=>'zproduct'),
               // 'query_var'            => true,
               // 'can_export'           => true,
               // 'delete_with_user'     => null,
              // '_builtin'             => false,
				'_edit_link'           => 'post.php?post=%d',
   	);
       register_post_type('zproduct', $args);
   	
   }

   function create_custom_taxonomy() {
    $labels = array(
      'name'              => _x( 'Genres', 'taxonomy general name' ),
      'singular_name'     => _x( 'Genre', 'taxonomy singular name' ),
      'search_items'      => __( 'Search Genres' ),
      'all_items'         => __( 'All Genres' ),
      'parent_item'       => __( 'Parent Genre' ),
      'parent_item_colon' => __( 'Parent Genre:' ),
      'edit_item'         => __( 'Edit Genre' ), 
      'update_item'       => __( 'Update Genre' ),
      'add_new_item'      => __( 'Add New Genre' ),
      'new_item_name'     => __( 'New Genre Name' ),
      'menu_name'         => __( 'Genre' )
    );
    
    $args = array(
      'labels' => $labels,
      'public' => true,
      'hierarchical' => true,
      'show_ui' => true,
      'show_admin_column' => true,
      'query_var' => true,
      'rewrite' => array( 'slug' => 'genre' )
    );
    
    register_taxonomy( 'genre', 'zproduct', $args ); //movie là slug của custom post type
  }
  add_action( 'init', 'create_custom_taxonomy', 0 );

function tao_custom_post_type(){  // tạo cho slider
    /*
     * Biến $label để chứa các text liên quan đến tên hiển thị của Post Type trong Admin
     */
    $label = array(
        'name' => 'Slider nè', //Tên post type dạng số nhiều
        'singular_name' => 'Slider Singular' //Tên post type dạng số ít
    );
 
    /*
     * Biến $args là những tham số quan trọng trong Post Type
     */
    $args = array(
        'labels' => $label, //Gọi các label trong biến $label ở trên
        'description' => 'Post type đăng sản phẩm', //Mô tả của post type
        'supports' => array(
            'title',
            'thumbnail',
            // 'editor', 
            // 'excerpt',
            // 'author',
            // 'comments',
            // 'trackbacks',
            // 'revisions',
            // 'custom-fields'
        ), //Các tính năng được hỗ trợ trong post type
        // 'taxonomies' => array( 'category', 'post_tag' ), //Các taxonomy được phép sử dụng để phân loại nội dung
        'hierarchical' => false, //Cho phép phân cấp, nếu là false thì post type này giống như Post, true thì giống như Page
        'public' => true, //Kích hoạt post type
        'show_ui' => true, //Hiển thị khung quản trị như Post/Page
        'show_in_menu' => true, //Hiển thị trên Admin Menu (tay trái)
        'show_in_nav_menus' => true, //Hiển thị trong Appearance -> Menus
        'show_in_admin_bar' => true, //Hiển thị trên thanh Admin bar màu đen.
        'menu_position' => 5, //Thứ tự vị trí hiển thị trong menu (tay trái)
        'menu_icon' => 'dashicons-format-gallery', //Đường dẫn tới icon sẽ hiển thị
        'can_export' => true, //Có thể export nội dung bằng Tools -> Export
        'has_archive' => true, //Cho phép lưu trữ (month, date, year)
        'exclude_from_search' => false, //Loại bỏ khỏi kết quả tìm kiếm
        'publicly_queryable' => true, //Hiển thị các tham số trong query, phải đặt true
        'capability_type' => 'post' //
    ); 
 
    register_post_type('slider', $args); //Tạo post type với slug tên là sanpham và các tham số trong biến $args ở trên
 
}

function Hien_thi_bai_viet_lien_quan_category($post){
    $categories = get_the_category($post->ID);
    if ($categories) 
    {
        $category_ids = array();
        foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
 
        $args=array(
        'category__in' => $category_ids,
        'post__not_in' => array($post->ID),
        'showposts'=>5, // Số bài viết bạn muốn hiển thị.
        'caller_get_posts'=>1
        );
        $my_query = new wp_query($args);
        if( $my_query->have_posts() ) 
        {
            echo '<h3>Bài viết liên quan</h3><ul class="list-news">';
            while ($my_query->have_posts())
            {
                $my_query->the_post();
                ?>
                <li>
                	<div class="new-img"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(85, 75)); ?></a></div>
                	<div class="item-list">
                		<h4><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
                		<?php the_excerpt(); ?>
                	</div>
                </li>
                <?php
            }
            echo '</ul>';
        }
    }
}


function add_feature_group_field($taxonomy) { ?>
   <div class="form-field term-group">
       <label for="location"><?php _e('Nhập link tùy chỉnh'); ?></label>
       <input class="controls" type="text" id="linkcat" name="linkcat"/>
   </div> 
<?php }
add_action( 'category_add_form_fields', 'add_feature_group_field', 10, 1);

function save_category( $term_id, $tt_id ){
    if( isset( $_POST['linkcat'] ) && '' !== $_POST['linkcat'] ){
        add_term_meta( $term_id, 'linkcat', $_POST['linkcat'], true );
    }
}
add_action( 'created_category', 'save_category', 10, 2 );

// set lượt view cho bài viết ->>    setpostview(get_the_id());
function setpostview($postID){
    $count_key ='views';
    $count = get_post_meta($postID, $count_key, true);
    if($count == ''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    } else {
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
// get lượt view cho bài viết ->>    gétpostview(get_the_id());
function getpostviews($postID){
    $count_key ='views';
    $count = get_post_meta($postID, $count_key, true);
    if($count == ''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0";
    }
    return $count;
}


//WPSHARE247.COM Theme Option
define( 'WS247_GE_FIELDS_GROUP', 'Ws247_ge_pfs-fields-group' );

//1. Tạo trang cấu hình Theme Option
add_action("admin_menu", 'wpshare247_create_theme_option_page');
function wpshare247_create_theme_option_page(){
    $page_title = 'Theme Options';
    $menu_title = $page_title;
    $capability = 'manage_options'; // Phân Quyền, ai có quyền sử dụng trang này
    $menu_slug = 'wpshare247-theme-options';
    $function_callback = 'wpshare247_the_content_option_fields';
    $icon_url = '';
    $position = 1;
    add_menu_page($page_title, $menu_title, $capability, $menu_slug , $function_callback, $icon_url, $position);
}

function wpshare247_the_content_option_fields(){
?>
    <div id="poststuff" class="w366-options-area">
        <div class="postbox-container">
            <div class="meta-box-sortables ui-sortable">
                <div class="postbox ">
                    <h2 class="hndle ui-sortable-handle">Theme Option - Cấu hình Website Wpshare247.com</h2>
                    <div class="wle-tab-content">
                        <!-- Form khai báo các Options tại đây -->
                        <form method="post" action="options.php">
                            <?php settings_fields( WS247_GE_FIELDS_GROUP ); ?>
                            <?php do_settings_sections( WS247_GE_FIELDS_GROUP ); ?>
                            
                            <!--Khai báo các fields tại đây: xem hàm 'wpshare247_register_option_fields' bên dưới-->
                            <div class="wpshare247-option-fields">
                                <table class="form-table">
                                    <!-- Mỗi 1 tr là 1 field -->
                                    
                                    <!-- wpshare247_hotline -->
                                    <tr valign="top">
                                        <td><strong><?php esc_html_e("Hotline", 'wpshare247.com'); ?></strong></td>
                                        <td>
                                            <?php $wpshare247_hotline = get_option('wpshare247_hotline');?>
                                            <input style="width:100%" placeholder="0852.080383" type="text" id="<?php echo esc_html('wpshare247_hotline'); ?>" name="<?php echo esc_html('wpshare247_hotline'); ?>" value="<?php echo esc_attr($wpshare247_hotline); ?>" />
                                        </td>
                                    </tr>
                                    
                                    <!-- wpshare247_email -->
                                    <tr valign="top">
                                        <td><strong><?php esc_html_e("Email", 'wpshare247.com'); ?></strong></td>
                                        <td>
                                            <?php $wpshare247_email = get_option('wpshare247_email');?>
                                            <input style="width:100%" placeholder="hotro@tbay.vn" type="text" id="<?php echo esc_html('wpshare247_email'); ?>" name="<?php echo esc_html('wpshare247_email'); ?>" value="<?php echo esc_attr($wpshare247_email); ?>" />
                                        </td>
                                    </tr>
                                    
                                    <!-- wpshare247_address -->
                                    <tr valign="top">
                                        <td><strong><?php esc_html_e("Địa chỉ", 'wpshare247.com'); ?></strong></td>
                                        <td>
                                            <?php $wpshare247_address = get_option('wpshare247_address');?>
                                            <input style="width:100%" placeholder="303/41 Tân Sơn Nhì, Tân Phú, Hồ Chí Minh" type="text" id="<?php echo esc_html('wpshare247_address'); ?>" name="<?php echo esc_html('wpshare247_address'); ?>" value="<?php echo esc_attr($wpshare247_address); ?>" />
                                        </td>
                                    </tr>
                                    
                                    <!-- Khai báo thêm các trường tiếp theo tại đây 'wpshare247_ten_field_moi_cua_ban' -->
                                    
                                    <tr valign="top">
                                        <td colspan="2"><?php submit_button(); ?></td>
                                    </tr>
                                </table>
                            </div>
                            
                            
                        </form>
                    </div>
                    <div style="clear:both;"></div>
                </div>
            </div>
        </div>
    </div>
    <?php
}

//2. Đăng ký các field cho Theme Option
add_action('admin_init', 'wpshare247_register_option_fields' );
function wpshare247_register_option_fields(){
    //Khai báo các trường dữ liệu cho theme option tại đây
    register_setting( WS247_GE_FIELDS_GROUP, 'wpshare247_hotline');
    register_setting( WS247_GE_FIELDS_GROUP, 'wpshare247_email');
    register_setting( WS247_GE_FIELDS_GROUP, 'wpshare247_address');
    //Copy: register_setting( WS247_GE_FIELDS_GROUP, 'wpshare247_ten_field_moi_cua_ban');
}

?>