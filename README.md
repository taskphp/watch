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
        ->addListener('modify', function ($event) {
            # Do something
        });
}]);
```

Installation
============
Add to `composer.json`:
```json
...
"require-dev": {
    "task/watch": "~0.1"
}
...
```

Usage
=====

See the documentation for [mbfisher/watch](https://github.com/mbfisher/watch) for documentation on using the watchers.
