<?php
/*
  Plugin Name: Text2Anchor
  Plugin URI: https://github.com/yoshida-san/text2anchor
  Description: Change text to anchor
  Version: 1.0.1
  Author: Satoshi Yoshida
  Author URI: https://github.com/yoshida-san/text2anchor
  License: GPLv2 or later
 */
/*  Copyright 2015 Satoshi Yoshida (email : yos.3104@gmail.com)

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License, version 2, as
  published by the Free Software Foundation.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program; if not, write to the Free Software
  Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

class Text2AnchorSettings {

	function __construct() {
		add_action('admin_menu', array($this, 'add_pages'));
	}

	function add_pages() {
		add_submenu_page('plugins.php', __('Text2Anchor', 'text2anchor'), __('Text2Anchor', 'text2anchor'), 'level_8', __FILE__, array($this, 'setting_view'));
	}

	function setting_view() {
		$post_settings = filter_input(INPUT_POST, "t2a_settings", FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
		if (!is_null($post_settings)) {
			check_admin_referer('t2a_settings');
			update_option('t2a_settings', $post_settings);
			?><div class="updated fade"><p><strong><?php _e('Settings saved.', 'text2anchor'); ?></strong></p></div><?php
		}
		?>
		<div class="bss-admin-settings-wrapper" style="padding: 20px;">
			<h1><?php _e('Text2Anchor Settings', 'text2anchor'); ?></h1>
			<form action="" method="post" style="padding-left: 10px;">
				<?php
				wp_nonce_field('t2a_settings');
				$settings = get_option('t2a_settings');
				$t2a_target = isset($settings['target']) ? esc_html($settings['target']) : 'all';
				$t2a_1_text = isset($settings['t2a_data_1']['text']) ? esc_html($settings['t2a_data_1']['text']) : '';
				$t2a_1_anchor = isset($settings['t2a_data_1']['anchor']) ? esc_html($settings['t2a_data_1']['anchor']) : '';
				$t2a_1_classes = isset($settings['t2a_data_1']['classes']) ? esc_html($settings['t2a_data_1']['classes']) : '';
				$t2a_2_text = isset($settings['t2a_data_2']['text']) ? esc_html($settings['t2a_data_2']['text']) : '';
				$t2a_2_anchor = isset($settings['t2a_data_2']['anchor']) ? esc_html($settings['t2a_data_2']['anchor']) : '';
				$t2a_2_classes = isset($settings['t2a_data_2']['classes']) ? esc_html($settings['t2a_data_2']['classes']) : '';
				$t2a_3_text = isset($settings['t2a_data_3']['text']) ? esc_html($settings['t2a_data_3']['text']) : '';
				$t2a_3_anchor = isset($settings['t2a_data_3']['anchor']) ? esc_html($settings['t2a_data_3']['anchor']) : '';
				$t2a_3_classes = isset($settings['t2a_data_3']['classes']) ? esc_html($settings['t2a_data_3']['classes']) : '';
				$t2a_4_text = isset($settings['t2a_data_4']['text']) ? esc_html($settings['t2a_data_4']['text']) : '';
				$t2a_4_anchor = isset($settings['t2a_data_4']['anchor']) ? esc_html($settings['t2a_data_4']['anchor']) : '';
				$t2a_4_classes = isset($settings['t2a_data_4']['classes']) ? esc_html($settings['t2a_data_4']['classes']) : '';
				$t2a_5_text = isset($settings['t2a_data_5']['text']) ? esc_html($settings['t2a_data_5']['text']) : '';
				$t2a_5_anchor = isset($settings['t2a_data_5']['anchor']) ? esc_html($settings['t2a_data_5']['anchor']) : '';
				$t2a_5_classes = isset($settings['t2a_data_5']['classes']) ? esc_html($settings['t2a_data_5']['classes']) : '';
				$t2a_6_text = isset($settings['t2a_data_6']['text']) ? esc_html($settings['t2a_data_6']['text']) : '';
				$t2a_6_anchor = isset($settings['t2a_data_6']['anchor']) ? esc_html($settings['t2a_data_6']['anchor']) : '';
				$t2a_6_classes = isset($settings['t2a_data_6']['classes']) ? esc_html($settings['t2a_data_6']['classes']) : '';
				$t2a_7_text = isset($settings['t2a_data_7']['text']) ? esc_html($settings['t2a_data_7']['text']) : '';
				$t2a_7_anchor = isset($settings['t2a_data_7']['anchor']) ? esc_html($settings['t2a_data_7']['anchor']) : '';
				$t2a_7_classes = isset($settings['t2a_data_7']['classes']) ? esc_html($settings['t2a_data_7']['classes']) : '';
				$t2a_8_text = isset($settings['t2a_data_8']['text']) ? esc_html($settings['t2a_data_8']['text']) : '';
				$t2a_8_anchor = isset($settings['t2a_data_8']['anchor']) ? esc_html($settings['t2a_data_8']['anchor']) : '';
				$t2a_8_classes = isset($settings['t2a_data_8']['classes']) ? esc_html($settings['t2a_data_8']['classes']) : '';
				$t2a_9_text = isset($settings['t2a_data_9']['text']) ? esc_html($settings['t2a_data_9']['text']) : '';
				$t2a_9_anchor = isset($settings['t2a_data_9']['anchor']) ? esc_html($settings['t2a_data_9']['anchor']) : '';
				$t2a_9_classes = isset($settings['t2a_data_9']['classes']) ? esc_html($settings['t2a_data_9']['classes']) : '';
				$t2a_10_text = isset($settings['t2a_data_10']['text']) ? esc_html($settings['t2a_data_10']['text']) : '';
				$t2a_10_anchor = isset($settings['t2a_data_10']['anchor']) ? esc_html($settings['t2a_data_10']['anchor']) : '';
				$t2a_10_classes = isset($settings['t2a_data_10']['classes']) ? esc_html($settings['t2a_data_10']['classes']) : '';
				$t2a_11_text = isset($settings['t2a_data_11']['text']) ? esc_html($settings['t2a_data_11']['text']) : '';
				$t2a_11_anchor = isset($settings['t2a_data_11']['anchor']) ? esc_html($settings['t2a_data_11']['anchor']) : '';
				$t2a_11_classes = isset($settings['t2a_data_11']['classes']) ? esc_html($settings['t2a_data_11']['classes']) : '';
				$t2a_12_text = isset($settings['t2a_data_12']['text']) ? esc_html($settings['t2a_data_12']['text']) : '';
				$t2a_12_anchor = isset($settings['t2a_data_12']['anchor']) ? esc_html($settings['t2a_data_12']['anchor']) : '';
				$t2a_12_classes = isset($settings['t2a_data_12']['classes']) ? esc_html($settings['t2a_data_12']['classes']) : '';
				$t2a_13_text = isset($settings['t2a_data_13']['text']) ? esc_html($settings['t2a_data_13']['text']) : '';
				$t2a_13_anchor = isset($settings['t2a_data_13']['anchor']) ? esc_html($settings['t2a_data_13']['anchor']) : '';
				$t2a_13_classes = isset($settings['t2a_data_13']['classes']) ? esc_html($settings['t2a_data_13']['classes']) : '';
				$t2a_14_text = isset($settings['t2a_data_14']['text']) ? esc_html($settings['t2a_data_14']['text']) : '';
				$t2a_14_anchor = isset($settings['t2a_data_14']['anchor']) ? esc_html($settings['t2a_data_14']['anchor']) : '';
				$t2a_14_classes = isset($settings['t2a_data_14']['classes']) ? esc_html($settings['t2a_data_14']['classes']) : '';
				$t2a_15_text = isset($settings['t2a_data_15']['text']) ? esc_html($settings['t2a_data_15']['text']) : '';
				$t2a_15_anchor = isset($settings['t2a_data_15']['anchor']) ? esc_html($settings['t2a_data_15']['anchor']) : '';
				$t2a_15_classes = isset($settings['t2a_data_15']['classes']) ? esc_html($settings['t2a_data_15']['classes']) : '';
				$t2a_16_text = isset($settings['t2a_data_16']['text']) ? esc_html($settings['t2a_data_16']['text']) : '';
				$t2a_16_anchor = isset($settings['t2a_data_16']['anchor']) ? esc_html($settings['t2a_data_16']['anchor']) : '';
				$t2a_16_classes = isset($settings['t2a_data_16']['classes']) ? esc_html($settings['t2a_data_16']['classes']) : '';
				$t2a_17_text = isset($settings['t2a_data_17']['text']) ? esc_html($settings['t2a_data_17']['text']) : '';
				$t2a_17_anchor = isset($settings['t2a_data_17']['anchor']) ? esc_html($settings['t2a_data_17']['anchor']) : '';
				$t2a_17_classes = isset($settings['t2a_data_17']['classes']) ? esc_html($settings['t2a_data_17']['classes']) : '';
				$t2a_18_text = isset($settings['t2a_data_18']['text']) ? esc_html($settings['t2a_data_18']['text']) : '';
				$t2a_18_anchor = isset($settings['t2a_data_18']['anchor']) ? esc_html($settings['t2a_data_18']['anchor']) : '';
				$t2a_18_classes = isset($settings['t2a_data_18']['classes']) ? esc_html($settings['t2a_data_18']['classes']) : '';
				$t2a_19_text = isset($settings['t2a_data_19']['text']) ? esc_html($settings['t2a_data_19']['text']) : '';
				$t2a_19_anchor = isset($settings['t2a_data_19']['anchor']) ? esc_html($settings['t2a_data_19']['anchor']) : '';
				$t2a_19_classes = isset($settings['t2a_data_19']['classes']) ? esc_html($settings['t2a_data_19']['classes']) : '';
				$t2a_20_text = isset($settings['t2a_data_20']['text']) ? esc_html($settings['t2a_data_20']['text']) : '';
				$t2a_20_anchor = isset($settings['t2a_data_20']['anchor']) ? esc_html($settings['t2a_data_20']['anchor']) : '';
				$t2a_20_classes = isset($settings['t2a_data_20']['classes']) ? esc_html($settings['t2a_data_20']['classes']) : '';
				?>

				<h2 style="margin: 20px 0 5px 0;"><?php _e('Target', 'text2anchor'); ?></h2>
				<select id="beek_smooth_scroller_arrow_type" name="t2a_settings[target]">
					<option<?php ($t2a_target == 'all') ? print ' selected ' : print ''; ?> value="all">All</option>
					<option<?php ($t2a_target == 'page') ? print ' selected ' : print ''; ?> value="page">Page only</option>
					<option<?php ($t2a_target == 'single') ? print ' selected ' : print ''; ?> value="single">Single only</option>
				</select>
				
				<h2 style="margin: 20px 0 5px 0;"><?php _e('Mapping Table', 'text2anchor'); ?></h2>
				<table>
					<tr><th>* Text</th><th>* Anchor(URL)</th><th>Anchor Classes</th></tr>
					<tr><td><input type="text" name="t2a_settings[t2a_data_1][text]" value="<?php echo $t2a_1_text; ?>"></td><td><input type="text" name="t2a_settings[t2a_data_1][anchor]" value="<?php echo $t2a_1_anchor; ?>"></td><td><input type="text" name="t2a_settings[t2a_data_1][classes]" value="<?php echo $t2a_1_classes; ?>"></td></tr>
					<tr><td><input type="text" name="t2a_settings[t2a_data_2][text]" value="<?php echo $t2a_2_text; ?>"></td><td><input type="text" name="t2a_settings[t2a_data_2][anchor]" value="<?php echo $t2a_2_anchor; ?>"></td><td><input type="text" name="t2a_settings[t2a_data_2][classes]" value="<?php echo $t2a_2_classes; ?>"></td></tr>
					<tr><td><input type="text" name="t2a_settings[t2a_data_3][text]" value="<?php echo $t2a_3_text; ?>"></td><td><input type="text" name="t2a_settings[t2a_data_3][anchor]" value="<?php echo $t2a_3_anchor; ?>"></td><td><input type="text" name="t2a_settings[t2a_data_3][classes]" value="<?php echo $t2a_3_classes; ?>"></td></tr>
					<tr><td><input type="text" name="t2a_settings[t2a_data_4][text]" value="<?php echo $t2a_4_text; ?>"></td><td><input type="text" name="t2a_settings[t2a_data_4][anchor]" value="<?php echo $t2a_4_anchor; ?>"></td><td><input type="text" name="t2a_settings[t2a_data_4][classes]" value="<?php echo $t2a_4_classes; ?>"></td></tr>
					<tr><td><input type="text" name="t2a_settings[t2a_data_5][text]" value="<?php echo $t2a_5_text; ?>"></td><td><input type="text" name="t2a_settings[t2a_data_5][anchor]" value="<?php echo $t2a_5_anchor; ?>"></td><td><input type="text" name="t2a_settings[t2a_data_5][classes]" value="<?php echo $t2a_5_classes; ?>"></td></tr>
					<tr><td><input type="text" name="t2a_settings[t2a_data_6][text]" value="<?php echo $t2a_6_text; ?>"></td><td><input type="text" name="t2a_settings[t2a_data_6][anchor]" value="<?php echo $t2a_6_anchor; ?>"></td><td><input type="text" name="t2a_settings[t2a_data_6][classes]" value="<?php echo $t2a_6_classes; ?>"></td></tr>
					<tr><td><input type="text" name="t2a_settings[t2a_data_7][text]" value="<?php echo $t2a_7_text; ?>"></td><td><input type="text" name="t2a_settings[t2a_data_7][anchor]" value="<?php echo $t2a_7_anchor; ?>"></td><td><input type="text" name="t2a_settings[t2a_data_7][classes]" value="<?php echo $t2a_7_classes; ?>"></td></tr>
					<tr><td><input type="text" name="t2a_settings[t2a_data_8][text]" value="<?php echo $t2a_8_text; ?>"></td><td><input type="text" name="t2a_settings[t2a_data_8][anchor]" value="<?php echo $t2a_8_anchor; ?>"></td><td><input type="text" name="t2a_settings[t2a_data_8][classes]" value="<?php echo $t2a_8_classes; ?>"></td></tr>
					<tr><td><input type="text" name="t2a_settings[t2a_data_9][text]" value="<?php echo $t2a_9_text; ?>"></td><td><input type="text" name="t2a_settings[t2a_data_9][anchor]" value="<?php echo $t2a_9_anchor; ?>"></td><td><input type="text" name="t2a_settings[t2a_data_9][classes]" value="<?php echo $t2a_9_classes; ?>"></td></tr>
					<tr><td><input type="text" name="t2a_settings[t2a_data_10][text]" value="<?php echo $t2a_10_text; ?>"></td><td><input type="text" name="t2a_settings[t2a_data_10][anchor]" value="<?php echo $t2a_10_anchor; ?>"></td><td><input type="text" name="t2a_settings[t2a_data_10][classes]" value="<?php echo $t2a_10_classes; ?>"></td></tr>
					<tr><td><input type="text" name="t2a_settings[t2a_data_11][text]" value="<?php echo $t2a_11_text; ?>"></td><td><input type="text" name="t2a_settings[t2a_data_11][anchor]" value="<?php echo $t2a_11_anchor; ?>"></td><td><input type="text" name="t2a_settings[t2a_data_11][classes]" value="<?php echo $t2a_11_classes; ?>"></td></tr>
					<tr><td><input type="text" name="t2a_settings[t2a_data_12][text]" value="<?php echo $t2a_12_text; ?>"></td><td><input type="text" name="t2a_settings[t2a_data_12][anchor]" value="<?php echo $t2a_12_anchor; ?>"></td><td><input type="text" name="t2a_settings[t2a_data_12][classes]" value="<?php echo $t2a_12_classes; ?>"></td></tr>
					<tr><td><input type="text" name="t2a_settings[t2a_data_13][text]" value="<?php echo $t2a_13_text; ?>"></td><td><input type="text" name="t2a_settings[t2a_data_13][anchor]" value="<?php echo $t2a_13_anchor; ?>"></td><td><input type="text" name="t2a_settings[t2a_data_13][classes]" value="<?php echo $t2a_13_classes; ?>"></td></tr>
					<tr><td><input type="text" name="t2a_settings[t2a_data_14][text]" value="<?php echo $t2a_14_text; ?>"></td><td><input type="text" name="t2a_settings[t2a_data_14][anchor]" value="<?php echo $t2a_14_anchor; ?>"></td><td><input type="text" name="t2a_settings[t2a_data_14][classes]" value="<?php echo $t2a_14_classes; ?>"></td></tr>
					<tr><td><input type="text" name="t2a_settings[t2a_data_15][text]" value="<?php echo $t2a_15_text; ?>"></td><td><input type="text" name="t2a_settings[t2a_data_15][anchor]" value="<?php echo $t2a_15_anchor; ?>"></td><td><input type="text" name="t2a_settings[t2a_data_15][classes]" value="<?php echo $t2a_15_classes; ?>"></td></tr>
					<tr><td><input type="text" name="t2a_settings[t2a_data_16][text]" value="<?php echo $t2a_16_text; ?>"></td><td><input type="text" name="t2a_settings[t2a_data_16][anchor]" value="<?php echo $t2a_16_anchor; ?>"></td><td><input type="text" name="t2a_settings[t2a_data_16][classes]" value="<?php echo $t2a_16_classes; ?>"></td></tr>
					<tr><td><input type="text" name="t2a_settings[t2a_data_17][text]" value="<?php echo $t2a_17_text; ?>"></td><td><input type="text" name="t2a_settings[t2a_data_17][anchor]" value="<?php echo $t2a_17_anchor; ?>"></td><td><input type="text" name="t2a_settings[t2a_data_17][classes]" value="<?php echo $t2a_17_classes; ?>"></td></tr>
					<tr><td><input type="text" name="t2a_settings[t2a_data_18][text]" value="<?php echo $t2a_18_text; ?>"></td><td><input type="text" name="t2a_settings[t2a_data_18][anchor]" value="<?php echo $t2a_18_anchor; ?>"></td><td><input type="text" name="t2a_settings[t2a_data_18][classes]" value="<?php echo $t2a_18_classes; ?>"></td></tr>
					<tr><td><input type="text" name="t2a_settings[t2a_data_19][text]" value="<?php echo $t2a_19_text; ?>"></td><td><input type="text" name="t2a_settings[t2a_data_19][anchor]" value="<?php echo $t2a_19_anchor; ?>"></td><td><input type="text" name="t2a_settings[t2a_data_19][classes]" value="<?php echo $t2a_19_classes; ?>"></td></tr>
					<tr><td><input type="text" name="t2a_settings[t2a_data_20][text]" value="<?php echo $t2a_20_text; ?>"></td><td><input type="text" name="t2a_settings[t2a_data_20][anchor]" value="<?php echo $t2a_20_anchor; ?>"></td><td><input type="text" name="t2a_settings[t2a_data_20][classes]" value="<?php echo $t2a_20_classes; ?>"></td></tr>
				</table>

				<p class="submit"><input type="submit" name="Submit" class="button-primary" value="<?php _e('Save', 'text2anchor'); ?>"></p>
			</form>
		</div>
		<?php
	}

}

$t2a_settings = new Text2AnchorSettings();

function load_text2anchor_textdomain() {
	load_plugin_textdomain('text2anchor', FALSE, basename(dirname(__FILE__)) . '/languages');
}

add_action('plugins_loaded', 'load_text2anchor_textdomain');

function t2a_exec($the_content) {
	$option = get_option('t2a_settings');
	switch ($option['target']) {
		case 'page':
			if(!is_page()) {
				return $the_content;
			}
			break;
		case 'single':
			if(!is_single()) {
				return $the_content;
			}
			break;
	}
	for ($id = 1; $id <= 20; $id++) {
		$the_content = str_replace($option['t2a_data_' . $id]['text'], t2a_create_anchor($option, $id), $the_content);
	}
	return $the_content;
}

add_filter('the_content', 't2a_exec');

function t2a_create_anchor($option, $id) {
	return '<a class="' . $option['t2a_data_' . $id]['classes'] . '" href="' . $option['t2a_data_' . $id]['anchor'] . '">' . $option['t2a_data_' . $id]['text'] . '</a>';
}

