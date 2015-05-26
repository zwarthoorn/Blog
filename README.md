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



## usage

first of all all blogpost will be maneged in the full admin panel and you dont have to worry about them

Now for getting the blog post we are going to runn a simple command thare are facades so it will not be that hard

if you want to have a blogpost you need to use Blog like so;

```php
use Blog
```

afther this you have 3 options first getting all the blogpost
this will give you all the post on order of submittet.

```php
Blog::allBlogs();
```
this will be a clean array with all the blogpost you have in your database.
(functions for publish and concept are not done yet so it will not be a factor for now)


you can also find a single blogpost with a slug all the blogpost are prefabt with a slug so dont hasetate.

```php
Blog::findBlog(slug);
```
and last but not least find a blog by slug and with all the response's with it already.

```php
Blog::findBlogWithResponse(slug);
```

this will create a nice array that will look like this

```php
array(
'blogpost'=> your blogpost,
'response'=> all the responses that are with this blogpost
)
```