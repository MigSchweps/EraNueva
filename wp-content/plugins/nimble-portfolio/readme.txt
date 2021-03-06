=== Filterable jQuery Portfolio/Gallery ===
Contributors: nimble3,mamirulamin,mubeenkhan
Donate link: http://www.nimble3.com
Tags: portfolio, gallery, media gallery, filterable portfolio, jquery portfolio, sortable portfolio, portfolio pagination, template based portfolio, quick sand, quicksand, CSS3 transformation, multiple portfolios, portfolio templates, prettyphoto, lightbox, prettyphoto lightbox, media gallery, prettyphoto gallery, lightbox gallery, multiple prettyphoto galleries, multiple lightbox galleries
Requires at least: 3.3
Tested up to: 3.8
Stable tag: 1.3.2
License: GPLv2 or later

A powerful portfolio/gallery plugin, highly suitable to showcase your portfolio/images/videos/documents and group them nicely under filterable tabs.
== Description ==

<h3>Nimble Portfolio</h3>
Using this free plugin you can transform your portfolio in to a cutting edge jQuery powered gallery that lets you feature and sort your work like a pro.

= Plugin Features =

1. Custom post types for portfolio items.
2. Youtube, Vimeo, Quicktime video support.
3. Built-in PrettyPhoto gallery for image, video and <strong>PDF</strong> preview.
4. Easy categorization and jQuery sort feature.

= Quick User Guide =

1. Add portfolio item types under `Nimble Portfolio -> Item Type`, such as web, mobile, graphics e.t.c.
2. Add new portfolio items using custom post type under `Nimble Portfolio -> Add Portfolio Item`. Add item title, description e.t.c.
3. Upload and set featured image from the far right bottom box.
4. Specify full-size Image URL or Video URL (youtube, vimeo) in the input field `Image/Video URL` on the left. You can also use `URL from Media Library` button to select the URL of full-size image from Media Library.
5. Specify a live URL for your project in the input field `Portfolio URL`.

= Detailed User Guide =

Please download here http://www.nimble3.com/wp-content/uploads/2013/09/Nimble-Portfolio-Plugin-User-Guide.pdf

= Shortcode =

Our free plugin comes with short code support and by default it uses the 3 column round template, so the following two short codes will entail the same result.
`[nimble-portfolio]` 
and 
`[nimble-portfolio template="3colround"]`

You can see from the above shortcode that the later part of the code refers to the use of template.

<strong>Additional Templates</strong>

Fluid columns - round template - variation 1
`[nimble-portfolio template="round-1"]`

Fluid columns - square template - variation 1
`[nimble-portfolio template="rect-1"]`

Fluid columns - round template - variation 2
`[nimble-portfolio template="round-2"]`

Fluid columns - square template - variation 2
`[nimble-portfolio template="rect-2"]`

= PHP Code =

`echo nimble_portfolio()` 
or
`nimble_portfolio_show()`

= Demo =

Free: http://nimble3.com/demo/nimble-portfolio-free/

Premium: http://www.nimble3.com/portfolio-demo/

= Sample Import file for Portfolio Items =

http://nimble3.com/demo/nimble-portfolio-free/portfolio-items.xml

= Premium Version =

With Premium features such as:

1. Category Order Sorting.
2. Advanced Item Order Sorting (on date, title, sort order number, randomize e.t.c.)
3. Display Selected Types and Manage Multiple Portfolios.
4. Shortcode Generator.
5. Pagination Support for Large Portfolios.
6. Configurable Separate Gallery for each Item.
7. Making use of Quick Sand Plugin and Configurable CSS3 Transformation.
8. More templates. (including Responsive template for responsive themes)

To learn more please visit http://www.nimble3.com/shop/premium-nimble-portfolio-plugin/

= Upgrade Notice =

When you upgrade, the following problems may arise.

1. If you have customized the template using the previous version, then your template may be lost. Therefore, take out a backup of your template files that you can re-deploy after upgrade.

== Installation ==

Use this guide http://www.nimble3.com/wp-content/uploads/2013/09/Nimble-Portfolio-Plugin-User-Guide.pdf for detailed Installation instructions.

== Frequently Asked Questions ==

Please use Support tab OR use this link http://wordpress.org/support/plugin/nimble-portfolio

== Screenshots ==

1. Nimble Portfolio backend
2. Nimble Portfolio frontend

== Changelog ==

= 09 Sep 2013 =

1.3.2

rect-1 template CSS fix

= 09 Sep 2013 =

1.3.1

1. PDF support for lightbox gallery.
2. New Template variation for Round template. template code: 'round-2'
3. New Template variation for Rectangular template. template code: 'rect-2'

= 05 Aug 2013 =

1.3.0

1. New Template. template code: 'round-1'
2. New Template. template code: 'rect-1'
3. Better thumbnail generation.
4. flush_rewrite_rules() on plugin activation to take care of 404 error on single portfolio post.
5. Taxonomy slug changed to 'portfolio-type'

= 06 May 2013 =

1.2.5

1. Added `URL from Media Library` button to select full size Image URL much easier from your site's Media Library.

= 05 Mar 2013 =

1.2.4

1. Fixed - Warning: Illegal string offset 'template' issue (http://wordpress.org/support/topic/issues-5)
2. Fixed - After filter, gallery showing all images

= 04 Mar 2013 =

1.2.3

1. Fixed - Error on above thumbnails on page (http://wordpress.org/support/topic/error-on-above-thumbnails-on-page)

= 05 Feb 2013 =

1.2.2

1. Fixed - Jetpack compatibility issue (http://wordpress.org/support/topic/jetpack-compatibility-issue)
2. Fixed - Two menu items for 'Item Type' (http://wordpress.org/support/topic/plugin-nimble-portfolio-observation-on-install)
3. Fixed - No "Nimble Portfolio" tab on Dashboard/Admin Menu (http://wordpress.org/support/topic/no-nimble-tab-on-dashboard)

= 12 Oct 2012 =

1.2.1

1. A small bug that was printing the shortcode out, instead of replacing the shortcode.
2. Function to use in php code i.e. `nimble_portfolio_show()`.

= 31 Aug 2012 =

1.2.0

1. A small bug that was hiding the item types.
2. A lot of people were asking for PrettyPhoto so now plugin uses PrettyPhoto instead of fancybox for gallery.

= 25 Aug 2012 = 

1.1.0

1. A small bug that did not allow selection of featured images from library files has now been fixed. You can select from the images available in your library for portfolio items.
2. Another bug that stopped sorting of portfolio category names that contained special characters has been resolved. Now category names with special characters can be sorted. This is useful if you want to create a price-range sort feature using $ or £ etc in your category names.

= 29 Jun 2012 =

1.0.0 – First release

== Upgrade Notice ==

When you upgrade, the following problems may arise.

1. If you have customized the template using the previous version, then your template may be lost. Therefore, take out a backup of your template files that you can re-deploy after upgrade.