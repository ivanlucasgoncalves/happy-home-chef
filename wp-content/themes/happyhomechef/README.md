
# TCC Base Theme

***

This is the The Code Co base theme. This is designed to be a starter theme which you can copy over to a new project and use as the base to start work from.
This is not intended to be a child theme, just copy it over and hack away.

It includes the following features:

- NPM, Webpack, Babel
- Sass, JavaScript ES6 standards
- ACF Gutenberg blocks supported out of the box

## Installation

### Step 1 - Clone

Git clone the repository into a new theme directory.

```bash
git clone git@bitbucket.org:thecodeco/basetheme.git mytheme
```

### Step 2 - NPM/Webpack

Run the following on local inside the theme directory to install all packages and to run webpack.

```bash
npm install
npm run prod
```

### Step 3 - Composer

Run the following command inside the theme directory to build the PHP autoloader for the theme.

```bash
composer update
```

### Step 4 - Update docs

You should update this `README.md` for all new projects. Documentation is important, please read over our 
[documentation standards](https://bitbucket.org/thecodeco/documentation/wiki/Dev/Standards/Documentation).

## Layout

Below is the basic layout / structure of the theme:

- `inc/` - all the functions.php
- `src/` - all Sass, JS, Images and Fonts files MUST be inside `src` folder organising for type of file.
- `src/php` - all custom PHP code required by the theme.
- `src/js` - insert all JS files into this folder and follow the ES6 standards for exporting and importing files into the main JS file.
- `src/sass` - insert all Sass files and divide them into files entitying with a meaningful name then `@import` each one into the main Sass file.
- `src/images` - place all images into this folder.
- `src/fonts` - place all fonts into this folder.
- `src/gutenberg` - JS & CSS for ACF Gutenberg blocks
- `template-parts/gutenberg` - templates for ACF Gutenberg blocks

## Webpack Build

### Step 1 - NPM Install

Install NPM packages, like so:

```bash
npm install
```

### Step 2 - Browser Sync

Browsersync must be configured in `webpack.config.js` which is where you need to put configuration that is specific to your local environment.

1. you must change `proxy` to a name of your project `host` as per example: `proxy: 'http://my-project-name.local/'`
2. you can also chose to keep or change the `port` number as per example: `port: 9000`

For more info please check this out: https://www.browsersync.io/

### Step 3 - Prod Build

Run the production build to produce the base build files.

```bash
npm prod
```

### Step 4 - Dev Watch Task

Run the dev build locally to run the watch task to automaticaly build files as you work.

```bash
npm dev
```

## Coding Standards

Please read through our [frontend standards](https://bitbucket.org/thecodeco/documentation/wiki/Dev/Frontend%20Stack) for some
background on our standardised frontend set up.

We also require you to follow our [coding standards](https://bitbucket.org/thecodeco/documentation/wiki/Dev/Standards/Code%20Quality).

## PHP Code

All PHP code for the theme lives inside the `src/php` directory. This code is auto loaded using composer. For this reason all 

### Controllers

The theme uses a psuedo MVC structure for PHP code, where all functionality should be located within controller classes in the
`src/php/Controllers` directory.

These controllers must extend the `Base\Controller` class and they need to be define in the `$controllers` array within 
`functions.php` in order to be loaded.

Please refer to the build in controllers for a reference on how these controllers should be used.

## ACF Gutenberg blocks

Gutenberg is the new standard for WordPress and thus any new builds need to leverage this as much as possible. 
[ACF Gutenberg blocks](https://www.advancedcustomfields.com/blog/acf-5-8-introducing-acf-blocks-for-gutenberg/) provides a really simple way of building 
new Gutenberg blocks, without the for custom build React components & the other things normally required.

Obs.: All ACF Custom Fields are located inside `acf-json` folder inside the theme and they will be synced automatically once the changes are deployed.
Do you want to know more about Local JSON? https://www.advancedcustomfields.com/resources/local-json/

This base theme has ACF for Gutenberg pre-configured, ready to use in the [/inc/acf.php](/inc/acf.php) file. Adding a new block is simple, you need to first 
register a new block like so:

```php
acf_register_block( [
	'name'				=> 'sample',
	'title'				=> __( 'Sample' ),
	'description'		=> __( 'A custom sample block.' ),
	'render_callback'	=> 'tcc_acf_block_render_callback',
	'category'			=> 'formatting',
	'icon'				=> 'admin-comments',
	'keywords'			=> [ 'sample' ]
] );

function tcc_acf_block_render_callback( $block ) {

	$slug = str_replace('acf/', '', $block['name']);

	if ( file_exists( get_theme_file_path("/template-parts/gutenberg/block-{$slug}.php") ) ) {
		include get_theme_file_path( "/template-parts/gutenberg/block-{$slug}.php" );
	}
	
}
```

Then add the block template in [/template-parts/gutenberg](/template-parts/gutenberg).

Custom JS & Sass can also be configured for the new block by adding it to [src/gutenberg/](src/gutenberg/). Any Sass ro JS files included 
here will be automatically build into the frontend bundle as well as the editor bundle included when editing in Gutenberg.

Below is a screenshot of what an ACF Gutenberg block looks like, with some custom ACF fields in the sidebar and a proper WYSIWYG output in 
Gutenberg itself.


![Gutenberg ACF Example.png](https://bitbucket.org/repo/gkr5rd5/images/1898067878-Gutenberg%20ACF%20Example.png)

### Sass

We strongly recommend to use Sass with [BEM Naming](http://getbem.com/introduction/). For example:

```html
<div class='block'>...</div>
```

Flags on blocks or elements.

```html
<div class='block block--shadow block--size-big'>...</div>
```

Parts of a block and have no standalone meaning.

```html
<div class='block'>
	...
	<span class='block__elem'></span>
</div>
```

Parts of a block with JS state.

```html
<div class='accordion'>
  <button class='accordion__button js-click'>click</button>
  <div class='accordion__copy is-collapsed'>...</div>
</div>
```

## JavaScript/ES6

We also require the use ES6 standards. Babel/webpack are configured with pollfills byt default to support all of the ES6 features. 

Here are a few examples of the syntax / features supported by ES6:

Export and Import

```javascript
export function sample() {};
import { sample } from './sample';
```

`const` and `let`

```javascript

const myBtn = document.getElementById( 'js-button' );

let name = 'Zac';
name = 'Ben';
console.log(name);
// output --> Ben

```

Don't forget, you must follow [coding standards](https://bitbucket.org/thecodeco/documentation/wiki/Dev/Standards/Code%20Quality#markdown-header-coding-standards
) for all JS & Sass!

A helpful resource on ES6 - [Write less do more in Javascript](https://medium.freecodecamp.org/write-less-do-more-with-javascript-es6-5fd4a8e50ee2).

## Using on an Existing Site/Theme

For an existing theme you need to copy over:

- `webpack.config.js`
- `postcss.config.js`
- `.babelrc`
- `package.json`

After that, you must run the following on local inside the theme folder to install all packages to run webpack.

```bash
npm install
```

And finally, you should follow the **Build** process as per above described.
