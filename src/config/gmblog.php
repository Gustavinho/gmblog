<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Blog routes
    |--------------------------------------------------------------------------
    |
    | These are the base routes to use for the posts list and the posts
    | list filtered by tag.
    |
    */
    'baseRoute' => 'blog',

    'postsByTagRoute' => 'tag',

    /*
    |--------------------------------------------------------------------------
    | Blog layouts
    |--------------------------------------------------------------------------
    |
    | Gmblog has two main views, the posts list and the post content, as this
    | package doesn't have a base layout with a tipically nav bar, footer etc,
    | it uses template inheritance to render the views inside a layout with the
    | rest of your UI.
    | These are the layouts where the posts list and the post content
    |
    */
    'layouts' => [
        // Posts list
        'blog' => 'layouts.blog',
        // Post conente
        'post' => 'layouts.post',
    ],

    /*
    |--------------------------------------------------------------------------
    | Post Card Layout
    |--------------------------------------------------------------------------
    |
    | This package has 2 different ways to show the post card in the posts list,
    | both of them are responsive.
    |
    | Supported layouts: "vertical", "horizontal"
    |
    */
    'postCardLayout' => 'horizontal',

    /*
    |--------------------------------------------------------------------------
    | Show author
    |--------------------------------------------------------------------------
    |
    | Define if the author's name and photo will be shown in the post list and
    | the post content.
    |
    */
    'showAuthor' => true,

    /*
    |--------------------------------------------------------------------------
    | Paginate
    |--------------------------------------------------------------------------
    |
    | Define how many posts will be displayed per page in the posts list. It uses
    | the default Laravel paginator
    |
    */
    'paginate' => 12,

    /*
    |--------------------------------------------------------------------------
    | Social media
    |--------------------------------------------------------------------------
    |
    | Define some social media information.
    | Twitter: set your Twitter user name like "@myusername", this will be used in
    | the twitter:card metadata
    |
    */
    'socialMedia' => [
        'twitter' => ''
    ]
];
