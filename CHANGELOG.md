# Changelog

*New / Improve / Bugfix*

<br>

### 2.0.0
Released: 16-06-2023

* New: Add template for single blog posts
* New: Add portfolio style to cover block
* New: Add theme.json element section in basic.scss
* New: Add hash symbol to publication keywords
* New: Add better wp-block-heading spacing
* Improve: Enhance changelog with links to issues
* Improve: Add better CSS support for plugin wp-typography
* Improve: Remove support for download-container, download-links
* Improve: Remove unused colors, gradients ([#28](https://github.com/mdibella-dev/mdb-theme-fse/issues/28)) and refine HSL values
* Improve: Change navbar max-width to 80rem
* Improve: Rename sass:both to sass:all
* Improve: Remove unused anchor-icon code
* Improve: Remove uihelper mixins
* Improve: Remove .is-style-section, .is-style-section-large, .publication-section-title
* Improve: Remove image size modification for marco-01
* Improve: Remove secondary menu
* Improve: Add theme.json spacing to loadmore object
* Improve: Improved display of the teaser list
* Bugfix: Tags buttons are displayed the same way in block editor and frontend
* Bugfix: Tags button list is displayed the same way in block editor and frontend
* Bugfix: Add missing z-index to scrollup
* Bugfix: Fix 1rem setting
* Bugfix: Fix ScrollUp shows up in the slideout menu ([#43](https://github.com/mdibella-dev/mdb-theme-fse/issues/43))


### 1.6.0
Released: 01-04-2023

* New: Add package.json with SASS scripts
* New: Support for wp-block-code
* New: Extract changelog from README.md
* New: Prevent visible infusion of dlm-xlr-classes (plugin Download Monitor)
* Improve: Minor changes to figcaption-tag (wp-block-image)
* Improve: Add more rounder elements
* Improve: Replace Inconsolata with RobotoSlab
* Improve: Update Borlabs Cookiebox ([#26](https://github.com/mdibella-dev/mdb-theme-fse/issues/26))
* Improve: Set font-display of RobotoSlab to block
* Improve: Better hyphens in headings (via plugin)
* Improve: Rename block pattern '404' to '404-image' to clearify its purpose
* Improve: Change default padding of standard buttons
* Improve: Make theme compatible to mdb-theme-blocks-two 1.1.2
* Improve: Move shortcodes folder to plugins folder and rename it (plugin mdb-theme-blocks)
* Improve: Update CSS documentation
* Bugfix: Google PageSpeed Insights: "Links can be crawled" test (SEO)
* Bugfix: Google PageSpeed Insights: "Links must have discernible text" test (accessibility)
* Bugfix: Google PageSpeed Insights: Reduce CLS on #marco-01 image (Core Web Vitals)
* Bugfix: Remove hyphens=none from headings (causes overflows)
* Bugfix: Remove ARIA tags from template parts, as they lead to invalid block code in Gutenberg
* Bugfix: Change THEME_URI to THEME_DIR when loading textdomain


### 1.5.0
Released: 21-02-2023

* New: THEME_URI
* Improve: Rename /assets/src/scss to /assets/src/css
* Improve: Move backend patches to patches.php
* Improve: Tune the spaces in .publikationsliste
* Improve: Tune the spaces in .teaserblock ([#21](https://github.com/mdibella-dev/mdb-theme-fse/issues/21)
* Improve: LinkedIn-Link
* Improve: Change text domain
* Improve: Replace text domain constant with text domain string
* Improve: Change order of symbols in navbar
* Bugfix: Namespace issues
* Bugfix: Fatal error when using theme's consts


### 1.4.0
Released: 02-01-2023

* New: Namespace ([#25](https://github.com/mdibella-dev/mdb-theme-fse/issues/25))
* Improve: Neutralize .php-class side effect in admin pages ([#31](https://github.com/mdibella-dev/mdb-theme-fse/issues/31))
* Improve: Replace flat button style with navigation-faux-anchor style (see [#20](https://github.com/mdibella-dev/mdb-theme-fse/issues/20))
* Improve: Remove unnecessary whitespaces
* Improve: Remove dev mode switch
* Improve: Add a more dynamic line-height in #primary, #secondary
* Improve: Add more consistency in #navbar ([#20](https://github.com/mdibella-dev/mdb-theme-fse/issues/20))
* Bugfix: Flexbox causes too much gap between #primary, #secondary ([#14](https://github.com/mdibella-dev/mdb-theme-fse/issues/14))
* Bugfix: Fix missing row gap in tags list
* Bugfix: Missing custom block styles in backend ([#27](https://github.com/mdibella-dev/mdb-theme-fse/issues/27))


### 1.3.0
Released: 08-12-2022

* New: Support for separator block (hr element)
* Improve: Styles for single-publication-details
* Improve: Remove clamping div at single-related-posts.html
* Improve: Remove hr styling
* Improve: Remove unused embed block variations
* Improve: Remove unused separator block variations
* Improve: Remove arrow symbol next to external links ([#14](https://github.com/mdibella-dev/mdb-theme-fse/issues/14), [#3](https://github.com/mdibella-dev/mdb-theme-fse/issues/3))
* Improve: Change anchor styling ([#18](https://github.com/mdibella-dev/mdb-theme-fse/issues/18))
* Improve: Make marco-404.png monochrome
* Improve: Replace "Enhance" with "Improve" ([#19](https://github.com/mdibella-dev/mdb-theme-fse/issues/19))
* Improve: Add more consistency in links and buttons (see [#20](https://github.com/mdibella-dev/mdb-theme-fse/issues/20))
* Improve: Add desaturated teaser thumbnails
* Improve: Add rounded border on images
* Bugfix: Indention in list element ([#17](https://github.com/mdibella-dev/mdb-theme-fse/issues/17))
* Bugfix: Add minimal gap between flat buttons in navbar ([#12](https://github.com/mdibella-dev/mdb-theme-fse/issues/12))
* Bugfix: Remove additional padding-left in #primary, #secondary ([#23](https://github.com/mdibella-dev/mdb-theme-fse/issues/23))


### 1.2.0
Released: 12-11-2022

* New: New custom variables via theme.json
* New: menu-item-* filter
* New: Part single-related-posts
* Improve: Gap in #primary
* Improve: Documentation style in php-files
* Improve: Replace group block with spacer block in navbar.html
* Improve: Do the pattern rendering in 404.php in the same way like slideout.php
* Bugfix: Teaser image is too big in mobile view ([#10](https://github.com/mdibella-dev/mdb-theme-fse/issues/10))
* Bugfix: Navbar: Too much gap between navbar buttons in mobile view ([#9](https://github.com/mdibella-dev/mdb-theme-fse/issues/9))
* Bugfix: Navbar takes too much height in mobile view ([#8](https://github.com/mdibella-dev/mdb-theme-fse/issues/8))
* Bugfix: Slideout: Can't access all menu items in mobile view ([#11](https://github.com/mdibella-dev/mdb-theme-fse/issues/11))
* Bugfix: Path to 404 image in block pattern


### 1.1.0
Released: 27-10-2022

* New: Base font-size and gap
* New: .edit-post-visual-editor__post-title-wrapper hidden
* Improve: Make 'bold' bolder
* Improve: New border style for download-container
* Improve: Make var names more consistent
* Improve: No hyphens in headlines when breakpoint=medium
* Improve: Styling of the block single-publication-details (as a result of the changes in mdb-theme-blocks)
* Improve: Styling of the block download-container (minimal)
* Improve: Move fonts folder to /assets
* Improve: .teaser-images are now 100% instead of 175px
* Improve: Remove font-sizes from theme.json
* Improve: Remove Folder assets/build/images and its images
* Improve: Remove favicon.php
* Bugfix: Wrong spacing in .content class
* Bugfix: SVG-buttons in Chrome ([#2](https://github.com/mdibella-dev/mdb-theme-fse/issues/2))
* Bugfix: Version numbers
* Bugfix: Wrongful styling in classic editor
* Bugfix: Wrongful resizing of the classic editor
* Bugfix: Disable a feature of download-monitor: progress meter when click on download link
* Bugfix: Paragraph spacing in Borlabs Cookiebox
* Bugfix: publication-title forces cover to break out from container when content is too long ([#6](https://github.com/mdibella-dev/mdb-theme-fse/issues/6))
* Bugfix: Slideout: Visual identitation of the content-wrapper ([#7](https://github.com/mdibella-dev/mdb-theme-fse/issues/7))



### 1.0.0
Released: 30-07-2022

* Initial commit

For changes prior to this version see the [changelog](https://github.com/mdibella-dev/mdb-theme/blob/main/README.md) of the predecessor of this theme (**mdb-theme**).
