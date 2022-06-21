<?php
/*** Widget code for Advertisement ***/
class native_core_Advertisement extends WP_Widget {
	// constructor
	public function __construct() {
		 $widget_ops = array('description' => __( "A simple image advertisement widget", 'imithemes') );
        parent::__construct(false, $name = __( '(N) Advertisement','imithemes'), $widget_ops);
	}
    public function form($instance) {
        if( $instance) {
			 $title = esc_attr($instance['title']);
			 $image = $instance['image'];
                         $url = esc_attr($instance['url']);
		} else {
			 $title = '';
                         $image='';
                         $url='';
			
		}
        wp_enqueue_media();
        echo '<p>';
        echo '<label for="' . $this->get_field_id('title') . '">' . __('Title', 'imithemes') . ':</label>';
        echo '<input type="text" class="widefat" id="' . $this->get_field_id('title') . '"';
        echo ' value="' . $title . '" name="' . $this->get_field_name('title') . '"/>';
        echo '</p>';
        //image first
        echo '<p>';
        echo '<label for="' . $this->get_field_id('image') . '">' . __('Image', 'imithemes') . ': <span class="button select-about-image" id="' . $this->get_field_id('select-image') . '" style="cursor: pointer;">' . __('Select an image', 'imithemes') . '</span></label>';
        echo '<input type="hidden" class="widefat" id="' . $this->get_field_id('image') . '"';
        echo ' value="' .$image. '" name="' . $this->get_field_name('image') . '"/>';
        echo '</p>';
        $img = '';
        if (!empty($image)) {
            $src = wp_get_attachment_image_src($instance['image'], array(226, 400));
            $img = '<img src="' . $src[0] . '" style="max-width: 226px;" />';
        }
        echo '<div id="' . $this->get_field_id('display-image') . '">' . $img . '</div>';
      
        echo '<p>';
        echo '<label for="' . $this->get_field_id('url') . '">' . __('URL', 'imithemes') . ':</label>';
        echo '<input type="text" class="widefat" id="' . $this->get_field_id('url') . '"';
        echo ' value="' . $url . '" name="' . $this->get_field_name('url') . '"/>';
        echo '</p>';
    }
    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = strip_tags($new_instance['title']);
        $instance['image'] = $new_instance['image'];
        $instance['url'] = $new_instance['url'];
        return $instance;
    }
    public function widget($args, $instance) {
        echo ''.$args['before_widget'];
        if(!empty($instance['title'])){
        echo ''.$args['before_title'] . $instance['title'] . $args['after_title'];
       }
       if(!empty($instance['url'])){
        echo '<a href ="'.$instance['url'].'">'.wp_get_attachment_image($instance['image'], array(250, 500)).'</a>';
       }
      
        echo ''.$args['after_widget'];
    }
}
// register widget
add_action( 'widgets_init', function(){
	register_widget( 'native_core_Advertisement' );
});
function native_core_add_media_scripts() {
    wp_enqueue_script('about-me-media-uploader', get_template_directory_uri() . '/assets/js/media-uploader.js');
}
add_action('admin_enqueue_scripts', 'native_core_add_media_scripts');