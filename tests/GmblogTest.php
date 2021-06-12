<?php

namespace Gmblog\Tests;

use Gmblog\Facades\Gmblog;

class GmblogTest extends TestCase
{
    public function testGetLayoutsPath()
    {
        $this->assertEquals(Gmblog::getLayout('blog'), config('gmblog.layouts.blog'));
        $this->assertEquals(Gmblog::getLayout('post'), config('gmblog.layouts.post'));

        Gmblog::layouts(['blogLayout', 'postLayout']);
        $this->assertEquals(Gmblog::getLayout('blog'), 'blogLayout');
        $this->assertEquals(Gmblog::getLayout('post'), 'postLayout');
    }

    public function testGetTwiiterAccount()
    {
        $this->assertEquals(Gmblog::getTwitter(), config('gmblog.socialMedia.twitter'));

        Gmblog::twitter('@gmblog');
        $this->assertEquals(Gmblog::getTwitter(), '@gmblog');
    }
}
