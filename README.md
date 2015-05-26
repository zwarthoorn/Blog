# Zwarthoorns Blog Module.

this is a blog module build oppon main admin core Admincore also from me
you need that package aswel else the Blog Module whont work.
you can get it from package gist or from github.
https://packagist.org/packages/zwarthoorn/admincore




```json
"require": {
        "zwarthoorn/blog": "dev-master"
        
    },
```


### add service provider to the service provider array



```php
'Zwarthoorn\Blog\ServiceProvider'
```

#### and in the ailias

```php
'Blog'=> 'Zwarthoorn\Blog\Facades\Blog',
'Response'=> 'Zwarthoorn\Blog\Facades\Response'
```

