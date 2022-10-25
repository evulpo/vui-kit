# vui-kit
Vui Kit is a package of UI components recurrently used on Evulpo learning platform.

Add those lines to your main project "repositories" section of your `composer.json` file.

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

Then run inside the main root project to publish config, css and public assets :

`php artisan vendor:publish --tag=vui --force`
