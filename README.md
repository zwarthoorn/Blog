# Boilerplate Laravel 5 Package



```sh
git clone --depth 1 git@github.com:cviebrock/laravel5-package-template.git
```

Rename the directory and re-init it as your own package:

```sh
mv laravel5-package-template my-package
cd my-package
rm -rf .git
git init
```




```json
{
    "name": "vendor/package",
    ...
    "autoload": {
        "psr-4": {
            "Vendor\\Package\\": "src/"
        }
    },
    ...
},
```


### config/packagename.php



```php
'Zwarthoorn\Blog\ServiceProvider'
```

#### and in the ailias

```php
'Blog'=> 'Zwarthoorn\Blog\Facades\Blog',
'Response'=> 'Zwarthoorn\Blog\Facades\Response'
```

