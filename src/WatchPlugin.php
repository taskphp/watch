<?php

namespace Task\Plugin;

use mbfisher\Watch\Watcher\InotifyWatcher;
use mbfisher\Watch\Watcher\IteratorWatcher;

class WatchPlugin implements PluginInterface
{
    public function init($path, $include = null, $exclude = null)
    {
        if (function_exists('inotify_init')) {
            return new InotifyWatcher($path, $include, $exclude);
        } else {
            return new IteratorWatcher($path, $include, $exclude);
        }
    }
}
