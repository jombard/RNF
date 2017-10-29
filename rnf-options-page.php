<?php

class RnfSettingsPage {
	private $options;

	public function __construct() {
		add_action('admin_menu', array($this, 'add_plugin_page'));
		add_action('admin_init', array($this, 'page_init'));
	}

	public function add_plugin_page() {
		add_options_page('Custom Options', 'My Settings', 'manage_options', 'my-settings-admin', array($this, 'create_admin_page'));
	}

	public function create_admin_page() {
		$this->options = get_option('my_option_name');
		?>
		<div class="wrap">
			<h1>My Settings</h1>
			<form method="post" action="options.php">
			<?php
				settings_fields('my_option_group');
				do_settings_sections('my-settings-admin');
				submit_button();
			?>
			</form>
		</div>
		<?php
	}

	public function page_init() {
		register_setting('my_option_group', 'my_option_name', array($this, 'sanitize'));
		add_settings_section('setting_section_id', 'My Custom Settings', array($this, 'print_section_info'), 'my-setting-admin');
		add_settings_field('id_number', 'ID Number', array($this, 'id_number_callback'), 'my-setting-admin', 'setting_section_id');
		add_settings_field('title', 'Title', array($this, 'title_callback'), 'my-setting-admin', 'setting_section_id');
	}

	public function sanitize($input) {
		$new_input = array();
		if(isset($input['id_number']))
			$new_input['id_number'] = absint($input['id_number']);

		if(isset($input['title']))
			$new_input['title'] = sanitize_text_field($input['title']);

		return $new_input;
	}

	public function print_section_info() {
		print 'Enter your settings below:';
	}

	public function id_number_callback() {
		printf('<input type="text" id="id_number" name="my_option_name[id_number]" value="%s" />', isset($this->options['title']) ? esc_attr($this->options['title']) : '');
	}

	public function title_callback() {
		printf('<input type="text" id="title" name="my_option_name[title]" value="%s" />', isset($this->options['title']) ? esc_attr($this->options['title']) : '');
	}
}

if(is_admin()) {
	$my_settings_page = new RnfSettingsPage();
}


?>