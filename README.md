# LoweMo.photo’s Himalayas Child Theme
This is a Wordpress child theme of the popular [Himalayas](https://themegrill.com/themes/himalayas/ "Himalayas - Best Free Modern One Page WordPress Theme 2016") theme. It is a quick-and-dirty fix for some things I'm not fond of in the base Himalayas theme (though not as quick-and-dirty or easy to lose as simply adding "Additional CSS" overrides in my WP installation).

## What it does:
* Overrides the `text-transform: uppercase;` used in menus, titles, etc. Where I *want* all uppercase, I'll enter it that way.
* Provides a fancier look for `blockquote` elements and a pullquote version that floats right at 50% of the container width.
* Other tweaks (I will update this Readme to itemize them and try to provide screenshots for before/after comparison)

## Installation
As a child theme, installation of this theme requires that the Himalayas theme be installed in your Wordpress site. You can then activate this theme.

## Future steps:
This is a very simple sub-theme and, as such, will probably not be maintained once I'm happy with it for my short-term use. That said, since it will mainly just override CSS from the base Himalaya theme, it should continue to work when/if any new releases of Himalayas are made available. If you like the changes I've made, you may also like to adapt it to override another base theme.

That said, I *do* plan to build a full-fledged theme that borrows what I like from other designs (Himalayas, among others). It will likely be a full Wordpress installation base, built on [Bedrock](https://roots.io/bedrock/ "Wordpress Boilerplatewith modern development tools"), a custom theme built on [Sage](https://roots.io/sage/ "WordPress starter theme with a modern front-end development workflow") 9.x, with support for [Composer](https://getcomposer.org/)-based workflows, [Bootstrap](http://getbootstrap.com/ "Bootstrap &middot; The world's most popular mobile-first and responsive front-end framework."), [Sass](http://sass-lang.com/ "Sass: Syntactically Awesome Style Sheets"), [Webpack](https://github.com/webpack/webpack), [Yarn](https://yarnpkg.com/en/), etc. Building this will be far less trivial, but will provide a lot more power as a starting point for an awesome, maintainable Wordpress site.
