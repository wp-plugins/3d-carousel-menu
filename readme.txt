=== 3D Carousel Menu FX ===
Contributors: flashxml
Tags: flash, xml, carousel menu
Requires at least: 2.8.0
Tested up to: 2.9.2
Stable tag: trunk

== Description ==

Maybe the most versatile Carousel on the web. Fully XML customizable, without using Flash. And it's free! This plugin helps you easily embed the 3D Carousel Menu from FlashXML.net into your posts and pages. It uses the SWFObject Javascript library that comes with your Wordpress installation for in browser embeds and it generates the HTML embed code for feeds.

= Main features =

You can integrate it in any website for free without even using Flash. Customizable width and height of the overall carousel, up to 1680 x 1050 pixels. You can have the carousel rotate in any angle. You can have a centered image or not. Customizable width and height for the images. All possible rotations behaviors and speeds are available. Optional image frames and reflection. Extensive roll over effects. The tooltip is HTML formatted. Lightbox can easily be integrated for this menu.

== Installation ==

Make sure your Wordpress version is equal or greater than 2.8 and your hosting provider is using PHP5.

1. Upload `3d-carousel-menu-fx.php` along with the `component` directory to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. In the post editor use the following tag to embed the 3D Carousel Menu: `[3d-carousel-menu-fx][/3d-carousel-menu-fx]`. Or add `<?php carouselmenufx_echo_embed_code(); ?>` in your templates
4. Go to [FlashXML.net](http://www.flashxml.net/ "Free Flash Components") and [customize your 3D Carousel Menu](http://www.flashxml.net/3d-carousel-menu.html "3D Carousel Menu") using the Live Demo. Generate the `settings.xml` text and use it to overwrite `component/settings.xml`
5. To use your own images, upload them to the `component/images` directory and update the `component/images.xml` file accordingly

= No Flash support text =

To support visitors without Adobe Flash, you can provide alternative textual content. From the post editor, add the text between `[3d-carousel-menu-fx]` and `[/3d-carousel-menu-fx]`. From the PHP files of your theme, add the text as *the first argument* of the `carouselmenufx_echo_embed_code()` function call.

= Additional settings file =

To embed the 3D Carousel Menu more than once, you will need another settings file and (probably) another set of images. Let's assume your new file is called **settings2.xml**. From the post editor, use the following code: `[3d-carousel-menu-fx settings="settings2.xml"][/3d-carousel-menu-fx]`. From the PHP files of your theme, add the file name as *the second argument* of the `carouselmenufx_echo_embed_code()` function call. If you use a separate set of images, don't forget to create a new XML file for that and update the `imagesXML` value in the settings file.