# Changelog

_New / Improve / Bugfix_


### Latest changes to the main branch

- Improve: Remove .is-style-welcome
- Improve: Move button styles to blocks/button.scss
- Fix: Missing left/right padding in heading area
- Fix: Hyphens setting on headings
- Fix: line break in buttons


<br>

### 4.0.0
Released: 01-09-2024

- New: Backport script and style registering and enqueuing procedure from ARTlyris project
- New: Add conventional desktop navigation
- New: Add blockgap support
- New: Add pattern "related-posts"
- New: Add template "portfolio"
- New: Add template "page-no-title"
- Improve: Update theme.json to v3 (minimum requirement: WP 6.6)
- Improve: Modify the font sizes
- Improve: Increase the left and right minimum spacing
- Improve: Rename scripts and styles
- Improve: Convert slideout part into pattern, allows translation
- Improve: Update development scripts
- Improve: Make slideout mobile only
- Improve: Move hamburger icon to the right side; change slideout direction
- Improve: Move a lot of stylesheet settings to the theme.json
- Improve: Remove extra margin from core/post-title
- Improve: Remove extra margin from .loadmore.teasers
- Fix: Reduce the large extra padding in block editor styles wrapper


### 3.3.1
Released: 05-03-2024

- New: Add margin control class to move 1st main element behind header
- New: Add unicode ranges to the font definition
- New: Add CSS code related to Code Syntax Block
- New: Add block styles for core/columns (icon & text, showcase)
- Improve: Convert Noto Serif Display to WOFF2
- Improve: Reduce root padding (left/right) to 1rem
- Improve: Spacing in slideout menu
- Improve: Replace Roboto Slab font with Inter extra bold
- Improve: Add Noto Serif Display font for small notes
- Improve: Adjust smaller font sizes
- Improve: Add better slideout hover fx
- Improve: Minor fixes to vortragsliste
- Bugfix: issue #91


### 3.3.0
Released: 04-02-2024

