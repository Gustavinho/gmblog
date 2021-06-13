<?php

namespace Gmblog\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static void layouts(Array $layouts) Set the layouts to be used for the blog and the
 * posts, the first element of the array is the blog layout, the second item is the post layout,
 * example: Gmblog::layouts(['layouts.blog', 'layouts.post'])
 * @method static void twitter($twitterAccount) Set the twitter user name,
 * example: Gmblog::twitter('@yourusername')
 *
 * @see \Gmblog\Gmblog
 */

class Gmblog extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'gmblog';
    }
}
