=== WP Gfycat ===
Contributors: leogg
Tags: gfycat,shortcode,video,image,gif,html5
Donate link: http://labs.monchito.net/wp-gfycat/
Requires at least: 3.9.1
Tested up to: 3.9.1
Stable tag: 0.9.1
License: GPLv2 or later
License URI: http://www.gnu.org/copyleft/gpl.html

A simple shortcode to add your gfycat videos into your website. 

== Description ==
A simple shortcode to add your gfycat videos into your website. This plugin will enable you to use shortcodes to insert your gfycat videos from gfycat.com. Based on [gfycat.js](https://github.com/gfycat/gfycat.js), an embed script to generate gfycat embeds on 3rd party websites by gfycat.com.

= WP Gfycat options =

* `data_id`: the gfycat id (required)
* `data_controls`: whether or not to include controls for pause/speed/etc (default: true)
* `data_title`: whether or not to include the title on hover over (default: true)
* `data_autoplay`: whether or not to automatically start playback when the page loads (default: false)
* `data_expand`: whether or not the video element should expand to fill the space of its container (default: false)

= Basic examples =

Automatically start playback:

`[gfycat data_id="BestYellowishElephantseal" data_autoplay=true]`

Automatically start playback and hide controls:

`[gfycat data_id="BestYellowishElephantseal" data_autoplay=true data_controls=false]`

== Installation ==
Automatic Installation

1. Download the current version of the WP Gfycat plugin.
1. Go to your WordPress Admin Panel and click on Plugins >> Add New >> Upload
1. Choose the downloaded package and Install and Activate the WP Gfycat plugin.

Manual Installation

1. Download the current version of the WP Gfycat plugin.
1. Unzip the fileand upload the wp-gfycat folder into the /wp-content/plugins directory of your WordPress installation.
1. Go to your Admin panel and activate the WP Gfycat plugin.

== Frequently Asked Questions ==

= How do I embed gfycats in my posts/pages/templates? =

1. Copy and paste the ID of a gfycat video anywhere in your posts or pages. (The ID is the part after http://gfycat.com/ in the URL. E.g. **MelodicShadowyChinchilla** in http://gfycat.com/MelodicShadowyChinchilla)
1. Select the text you just pasted and click the WP Gfycat button in the visual editor.
1. That's it! Save your post or preview it.

You can use enter manually the `[gfycat]` shortcode anywhere in your posts or pages:

`[gfycat data_id="BestYellowishElephantseal"]`

You can also display the gfycats outside your posts or pages using `do_shortcode`:

`<?php echo do_shortcode('[gfycat data_id="BestYellowishElephantseal"]'); ?>`

== Screenshots ==

== Changelog ==
= 0.9.1 =
* Added a wp-gfycat button to the TinyMCE editor.
= 0.9 =
* Initial release.
