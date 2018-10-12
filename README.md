# SantoPixel Boilerplate
Boilerplate used by SantoPixel to create projects. Frontend (HTML, CSS) and WordPress Theme.

### Cool Features ###
- Runs in a Node server with Live CSS Reload and Browser Syncing (BrowserSync)
- Gulp taks to generate bundles and WordPress structure theme
- PHP enabled (gulp-connect-php) to crete dynamic templates
- SASS (Uglify, Minify and sourcemaps)
- ImageMin to compress images

### Directory Strcture ###
```
/site
    /fonts (custom fonts like icomoon)
    /images (add your images, after build they will be compressed)
    /includes (add your PHP includes)
    /maps (JS and CSS maps)
    /php (PHP templates)
    /scripts (all your .JS in /js will be concatened in site.js)
        /scripts/js (put your JS libs here and use santopixel-boilerplate.js to add your custom JS)
    /styles (all your .SCSS in /sass will be concatened in styles.css)
        /styles/init.scss (organize your .SCSS files as you want :) )
/wordpress (WordPress in 4.9.8)
    /wp-content/themes
        Use this folder to create your theme from scratch. 
```
### How to use ###
#### Preparing your FrontEnd ####


#### Preparing your WordPress theme ####