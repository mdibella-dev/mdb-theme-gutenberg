# mdb-theme-fse
The WordPress theme for Marco Di Bella's personal website (full site editing version). Based on mdb-theme (2.1).

<br>

## Development Info

### Contributors
[Marco Di Bella ](https://github.com/mdibella-dev)

### Tags
gutenberg, block-editor, full-site-editing, translation-ready, responsive, svg, slideout-menu, jquery, variable-font-size

### Requires at least

* WordPress 6.0
* ACF 5.0

### Tested up to

* WordPress 6.2 RC2

<br>

## Changelog

### Latest changes to the main branch

* New: Add package.json with SASS scripts
* New: Support for wp-block-code
* New: Extract changelog from README.md
* New: Prevent visible infusion of dlm-xlr-classes (plugin Download Monitor)
* Improve: Minor changes to figcaption-tag (wp-block-image)
* Improve: Add more rounder elements
* Improve: Replace Inconsolata with RobotoSlab
* Improve: Update Borlabs Cookiebox (#26)
* Improve: Set font-display of RobotoSlab to block
* Improve: Better hyphens in headings (via plugin)
* Improve: Rename block pattern '404' to '404-image' to clearify its purpose
* Improve: Change default padding of standard buttons
* Bugfix: Google PageSpeed Insights: "Links can be crawled" test (SEO)
* Bugfix: Google PageSpeed Insights: "Links must have discernible text" test (accessibility)
* Bugfix: Google PageSpeed Insights: Reduce CLS on #marco-01 image (Core Web Vitals)
* Bugfix: Remove hyphens=none from headings (causes overflows)
* Bugfix: Remove ARIA tags from template parts, as they lead to invalid block code in Gutenberg
* Bugfix: Change THEME_URI to THEME_DIR when loading textdomain

### Previous changes

See [CHANGELOG.md](https://github.com/mdibella-dev/mdb-theme-fse/blob/main/CHANGELOG.md).
