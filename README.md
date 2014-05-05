task/watch
==========

[![Build Status](https://travis-ci.org/taskphp/watch.svg?branch=master)](https://travis-ci.org/taskphp/watch)
[![Coverage Status](https://coveralls.io/repos/taskphp/watch/badge.png)](https://coveralls.io/r/taskphp/watch)

Example
=======
```php
use Task\Plugin\WatchPlugin;

$project->inject(function ($container) {
    $container['watch'] = new WatchPlugin;
});

$project->addTask('watch', ['watch', function ($watch) {
    $watch->init('/tmp')
        ->addListener(function ($event) {
            # Do something
        });
}]);
```
