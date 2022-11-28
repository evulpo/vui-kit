# vui-kit
Vui Kit is a package of UI components recurrently used on Evulpo learning platform.

Add those lines to your main project "repositories" section of your `composer.json` file.

As a local package in your installation

```
"repositories": {
    ...
    "vui-kit": {
        "type": "path",
        "url": "packages/evulpo/vui-kit",
        "options": {
            "symlink": true
        }
    }
}
```
and that one: 

` "Evulpo\\VuiKit\\": "packages/evulpo/vui-kit/src", `

into `"autoload": { "psr-4": { ... } }`

Or as a remote package on public Github via Packagist
"repositories": {
    ...
    "vui-kit": {
        "type": "git",
        "url": "https://github.com/evulpo/vui-kit"
    }
}
```
with that line in "autoload": 

` "Evulpo\\VuiKit\\": "vendor/evulpo/vui-kit/src", `


## usual install in a project
-----------------------------
`git clone` the vui-kit (https://github.com/evulpo/vui-kit) into `./packages/evulpo`
`composer update evulpo/vui-kit`
`php artisan vendor:publish --tag=vui --force`

Then run inside the main root project to publish config, css and public assets :

`php artisan vendor:publish --tag=vui --force`

Run `composer update evulpo/vui-kit` after install or if project cannot find views.
