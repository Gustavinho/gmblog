# gmblog

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require gustavomartinez/gmblog
```

## Usage

Create these blade layouts defining some sections in them

```html
<!-- resources/layouts/blog.blade.php -->
@yield('blog')
```

```html
<!-- resources/layouts/post.blade.php -->
@yield('post')
```

Add this section to your base layout to render the meta fields of the single post page.

```html
@stack('meta')
```

### Styling the blog

Install and set up tailwindcss to style the blog, you need to add the `@tailwindcss/typography` plugin to your `tailwind.config.js` file

Include this path in your tailwingcss `purge` array.

```js
purge: [
    "../packages/gmblog/**/*.php",
    // ...
];
```

### Publish config file

````bash
php artisan vendor:publish --tag=config --provider='Gmblog\GmblogServiceProvider'
```
````
