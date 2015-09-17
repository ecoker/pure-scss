Pure SCSS
=========
This is really just Yahoo's Pure library with some SCSS sauce on top. The selectors have all been adjusted to be more general and the grid has been augmented to use spacing instead of having to nest additional elements. The team that made Pure is super talented and I take no credit for their work.


PrismJS
=======
The demo pages use [http://prismjs.com/][Prism</a>] for code highlight and quick selections of markup. So, that's pretty cool too.

--

First, clone the repo and then run npm install and Gulp.
```
git clone git@github.com:ecoker/pure-scss.git
npm install
gulp
```

For simplicity, let's use PHP's built in server:
```
php -S localhost:8000
```

I hope this is helpful. Happy coding!



Pure
====
[![Gitter](https://badges.gitter.im/Join Chat.svg)](https://gitter.im/yahoo/pure?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)

[![Pure](https://cloud.githubusercontent.com/assets/449779/5291099/1b554cca-7b03-11e4-9157-53a12d91b34a.png)][Pure]

A set of small, responsive CSS modules that you can use in every web project.
[http://purecss.io/][Pure]

[![Build Status](http://img.shields.io/travis/yahoo/pure.svg?style=flat)][Build Status]

[Pure]: http://purecss.io/
[Bower]: http://bower.io/
[Build Status]: https://travis-ci.org/yahoo/pure
[customize]: http://purecss.io/customize/


Features
--------

Pure is meant to be a starting point for every website or web app. We take care
of all the CSS work that every site needs, without making it look cookie-cutter:

* A responsive grid that can be customized to your needs.

* A solid base built on [Normalize.css][] to fix cross-browser compatibility
  issues.

* Consistently styled buttons that work with `<a>` and `<button>` elements.

* Styles for vertical and horizontal menus, including support for dropdown
  menus.

* Useful form alignments that look great on all screen sizes.

* Various common table styles.

* An extremely minimalist look that is super-easy to customize.

* Responsive by default, with a non-responsive option.

* Extremely small file size: **4.5KB minified + gzip**.


[Normalize.css]: http://necolas.github.io/normalize.css/


Browser Support and Testing
---------------------------

Pure is tested and works in:

* IE 8+
* Latest Stable: Firefox, Chrome, Safari
* iOS 6-8
* Android 4.x


Docs and Website
----------------

[Pure's website][Pure] is also open source, so please open any issues or pull
requests for the docs and website over at the [`pure-site`][pure-site]
repository.


[pure-site]: https://github.com/yahoo/pure-site


Contributing
------------

See the [CONTRIBUTING file][] for information on how to contribute to Pure.


[CONTRIBUTING file]: https://github.com/yahoo/pure/blob/master/CONTRIBUTING.md


License
-------

This software is free to use under the Yahoo! Inc. BSD license.
See the [LICENSE file][] for license text and copyright information.


[LICENSE file]: https://github.com/yahoo/pure/blob/master/LICENSE.md