=== MK to Lat ===
Contributors: Goce Ristov
Donate link: http://www.technoish.com/
Tags: convert, macedonian, macedonia, mk, cyrillic, characters, post title, ,latin, characters, create human-readable, sef, seo
Requires at least: 2.0.2
Tested up to: 2.5.1
Stable tag: 2.0

This plugin convert macedonian cyrillic characters in post titles into latin characters. You can use this plugin for creating human-readable links.

== Description ==

It converts the Macedonian cyrillic characters of the title posts into latin to build better, readable and Search Engine Friendly urls.

For example:

Lets say you want your wordpress to be in Macedonian. So you intall wordpress, install the Macedonian language files, translate the template menus and stuff to Macedonian, but after your first post with title: "Здраво Свет!" you noticed that the url of that post has become something like:

 http://www.mkwordpress.com/%C7%E4%F0%E0%E2%EE%20%D1%E2%E5%F2

instead of the good for eyes url:

 http://www.mkwordpress.com/zdravo-svet/


This happens because cyrillic characters are not supported in urls and so the code translates them into browser readable language. Now this has two main disadvantages:

1. It's not good for visitors, because it doesn't look human, and some may even think they have been hacked (yup, there still are paranoic people out there :) )
2. It is bad for search engines. Let say someone writes the phrase "zdravo svet" on google and if you have your urls set up with this plugin then you will rank higher.



== Installation ==

1. Upload `mk-to-lat.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Go to Options->Permalinks and change from Standard to Custom and in the field below add:

/%category%/%postname%/

Thats it. If you have any previous posts with cyrillic titles, you may have to edit and save them again for the url friendly urls to appear.


== Frequently Asked Questions ==

= Why wouldn't I simply use urls like /%C7%E4%F0%E0%E2%EE%20% in them? =

1. It's bad for your visitors. It's disrespectful and unprofessional because it doesn't look human. Some may even think they have been hacked or something(yup, there still are paranoic people out there :) )
2. It is bad for search engines. Let say someone writes the phrase "zdravo svet" on google and if you have your urls set up with this plugin then you will rank higher.

= Why did you made this plugin? =

Because I love my country Macedonia, MACEDONIA for the MACEDONIANS! :)

== Screenshots ==

1. Here is how to set it up: http://svn.wp-plugins.org/mk-to-lat/tags/screenshot-1.jpg
2. This is how it looks: http://svn.wp-plugins.org/mk-to-lat/tags/screenshot-2.jpg


== A brief Markdown Example ==

Ordered list:

* Build Search Engine Friendly URLS
* Don't scare other Macedonian citizens by providing long and unreadable urls


Here's a link to [Technoish](http://www.technoish.com/ "A site dedicated for helping people with any issues with technology you might have"). You can use the Contact Us button or the Forums to get in touch.

Pozdrav! :))
