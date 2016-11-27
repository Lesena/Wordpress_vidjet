<?php
/*
Plugin Name: Первый виджет
Description: Простейший текстовый виджет
Plugin URI: http://webformyself.com
Author: Андрей
Author URI: http://webformyself.com
*/

add_action( 'widgets_init', 'wfm_first_widget' );

function wfm_first_widget(){
	register_widget( 'WFM_Widget' );
}

class WFM_Widget extends WP_Widget{

	function __construct(){
		/*parent::__construct(
			// ID, name, args (description)
			'wfm_fw',
			'Мой первый виджет',
			array( 'description' => 'Описание виджета' )
		);*/
		$args = array(
			'name' => 'Мой первый виджет',
			'description' => 'Описание виджета',
			'classname' => 'wfm-test'
		);
		parent::__construct('wfm_fw', '', $args);
	}

	function widget(){

	}

	function form($instance){
		extract($instance);
		?>
		
		<p>
			<label for="<?php echo $this->get_field_id('title') ?>">Заголовок:</label>
			<input type="text" name="<?php echo $this->get_field_name('title') ?>" id="<?php echo $this->get_field_id('title') ?>" value="<?php if( isset($title) ) echo esc_attr( $title ); ?>" class="widefat">
		</p>

		<?php
	}

}