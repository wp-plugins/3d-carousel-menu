=== 3D Carousel Menu FX ===
Contributors: flashxml
Tags: images, photos, widget, post, plugin, posts, sidebar, free, flash, carousel, 3d, rotate, angle, xml, text, tooltip, gallery, image, images, portfolio, auto, scroll, button, preloader, thumb, radius, speed, center, vertical, horizontal, as3, as2, lightbox, frames
Requires at least: 2.8.0
Tested up to: 3.0
Stable tag: trunk

== Description ==

Maybe the most versatile Carousel on the web. Fully XML customizable, without using Flash. And it's free!

= Main features =

You can integrate it in any website for free without even using Flash. Customizable width and height of the overall carousel, up to 1680 x 1050 pixels. You can have the carousel rotate in any angle. You can have a centered image or not. Customizable width and height for the images. All possible rotations behaviors and speeds are available. Optional image frames and reflection. Extensive roll over effects. The tooltip is HTML formatted.

== Installation ==

Make sure your Wordpress version is greater than 2.8 and your hosting provider is using PHP5.

1. [Download](http://www.flashxml.net/free/download/3d-carousel-menu.zip "3D Carousel Menu FX") or [purchase](http://www.flashxml.net/3d-carousel-menu.html#swmi-license "3D Carousel Menu FX") the 3D Carousel Menu FX Flash component
2. Create a new folder inside your `/wp-content/` directory called `flashxml/3d-carousel-menu-fx` and copy the content of the archive to this folder
3. Install [the plugin](http://downloads.wordpress.org/plugin/3d-carousel-menu-fx.zip "3D Carousel Menu FX Plugin") or upload the `3d-carousel-menu-fx` folder along with all its files to `/wp-content/plugins/` directory
4. Activate the plugin from the **Plugins** tab in **WordPress Dashboard**
5. Go to **3D Carousel Menu FX** from the **Settings** tab and update the path in case you used a different one
6. In the post editor use the following tag to embed the 3D Carousel Menu FX: `[3d-carousel-menu-fx][/3d-carousel-menu-fx]`. You could also add `<?php carouselmenufx_echo_embed_code(); ?>` in the PHP file of your theme
7. Go to [FlashXML.net](http://www.flashxml.net/ "Free Flash Components") and [customize your 3D Carousel Menu FX](http://www.flashxml.net/3d-carousel-menu.html "3D Carousel Menu FX") using the Live Demo. Generate the `settings.xml` text and use it to overwrite `flashxml/3d-carousel-menu-fx/settings.xml`
8. To use your own images, upload them to the `flashxml/3d-carousel-menu-fx/images` folder and update the `flashxml/3d-carousel-menu-fx/images.xml` file accordingly

= Additional settings file =

To embed the 3D Carousel Menu FX more than once, you will need another settings file and (probably) another set of images. Let's assume your new file is called **settings2.xml**. From the post editor, use the following code: `[3d-carousel-menu-fx settings="settings2.xml"][/3d-carousel-menu-fx]`. From the PHP files of your theme, add the file name as *the first argument* of the `carouselmenufx_echo_embed_code()` function call. If you use a separate set of images, don't forget to create a new XML file for that and update the value in the settings file.

= No Flash support text =

To support visitors without Adobe Flash, you can provide alternative textual content. From the post editor, add the text between `[3d-carousel-menu-fx]` and `[/3d-carousel-menu-fx]`. From the PHP files of your theme, add the text as *the second argument* of the `carouselmenufx_echo_embed_code()` function call.

= If you have PHP4 =

To make it work if you're using PHP4, add the following code `[3d-carousel-menu-fx width="600" height="300"][/3d-carousel-menu-fx]` in the post editor. From the PHP files of your theme, add the width and height as *the third and fourth argument* of the `carouselmenufx_echo_embed_code()` function call. Don't forget to provide your own width and height values, since 600 and 300 are just examples.

== Screenshots ==

1. The Live Demo on [FlashXML.net](http://www.flashxml.net/3d-carousel-menu.html "3D Carousel Menu FX") is the utility that helps easily customize your 3D Carousel Menu FX to fit all your needs.