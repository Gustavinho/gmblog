# gmblog

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require gustavomartinez/gmblog
```

## Usage

### Create layouts

Create these blade layouts defining some sections in them

```html
<!-- resources/layouts/blog.blade.php -->
@yield('blog')
```

```html
<!-- resources/layouts/post.blade.php -->
@yield('post')
```

### Styling the blog

Install tailwindcss to style the blog
Add the `@tailwindcss/typography` plugin

```bash
npm install @tailwindcss/typography
```

```js
// tailwind.config.js
module.exports = {
    theme: {
        // ...
    },
    plugins: [
        require("@tailwindcss/typography"),
        // ...
    ],
};
```

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

## Testing

```bash
composer test
````

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
