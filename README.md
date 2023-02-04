# Laravel Json Validator
A package for validating JSON data in Laravel

# Installation:
```composer require hesami/laravel-json-validator```


# How To use:

To check that the input data is a Json string and contains an object:
```
Validator::make($request->all(), [
    'movies' => ['json', 'json_object']
]);
```


To check that the input data is a Json string and contains an array:
```
Validator::make($request->all(), [
    'movies' => ['json', 'json_array']
]);
```



To check that the input data is a Json string and contains an object that has a key or keys:
```
Validator::make($request->all(), [
    'movies' => ['json', 'json_object', 'json_object_has_key:title,desc']
]);
```


To check that the input is a Json string and contains an array whose items have a key or keys:
```
Validator::make($request->all(), [
    'movies' => ['json', 'json_array', 'json_array_items_has_key:title,desc']
]);
```


To check that the input data is a Json string and contains an array that has a certain number (10 or ...) of objects:
```
Validator::make($request->all(), [
    'movies' => ['json', 'json_array', "json_array_items_count:$count"]
]);
```


To check that the input data is a Json string and contains an array containing at least $min objects:
```
Validator::make($request->all(), [
    'movies' => ['json', 'json_array', "json_array_items_min:$min]
]);
```


To check that the input data is a Json string and contains an array that has at most :max objects:
```
Validator::make($request->all(), [
    'movies' => ['json', 'json_array', "json_array_items_max:$max]
]);
```

