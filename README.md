## Owl Carousel for WordPress
Contributors: Ted Geving
Donate link: tedgeving.com
Tags: owl carousel, jquery
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

WordPress plugin for Owl Carousel https://owlcarousel2.github.io/OwlCarousel2/

### Description

Nothing Fancy here, this plugin enqueues all of the scripts required to use Owl Carousel.

###  Installation

1. Upload the `owl-carousel` folder to the `/wp-content/plugins/` directory

2. Activate the plugin through the 'Plugins' menu in WordPress

3. Set up your HTML

```
<!-- Set up your HTML -->
<div class="owl-carousel">
  <div> Your Content </div>
  <div> Your Content </div>
  <div> Your Content </div>
  <div> Your Content </div>
  <div> Your Content </div>
  <div> Your Content </div>
  <div> Your Content </div>
</div>
```

4. Call the plugin.

```
$(document).ready(function(){
  $(".owl-carousel").owlCarousel();
});
```

Add the following code to the file located at:
`owl-carousel\public\js\owl-carousel-public.js`

**Examples:**
https://owlcarousel2.github.io/OwlCarousel2/demos/demos.html

###  Frequently Asked Questions

**Is there an administrative panel/interface?**

No.

**How do I use this plugin**

Add the necessary html and javascript to a page template. 
**See above**
