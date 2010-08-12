=== 3D Carousel Menu FX ===
Contributors: flashxml
Tags: images, photos, widget, post, plugin, posts, sidebar, free, flash, carousel, 3d, rotate, angle, xml, text, tooltip, gallery, image, images, portfolio, auto, scroll, button, preloader, thumb, radius, speed, center, vertical, horizontal, as3, as2, lightbox, frames
Requires at least: 2.8.0
Tested up to: 3.0.1
Stable tag: trunk

== Description ==

Maybe the most versatile Carousel on the web. Fully XML customizable, without using Flash. And it's free!

= Main features =

You can integrate it in any website for free without even using Flash. Customizable width and height of the overall carousel, up to 1680 x 1050 pixels. You can have the carousel rotate in any angle. You can have a centered image or not. Customizable width and height for the images. All possible rotations behaviors and speeds are available. Optional image frames and reflection. Extensive roll over effects. The tooltip is HTML formatted.

== Installation ==

Make sure your Wordpress version is greater than 2.8 and your hosting provider is using PHP5.

1. There are two files to download: [WordPress Plugin](http://downloads.wordpress.org/plugin/3d-carousel-menu.zip "3D Carousel Menu FX Plugin") (that you have to install and activate) & [Free archive](http://www.flashxml.net/free/download/3d-carousel-menu.zip "3D Carousel Menu FX")
2. Create a new folder inside your **wp-content** folder called **flashxml**, inside this folder create a new one called **3d-carousel-menu-fx** and copy the content of the **free archive** there
3. If you copied the **free archive** to a location different than the one above, go to **3D Carousel Menu FX** from the **Settings** tab in your **WordPress Dashboard** and update the path accordingly
4. Add `[3d-carousel-menu-fx][/3d-carousel-menu-fx]` where you want the Flash to show up in your post/page
5. If you want to make the 3D Carousel Menu FX part of your theme, edit the template files and add `<?php carouselmenufx_echo_embed_code(); ?>` where you want it to show up
6. Go to [FlashXML.net](http://www.flashxml.net/ "Free Flash Components") and [customize your 3D Carousel Menu FX](http://www.flashxml.net/3d-carousel-menu.html "3D Carousel Menu FX") using the Live Demo. Generate the `settings.xml` text and use it to overwrite `wp-content/flashxml/3d-carousel-menu-fx/settings.xml`
7. To use your own images, upload them to `wp-content/flashxml/3d-carousel-menu-fx/images/` and update the `wp-content/flashxml/3d-carousel-menu-fx/images.xml` file accordingly

= Additional settings file =

To embed the 3D Carousel Menu FX more than once, you will need another settings file and (probably) another set of images. Let's assume your new file is called `settings2.xml`. Add `[3d-carousel-menu-fx settings="settings2.xml"][/3d-carousel-menu-fx]` where you want the Flash to show up in your post/page. If you made the Flash part of your theme, add the file name as **the first argument** of the `carouselmenufx_echo_embed_code()` function call (for example `<?php carouselmenufx_echo_embed_code("settings2.xml"); ?>`).

= No Flash support text =

To support visitors without Adobe Flash Player, you can provide alternative content by adding the text between `[3d-carousel-menu-fx]` and `[/3d-carousel-menu-fx]`. If you made the Flash part of your theme, add the text as **the second argument** of the `carouselmenufx_echo_embed_code()` function call (for example `<?php carouselmenufx_echo_embed_code("","Alternative content"); ?>`).

= If you have PHP4 =

To make it work with PHP4, add `[3d-carousel-menu-fx width="600" height="300"][/3d-carousel-menu-fx]` where you want the Flash to show up in your post/page. If you made the Flash part of your theme, add the width and height as **the third and fourth argument** of the `carouselmenufx_echo_embed_code()` function call. Don't forget to provide your own width and height values, since 600 and 300 are just examples.

= Getting rid of the FlashXML.net label =

To remove the FlashXML.net label from the top-left corner you'll need to buy the [commercial archive](http://www.flashxml.net/3d-carousel-menu.html#swmi-license "3D Carousel Menu FX"). Once you'll do that, simply use the SWF file from the commercial archive to overwrite the SWF file from the `wp-content/flashxml/3d-carousel-menu-fx/` folder.

== Screenshots ==

1. The Live Demo on [FlashXML.net](http://www.flashxml.net/3d-carousel-menu.html "3D Carousel Menu FX") is the utility that helps easily customize your 3D Carousel Menu FX to fit all your needs.