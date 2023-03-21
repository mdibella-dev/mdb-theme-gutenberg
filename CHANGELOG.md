# Changelog

*New / Improve / Bugfix*


## 1.5.0
Released: 21-02-2023

* New: THEME_URI
* Improve: Rename /assets/src/scss to /assets/src/css
* Improve: Move backend patches to patches.php
* Improve: Tune the spaces in .publikationsliste
* Improve: Tune the spaces in .teaserblock
* Improve: LinkedIn-Link
* Improve: Change text domain
* Improve: Replace text domain constant with text domain string
* Improve: Change order of symbols in navbar
* Bugfix: Namespace issues
* Bugfix: Fatal error when using theme's consts


## 1.4.0
Released: 02-01-2023

* New: Namespace (#25)
* Improve: Neutralize .php-class side effect in admin pages (#31)
* Improve: Replace flat button style with navigation-faux-anchor style (see #20)
* Improve: Remove unnecessary whitespaces
* Improve: Remove dev mode switch
* Improve: Add a more dynamic line-height in #primary, #secondary
* Improve: Add more consistency in #navbar (#20)
* Bugfix: Flexbox causes too much gap between #primary, #secondary (#14)
* Bugfix: Fix missing row gap in tags list
* Bugfix: Missing custom block styles in backend (#27)


### 1.3.0
Released: 08-12-2022

* New: Support for separator block (hr element)
* Improve: Styles for single-publication-details
* Improve: Remove clamping div at single-related-posts.html
* Improve: Remove hr styling
* Improve: Remove unused embed block variations
* Improve: Remove unused separator block variations
* Improve: Remove arrow symbol next to external links (#14, #3)
* Improve: Change anchor styling (#18)
* Improve: Make marco-404.png monochrome
* Improve: Replace "Enhance" with "Improve" (#19)
* Improve: Add more consistency in links and buttons (see #20)
* Improve: Add desaturated teaser thumbnails
* Improve: Add rounded border on images
* Bugfix: Indention in list element (#17)
* Bugfix: Add minimal gap between flat buttons in navbar (#12)
* Bugfix: Remove additional padding-left in #primary, #secondary (#23)


### 1.2.0
Released: 12-11-2022

* New: New custom variables via theme.json
* New: menu-item-* filter
* New: Part single-related-posts
* Improve: Gap in #primary
* Improve: Documentation style in php-files
* Improve: Replace group block with spacer block in navbar.html
* Improve: Do the pattern rendering in 404.php in the same way like slideout.php
* Bugfix: Teaser image is too big in mobile view (#10)
* Bugfix: Navbar: Too much gap between navbar buttons in mobile view (#9)
* Bugfix: Navbar takes too much height in mobile view (#8)
* Bugfix: Slideout: Can't access all menu items in mobile view (#11)
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
* Bugfix: SVG-buttons in Chrome (#2)
* Bugfix: Version numbers
* Bugfix: Wrongful styling in classic editor
* Bugfix: Wrongful resizing of the classic editor
* Bugfix: Disable a feature of download-monitor: progress meter when click on download link
* Bugfix: Paragraph spacing in Borlabs Cookiebox
* Bugfix: publication-title forces cover to break out from container when content is too long (#6)
* Bugfix: Slideout: Visual identitation of the content-wrapper (#7)



### 1.0.0
Released: 30-07-2022

* Initial commit
