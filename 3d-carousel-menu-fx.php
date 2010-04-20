<?php
/*
Plugin Name: 3D Carousel Menu FX
Plugin URI: http://www.flashxml.net/3d-carousel-menu.html
Description: Maybe the most versatile Carousel on the web. Fully XML customizable, without using Flash. And it's free! This plugin helps you easily embed the 3D Carousel Menu from FlashXML.net into your posts and pages. It uses the SWFObject Javascript library that comes with your Wordpress installation for in browser embeds and it generates the HTML embed code for feeds.
Version: 0.1
Author: FlashXML.net
Author URI: http://www.flashxml.net/
License: GPL2
*/

	$carouselmenufx_params = array(
		'count'	=> 0, // number of FX 3D Carousel Menu embeds
	);

	function carouselmenufx_get_embed_code($carouselmenufx_attributes) {
		$plugin_dir = basename(dirname(__FILE__));
		global $carouselmenufx_params;
		$carouselmenufx_params['count']++;

		$settings_file_name = !empty($carouselmenufx_attributes[2]) ? $carouselmenufx_attributes[2] : 'settings.xml';
		$settings_file_path = WP_PLUGIN_DIR."/{$plugin_dir}/component/$settings_file_name";

		if (file_exists($settings_file_path)) {
			$data = simplexml_load_file($settings_file_path);
			$width = (int)$data->General_Properties->carouselWidth->attributes()->value;
			$height = (int)$data->General_Properties->carouselHeight->attributes()->value;
		}

		if ($width == 0 || $height == 0) {
			return '';
		}

		$swf_embed = array(
			'width' => $width,
			'height' => $height,
			'text' => trim($carouselmenufx_attributes[3]),
			'component_path' => WP_PLUGIN_URL."/{$plugin_dir}/component/",
			'swf_name' => 'carousel.swf',
		);
		$swf_embed['swf_path'] = $swf_embed['component_path'].$swf_embed['swf_name'];

		if (!is_feed()) {
			$embed_code = '<div id="3d-carousel-menu-fx'.$carouselmenufx_params['count'].'">'.$swf_embed['text'].'</div>';
			$embed_code .= '<script type="text/javascript">';
			$embed_code .= "swfobject.embedSWF('{$swf_embed['swf_path']}', '3d-carousel-menu-fx{$carouselmenufx_params['count']}', '{$swf_embed['width']}', '{$swf_embed['height']}', '9.0.0.0', '', { folderPath: '{$swf_embed['component_path']}'".($settings_file_name != 'settings.xml' ? ", settingsXML: '{$settings_file_name}'" : '')." }, { scale: 'noscale', salign: 'tl', wmode: 'transparent', allowScriptAccess: 'sameDomain', allowFullScreen: true }, {});";
			$embed_code.= '</script>';
		} else {
			$embed_code = '<object width="'.$swf_embed['width'].'" height="'.$swf_embed['height'].'">';
			$embed_code .= '<param name="movie" value="'.$swf_embed['swf_path'].'"></param>';
			$embed_code .= '<param name="scale" value="noscale"></param>';
			$embed_code .= '<param name="salign" value="tl"></param>';
			$embed_code .= '<param name="wmode" value="transparent"></param>';
			$embed_code .= '<param name="allowScriptAccess" value="sameDomain"></param>';
			$embed_code .= '<param name="allowFullScreen" value="true"></param>';
			$embed_code .= '<param name="sameDomain" value="true"></param>';
			$embed_code .= '<param name="flashvars" value="folderPath='.$swf_embed['component_path'].($settings_file_name != 'settings.xml' ? '&settingsXML='.$settings_file_name : '').'"></param>';
			$embed_code .= '<embed type="application/x-shockwave-flash" width="'.$swf_embed['width'].'" height="'.$swf_embed['height'].'" src="'.$swf_embed['swf_path'].'" scale="noscale" salign="tl" wmode="transparent" allowScriptAccess="sameDomain" allowFullScreen="true" flashvars="folderPath='.$swf_embed['component_path'].($settings_file_name != 'settings.xml' ? '&settingsXML='.$settings_file_name : '').'"';
			$embed_code .= '></embed>';
			$embed_code .= '</object>';
		}

		return $embed_code;
	}

	function carouselmenufx_filter_content($content) {
		return preg_replace_callback('|\[3d-carousel-menu-fx\s*(settings="([^\]]+)")?\s*\](.*)\[/3d-carousel-menu-fx\]|i', 'carouselmenufx_get_embed_code', $content);
	}

	function carouselmenufx_echo_embed_code($settings_xml_path, $div_text = '') {
		echo carouselmenufx_get_embed_code(array(2 => $settings_xml_path, 3 => $div_text));
	}

	function carouselmenufx_load_swfobject_lib() {
		wp_enqueue_script('swfobject');
	}

	add_filter('the_content', 'carouselmenufx_filter_content');
	add_action('init', 'carouselmenufx_load_swfobject_lib');

?>