- New: Add subversion to styles/scripts to break caching if necessary
- New: Provide simple fading fx
- Improve: Change hover style on slideout
- Improve: Convert jQuery JS to Vanilla JS / issue [#88](https://github.com/mdibella-dev/mdb-theme-fse/issues/88)
- Improve: Remove single-publication.html / issue [#85](https://github.com/mdibella-dev/mdb-theme-fse/issues/85)
- Improve: Restructure frontend.js
- Improve: Change default fontsize of headline elements to large
- Improve: Add more space between slideout labels and menu items
- Improve: Increase distance between footer and main content
- Improve: Strip unused code from spinkit library
- Improve: Remove SCSS color vars
- Improve: Remove remove_post_classes filter (obsolete)
- Improve: Remove remove_menu_classes filter (obsolete)
- Improve: Change spacing on core/post-title
- Improve: Remove fadein after click on slideout menu item
- Improve: Remove slash separator in page navigation
- Bugfix: issue [#87](https://github.com/mdibella-dev/mdb-theme-fse/issues/87)


### 3.2.1
Released: 23-12-2023

- New: Add retina display support
- Improve: Reset REM base to 16px
- Improve: Rename responsive mixins to on_...() to emphasize the use as handler functions
- Improve: Move several settings from CSS to theme.json
- Improve: Code cleanups (issue #39)
- Improve: Enhance slideout menu font size
- Improve: Adjust the label font size in slideout menu
- Improve: Remove block-style "portfolio" (core/cover)
- Improve: Remove block-style "transparent" (core/image, issue #44)
- Improve: Add default fontsize to headline elements
- Bugfix: UX behavior of image buttons (issue #79)
- Bugfix: Alignment of figcaption when part of a lightbox container
- Bugfix: Distorted presentation in the consent text of embed-privacy
- Minor fix on 404 page


### 3.2.0
Released: 26-11-2023

- New: Rework of the site's main structural elements
- New: Add block style "Fusion" to core/cover (experimental, issue [#71](https://github.com/mdibella-dev/mdb-theme-fse/issues/71))
- New: Add color to the scrollbar (issue [#75](https://github.com/mdibella-dev/mdb-theme-fse/issues/75))
- Improve: Reduce font size in block style pagenavigation (core/navigation)
- Improve: Add dynamic height adjustment to navbar (issue [#72](https://github.com/mdibella-dev/mdb-theme-fse/issues/72))
- Improve: Add more background colors
- Improve: Reintroduce footer gradient
- Improve: Add more text shadow to headings
- Improve: Change appearance of the slideout
- Improve: Remove obsolete CSS vars
- Improve: Reinstate secondary font type in slideout navigation
- Improve: Remove scrollup from navbar (placement makes no sense anymore)
- Improve: Revamp the slideout menu and remove pattern
- Improve: Remove support for classic menu (primary menu)
- Improve: Remove header fix (obsolete)
- Improve: Add name to navbar
- Fix: Slideout content doesn't disappear on small screen heights
- Fix: The site editor creates a large gap where the slideout is implemented in the code
- Fix: Broken scroll to function


### 3.1.1
Released: 19-09-2023

- New: Introduce a new naming scheme for site components
- New: Change color setup ([#64](https://github.com/mdibella-dev/mdb-theme-fse/issues/64))
- Improve: Remove footer gradient
- Improve: Remove grayscale on teaser images
- Improve: Minor changes to tag.html and teaser-loadmore
- Improve: Use frontend style as editor style
- Improve: Code style: Change array notation
- Improve: Code style: Change clamping style
- Improve: Code style: Use WP standard for control structures
- Improve: Move site component files to a new position.
- Improve: Add exception handling in block-patterns.php
- Bugfix: Use correct gap on core/media-text block when stacked on mobile
- Bugfix: Add proper color setting for text selections


### 3.1.0
Released: 15-07-2023

- New: Add a minified block-styles.js
- New: Add WordPress profile
- New: Add footer gradient
- New: Add temporary fix for block gap in multi column divs
- Improve: Set rem base to 18px
- Improve: Add more space to mdb-theme-blocks/post-terms
- Improve: Separate HTML code from the slideout block pattern (now in slideout template part) and rename the block pattern to primary
- Improve: Make structure and selectors of site components more consistent
- Improve: Change selectors of navbar buttons from id to class name
- Improve: Add buttons to the slideout; remove scroll-down-button
- Improve: Remove 'Page Navigation' (obsolete)
- Improve: Replace #primary with .slideout-primary (code consistency)
- Improve: Remove support for plugin Borlabs Cookies
- Bugfix: Fix path to block-styles.min.js
- Bugfix: Fix header centering ([#63](https://github.com/mdibella-dev/mdb-theme-fse/issues/63))
- Bugfix: Set root padding top/bottom in root-container (block editor)


### 3.0.0
Released: 01-07-2023

- New: Restore the ability of the navbar to become a sidebar on larger displays ([#48](https://github.com/mdibella-dev/mdb-theme-fse/issues/48))
- New: Add symbols for site up/down and home ([#48](https://github.com/mdibella-dev/mdb-theme-fse/issues/48))
- New: Add support for plugin [Embed Privacy](https://de.wordpress.org/plugins/embed-privacy/)
- New: Add Gutenberg's margin control ([#41](https://github.com/mdibella-dev/mdb-theme-fse/issues/41))
- New: Add a footer which contains the buttons to the social media profiles, links to the imprint and to the mail address ([#48](https://github.com/mdibella-dev/mdb-theme-fse/issues/48))
- Improve: Improve the spacing between consecutive headings
- Improve: Base size of 1rem is increased from 16px to 18px on a trial basis
- Improve: Remove template-part single-related-post and template single-blog-post
- Improve: Remove support for .content class ([#40](https://github.com/mdibella-dev/mdb-theme-fse/issues/40))
- Improve: Captions do not go beyond the normal content width even with wide images and videos
- Improve: Remove 404 image block pattern
- Improve: Simplify the inclusion of SVG in CSS
- Improve: Remove extra padding on primary
- Improve: Font faces are loaded by theme.json ([#58](https://github.com/mdibella-dev/mdb-theme-fse/issues/58))
- Improve: Remove normalize.scss ([#47](https://github.com/mdibella-dev/mdb-theme-fse/issues/47))
- Improve: Add better support of root padding top/bottom
- Improve: Replace header tag on navbar with div tag ([#54](https://github.com/mdibella-dev/mdb-theme-fse/issues/54))
- Improve: Change font family slugs to primary, secondary ([#60](https://github.com/mdibella-dev/mdb-theme-fse/issues/60))
- Improve: Remove --wp--custom--base--font-size
- Improve: Remove SASS vars $teaserblock--teaser-gap, $teaserblock--image-width
- Bugfix: 404 image is not displayed in the block editor ([#45](https://github.com/mdibella-dev/mdb-theme-fse/issues/45))
- Bugfix: ScrollToID misses the anchor


### 2.0.0
Released: 16-06-2023

- New: Add template for single blog posts
- New: Add portfolio style to cover block
- New: Add theme.json element section in basic.scss
- New: Add hash symbol to publication keywords
- New: Add better wp-block-heading spacing
- Improve: Enhance changelog with links to issues
- Improve: Add better CSS support for plugin wp-typography
- Improve: Remove support for download-container, download-links
- Improve: Remove unused colors, gradients ([#28](https://github.com/mdibella-dev/mdb-theme-fse/issues/28)) and refine HSL values
- Improve: Change navbar max-width to 80rem
- Improve: Rename sass:both to sass:all
- Improve: Remove unused anchor-icon code
- Improve: Remove uihelper mixins
- Improve: Remove .is-style-section, .is-style-section-large, .publication-section-title
- Improve: Remove image size modification for marco-01
- Improve: Remove secondary menu
- Improve: Add theme.json spacing to loadmore object
- Improve: Improved display of the teaser list
- Bugfix: Tags buttons are displayed the same way in block editor and frontend
- Bugfix: Tags button list is displayed the same way in block editor and frontend
- Bugfix: Add missing z-index to scrollup
- Bugfix: Fix 1rem setting
- Bugfix: Fix ScrollUp shows up in the slideout menu ([#43](https://github.com/mdibella-dev/mdb-theme-fse/issues/43))


### 1.6.0
Released: 01-04-2023

- New: Add package.json with SASS scripts
- New: Support for wp-block-code
- New: Extract changelog from README.md
- New: Prevent visible infusion of dlm-xlr-classes (plugin Download Monitor)
- Improve: Minor changes to figcaption-tag (wp-block-image)
- Improve: Add more rounder elements
- Improve: Replace Inconsolata with RobotoSlab
- Improve: Update Borlabs Cookiebox ([#26](https://github.com/mdibella-dev/mdb-theme-fse/issues/26))
- Improve: Set font-display of RobotoSlab to block
- Improve: Better hyphens in headings (via plugin)
- Improve: Rename block pattern '404' to '404-image' to clearify its purpose
- Improve: Change default padding of standard buttons
- Improve: Make theme compatible to mdb-theme-blocks-two 1.1.2
- Improve: Move shortcodes folder to plugins folder and rename it (plugin mdb-theme-blocks)
- Improve: Update CSS documentation
- Bugfix: Google PageSpeed Insights: "Links can be crawled" test (SEO)
- Bugfix: Google PageSpeed Insights: "Links must have discernible text" test (accessibility)
- Bugfix: Google PageSpeed Insights: Reduce CLS on #marco-01 image (Core Web Vitals)
- Bugfix: Remove hyphens=none from headings (causes overflows)
- Bugfix: Remove ARIA tags from template parts, as they lead to invalid block code in Gutenberg
- Bugfix: Change THEME_URI to THEME_DIR when loading textdomain


### 1.5.0
Released: 21-02-2023

- New: THEME_URI
- Improve: Rename /assets/src/scss to /assets/src/css
- Improve: Move backend patches to patches.php
- Improve: Tune the spaces in .publikationsliste
- Improve: Tune the spaces in .teaserblock ([#21](https://github.com/mdibella-dev/mdb-theme-fse/issues/21)
- Improve: LinkedIn-Link
- Improve: Change text domain
- Improve: Replace text domain constant with text domain string
- Improve: Change order of symbols in navbar
- Bugfix: Namespace issues
- Bugfix: Fatal error when using theme's consts


### 1.4.0
Released: 02-01-2023

- New: Namespace ([#25](https://github.com/mdibella-dev/mdb-theme-fse/issues/25))
- Improve: Neutralize .php-class side effect in admin pages ([#31](https://github.com/mdibella-dev/mdb-theme-fse/issues/31))
- Improve: Replace flat button style with navigation-faux-anchor style (see [#20](https://github.com/mdibella-dev/mdb-theme-fse/issues/20))
- Improve: Remove unnecessary whitespaces
- Improve: Remove dev mode switch
- Improve: Add a more dynamic line-height in #primary, #secondary
- Improve: Add more consistency in #navbar ([#20](https://github.com/mdibella-dev/mdb-theme-fse/issues/20))
- Bugfix: Flexbox causes too much gap between #primary, #secondary ([#14](https://github.com/mdibella-dev/mdb-theme-fse/issues/14))
- Bugfix: Fix missing row gap in tags list
- Bugfix: Missing custom block styles in backend ([#27](https://github.com/mdibella-dev/mdb-theme-fse/issues/27))


### 1.3.0
Released: 08-12-2022

- New: Support for separator block (hr element)
- Improve: Styles for single-publication-details
- Improve: Remove clamping div at single-related-posts.html
- Improve: Remove hr styling
- Improve: Remove unused embed block variations
- Improve: Remove unused separator block variations
- Improve: Remove arrow symbol next to external links ([#14](https://github.com/mdibella-dev/mdb-theme-fse/issues/14), [#3](https://github.com/mdibella-dev/mdb-theme-fse/issues/3))
- Improve: Change anchor styling ([#18](https://github.com/mdibella-dev/mdb-theme-fse/issues/18))
- Improve: Make marco-404.png monochrome
- Improve: Replace "Enhance" with "Improve" ([#19](https://github.com/mdibella-dev/mdb-theme-fse/issues/19))
- Improve: Add more consistency in links and buttons (see [#20](https://github.com/mdibella-dev/mdb-theme-fse/issues/20))
- Improve: Add desaturated teaser thumbnails
- Improve: Add rounded border on images
- Bugfix: Indention in list element ([#17](https://github.com/mdibella-dev/mdb-theme-fse/issues/17))
- Bugfix: Add minimal gap between flat buttons in navbar ([#12](https://github.com/mdibella-dev/mdb-theme-fse/issues/12))
- Bugfix: Remove additional padding-left in #primary, #secondary ([#23](https://github.com/mdibella-dev/mdb-theme-fse/issues/23))


### 1.2.0
Released: 12-11-2022

- New: New custom variables via theme.json
- New: menu-item-- filter
- New: Part single-related-posts
- Improve: Gap in #primary
- Improve: Documentation style in php-files
- Improve: Replace group block with spacer block in navbar.html
- Improve: Do the pattern rendering in 404.php in the same way like slideout.php
- Bugfix: Teaser image is too big in mobile view ([#10](https://github.com/mdibella-dev/mdb-theme-fse/issues/10))
- Bugfix: Navbar: Too much gap between navbar buttons in mobile view ([#9](https://github.com/mdibella-dev/mdb-theme-fse/issues/9))
- Bugfix: Navbar takes too much height in mobile view ([#8](https://github.com/mdibella-dev/mdb-theme-fse/issues/8))
- Bugfix: Slideout: Can't access all menu items in mobile view ([#11](https://github.com/mdibella-dev/mdb-theme-fse/issues/11))
- Bugfix: Path to 404 image in block pattern


### 1.1.0
Released: 27-10-2022

- New: Base font-size and gap
- New: .edit-post-visual-editor__post-title-wrapper hidden
- Improve: Make 'bold' bolder
- Improve: New border style for download-container
- Improve: Make var names more consistent
- Improve: No hyphens in headlines when breakpoint=medium
- Improve: Styling of the block single-publication-details (as a result of the changes in mdb-theme-blocks)
- Improve: Styling of the block download-container (minimal)
- Improve: Move fonts folder to /assets
- Improve: .teaser-images are now 100% instead of 175px
- Improve: Remove font-sizes from theme.json
- Improve: Remove Folder assets/build/images and its images
- Improve: Remove favicon.php
- Bugfix: Wrong spacing in .content class
- Bugfix: SVG-buttons in Chrome ([#2](https://github.com/mdibella-dev/mdb-theme-fse/issues/2))
- Bugfix: Version numbers
- Bugfix: Wrongful styling in classic editor
- Bugfix: Wrongful resizing of the classic editor
- Bugfix: Disable a feature of download-monitor: progress meter when click on download link
- Bugfix: Paragraph spacing in Borlabs Cookiebox
- Bugfix: publication-title forces cover to break out from container when content is too long ([#6](https://github.com/mdibella-dev/mdb-theme-fse/issues/6))
- Bugfix: Slideout: Visual identitation of the content-wrapper ([#7](https://github.com/mdibella-dev/mdb-theme-fse/issues/7))



### 1.0.0
Released: 30-07-2022

- Initial commit

For changes prior to this version see the [changelog](https://github.com/mdibella-dev/mdb-theme/blob/main/README.md) of the predecessor of this theme (**mdb-theme**).
