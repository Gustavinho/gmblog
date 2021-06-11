<?php

namespace Gmblog;

class Gmblog
{
    private $layouts = null;

    /**
     * Array with the layouts for the blog and the post
     * section
     * @example Gmblog::layouts(['blogLayout', 'postLayout'])
     */
    public function layouts($layouts = [])
    {
        $this->layouts = $layouts;

        return $this;
    }

    public function getLayout($type = 'blog')
    {
        if ($this->layouts) {
            $layouts = [
                'blog' => $this->layouts[0],
                'post' => $this->layouts[1],
            ];
            return $layouts[$type];
        }

        return config('gmblog.layouts.' . $type);
    }
}
