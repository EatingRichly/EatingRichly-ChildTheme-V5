# EatingRichly.com-V5
Version 5.0 Child Theme for http://EatingRichly.com

# How to install:
1. Rename theme folder to `eatingrichly-v4`
1. open `pluto-osetin-theme/extend/custom-styles.less`
 1. copy the code from `EatingRichly.com-V4/extend/custom-styles.less`
1. open `pluto-osetin-theme/extend/custom_scheme_vars.php`
 1. add the following `$scheme_vars[ 'sidebarWidth' ] = '361px';`
 1. this changes the sidebar width to our custom `361px`.
1. Upload the custom font to the assets folder and update the less 
1. copy the custom css example below:
 

# Plugins
- https://wordpress.org/plugins/custom-content-width/
 - Use this to set the width to 800

# custom css
```css
/* Increase Article font size */
.page article.pluto-page-box .post-content,.single article.pluto-page-box .post-content,.index-fullwidth article.pluto-page-box .post-content {
	font-size: 18px;
}

/* Fit the left ads in easier. */
.menu-block {
	padding: 50px 25px 0 50px;
}

/* Cleanup left Menu */
.menu-block .divider,#menu-mainmenuv4 {
	margin-bottom: 5px;
}

.bar-breadcrumbs {
	display: none;
}
```