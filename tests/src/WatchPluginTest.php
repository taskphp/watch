<?php

namespace Task\Plugin;

class WatchPluginTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        if (function_exists('inotify_init')) {
            runkit_function_remove('inotify_init');
        }

        $this->tmp = sys_get_temp_dir();
    }

    public function testInitIteratorWatcher()
    {
        $watcher = (new WatchPlugin)->init($this->tmp);
        $this->assertInstanceOf('mbfisher\Watch\IteratorWatcher', $watcher);
    }

    public function testInitInotifyWatcher()
    {
        runkit_function_add('inotify_init', '', 'return true;');
        $watcher = (new WatchPlugin)->init($this->tmp);
        $this->assertInstanceOf('mbfisher\Watch\InotifyWatcher', $watcher);
    }
}
