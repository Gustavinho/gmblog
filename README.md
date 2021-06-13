# Gmblog

Blog UI wrapper for the Laravel Wink package.

## Installation

You can install the package via composer:

```bash
composer require gustavomartinez/gmblog
```

## Usage

This package needs two different layouts to render the posts list and the post conent, create these blade layouts in your project defining some sections in them where the content will be displayed.

Posts list

```html
<!-- resources/layouts/blog.blade.php -->
@yield('blog')
```

Posts content

```html
<!-- resources/layouts/post.blade.php -->
@yield('post')
```

Add this `stack` to your base layout to render the meta fields of the single post page.

```html
@stack('meta')
```

## Styling the blog

This package is using Tailwindcss utilities to style the UI so you need to install and set up tailwindcss to style the blog.
You need to add the `@tailwindcss/typography` plugin to your `tailwind.config.js` file

You shluld also include this path in your tailwingcss `purge` array.

```js
purge: [
    "../packages/gmblog/**/*.php",
    // ...
];
```

### Colors

It is not mandatory but you can add and customize these colors in your `tailwind.config.js` file.

```js
{
    theme: {
        extend: {
            colors: {
                // Share buttons colors
                facebook: "#3B5998",
                twitter: "#38A1F3",

                // Main accent color
                primary: colors.blue,
                // ...
            }
        }
    }
}
```

### Translations

All the texts can be translated using [translations strings as keys](https://laravel.com/docs/8.x/localization#using-translation-strings-as-keys)

```js
/* lang/en.json */
{
    "Read more": "Read more",
}
```

### Config

You can customize some of the behaviors of this package with the config file.

```bash
php artisan vendor:publish --tag=config --provider='Gmblog\GmblogServiceProvider'
```
