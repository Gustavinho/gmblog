<?php

return [
    'baseRoute' => 'blog',

    'postsByTagRoute' => 'tag',

    'layouts' => [
        'blog' => 'layouts.blog',
        'post' => 'layouts.post',
    ],

    'postCardLayout' => 'vertical',

    'showAuthor' => true,

    'paginate' => 12,

    'socialMedia' => [
        'twitter' => '@'
    ]
];
