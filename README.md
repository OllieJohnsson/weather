Weather
==================================

[![Build Status](https://travis-ci.org/OllieJohnsson/weather.svg?branch=master)](https://travis-ci.org/OllieJohnsson/weather)

[![CircleCI](https://circleci.com/gh/OllieJohnsson/weather.svg?style=svg)](https://circleci.com/gh/OllieJohnsson/weather)

[![Build Status](https://scrutinizer-ci.com/g/OllieJohnsson/weather/badges/build.png?b=master)](https://scrutinizer-ci.com/g/OllieJohnsson/weather/build-status/master)

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/OllieJohnsson/weather/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/OllieJohnsson/weather/?branch=master)

[![Code Coverage](https://scrutinizer-ci.com/g/OllieJohnsson/weather/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/OllieJohnsson/weather/?branch=master)

A service where you can search for past or future weather using coordinates.

Table of content
------------------------------------

* [Install as Anax module](#Install-as-Anax-module)
* [Install using scaffold postprocessing file](#Install-using-scaffold-postprocessing-file)
* [Install and setup Anax](#Install-and-setup-Anax)
* [Dependency](#Dependency)
* [License](#License)



Install as Anax module
------------------------------------

This is how you install the module into an existing Anax installation.

Install using composer.

```
composer require oliver/weather
```


Copy the configuration files
```
rsync -av vendor/oliver/weather/config ./
```

<!-- Copy the src files
```
rsync -av vendor/oliver/weather/src ./
``` -->

Copy the view files
```
rsync -av vendor/oliver/weather/view ./
```

Copy the documentation
```
rsync -av vendor/oliver/weather/content/000_documentation.md ./content/weather/
```


Install using scaffold postprocessing file
------------------------------------------

The module supports a postprocessing installation script, to be used with Anax scaffolding. The script executes the default installation, as outlined above.

```
bash vendor/oliver/weather/.oliver/scaffold/postprocess.d/100_weather.bash
```
The postprocessing script should be run after the composer require is done.



Install and setup Anax
------------------------------------

You need a Anax installation, before you can use this module. You can create a sample Anax installation, using the scaffolding utility [`anax-cli`](https://github.com/canax/anax-cli).

Scaffold a sample Anax installation `anax-site-develop` into the directory `weather`.

```
$ anax create weather anax-site-develop
$ cd weather
```

Point your webserver to `weather/htdocs` and Anax should display a Home-page.


Dependency
------------------

This is a Anax modulen and primarly intended to be used together with the Anax framework.



License
------------------

This software carries a MIT license. See [LICENSE.txt](LICENSE.txt) for details.



```

    Copyright (c) 2018 Oliver Johnsson (oliver.johnsson@me.com)
```
