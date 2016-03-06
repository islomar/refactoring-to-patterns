<?php

class Options
{
    const CACHE_FOLDER = './cache/';
    const REMOTE_FOLDER = './cache/remote/';
    const DEFAULTS = array('crop' => false,
        'scale' => 'false',
        'thumbnail' => false,
        'maxOnly' => false,
        'canvas-color' => 'transparent',
        'output-filename' => false,
        'cacheFolder' => self::CACHE_FOLDER,
        'remoteFolder' => self::REMOTE_FOLDER,
        'quality' => 90,
        'cache_http_minutes' => 20);

    private $opts;

    public function __construct($opts = array())
    {
        $sanitizedOpts = $this->sanitize($opts);

        $this->opts = array_merge(self::DEFAULTS, $sanitizedOpts);
    }

    public function asHash()
    {
        return $this->opts;
    }

    private function sanitize($opts) {
        $result = array();

        if ($opts != null) {
            $result = $opts();
        }
        return $result;
    }

}
