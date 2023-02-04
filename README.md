# Json Validator For Laravel
A package for validating JSON data in Laravel

I developed this package to teach programming concepts to my students in the classroom.
But I think it will be useful for you too

I hope I can expand it.😊

If you like to develop it, it will definitely be useful for other programmers, especially beginners.

# Requirement
* Laravel 6, 7, 8, 9
* PHP 7.4 , 8


# Installation:
```
composer require hesami/laravel-json-validator
```


# How To use:


| Rule | Description |
| --- | --- |
| `json_object` | To check that the input data is a Json string and contains an object |
| `json_array` | To check that the input data is a Json string and contains an array |
| `json_object_has_key` | To check that the input is a Json string and contains an array whose items have a key or keys |
| `json_array_items_has_key` | To check that the input is a Json string and contains an array whose items have a key or keys |
| `json_array_items_count` | To check that the input data is a Json string and contains an array that has a certain number (10 or ...) of objects |
| `json_array_items_min` | To check that the input data is a Json string and contains an array containing at least $min objects |
| `json_array_items_max` | To check that the input data is a Json string and contains an array that has at most :max objects |





To check that the input data is a Json string and contains an object:
```php
Validator::make($request->all(), [
    'movies' => ['json', 'json_object']
]);
```


To check that the input data is a Json string and contains an array:
```php
Validator::make($request->all(), [
    'movies' => ['json', 'json_array']
]);
```


To check that the input data is a Json string and contains an object that has a key or keys:
```php
Validator::make($request->all(), [
    'movies' => ['json', 'json_object', 'json_object_has_key:title,desc']
]);
```


To check that the input is a Json string and contains an array whose items have a key or keys:
```php
Validator::make($request->all(), [
    'movies' => ['json', 'json_array', 'json_array_items_has_key:title,desc']
]);
```


To check that the input data is a Json string and contains an array that has a certain number (10 or ...) of objects:
```php
Validator::make($request->all(), [
    'movies' => ['json', 'json_array', "json_array_items_count:$count"]
]);
```


To check that the input data is a Json string and contains an array containing at least $min objects:
```php
Validator::make($request->all(), [
    'movies' => ['json', 'json_array', "json_array_items_min:$min"]
]);
```


To check that the input data is a Json string and contains an array that has at most :max objects:
```php
Validator::make($request->all(), [
    'movies' => ['json', 'json_array', "json_array_items_max:$max"]
]);
```



# Attention:
To customize the text of the messages in this version, you need to manually write the message validation language in the file.
```php
lng->en->validation.php
```



# License
The MIT license ([MIT](https://github.com/hesami/laravel-json-validator/blob/master/LICENSE.md)).
