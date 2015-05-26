# Zwarthoorns Blog Module.

this is a blog module build oppon main admin core Admincore also from me
you need that package aswel else the Blog Module whont work.
you can get it from package gist or from github.
https://packagist.org/packages/zwarthoorn/admincore

##information

this package is using laravel 5.0.
also it is using the laravel packages for form and html
please install this by yourself.


## instalation

first you add this to the required field in your json file

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

