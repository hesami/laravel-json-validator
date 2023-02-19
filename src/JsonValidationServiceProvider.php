<?php

namespace Hesami\LaravelJsonValidator;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class JsonValidationServiceProvider extends ServiceProvider
{

    public function boot()
    {
        Validator::extend('json_object', function ($attribute, $value, $parameters, $validator) {
            try {
                $json = $value;
                $object = is_object(json_decode($json));
                return $object;
            } catch (\Throwable $th) {
                return false;
            }
        });

        Validator::extend('json_object_has_key', function ($attribute, $value, $parameters, $validator) {
            try {
                $json = $value;
                $object = json_decode($json);
                $collection = collect($object);

                foreach ($parameters as $key => $parameter) {
                    if ($collection->has((string) trim($parameter)) === false) {
                        return false;
                    }
                }
                return true;
            } catch (\Throwable $th) {
                return false;
            }
        });

        Validator::extend('json_array', function ($attribute, $value, $parameters, $validator) {
            try {
                $json = $value;
                $object = !is_object(json_decode($json));
                return $object;
            } catch (\Throwable $th) {
                return false;
            }
        });

        Validator::extend('json_array_items_has_key', function ($attribute, $value, $parameters, $validator) {
            try {
                $json = $value;
                $items = json_decode($json);
                foreach ($items as $key => $item) {
                    $collection = collect($item);
                    foreach ($parameters as $key => $parameter) {
                        if ($collection->has((string) trim($parameter)) === false) {
                            return false;
                        }
                    }
                }

                return true;
            } catch (\Throwable $th) {
                return false;
            }
        });
        
       Validator::extend('json_array_items_numeric', function ($attribute, $value, $parameters, $validator) {
            try {
                $json = $value;
                $items = json_decode($json);

                foreach ($items as $item) {
                    if (is_numeric($item) === false) {
                        return false;
                    }
                }

                return true;
            } catch (\Throwable $th) {
                return false;
            }
        });

        Validator::extend('json_array_items_distinct', function ($attribute, $value, $parameters, $validator) {
            try {
                $json = $value;
                $items = json_decode($json);

                $collection = collect($items);

                foreach ($parameters as $parameter) {
                    if (sizeof($collection->duplicates((string) trim($parameter))) > 0) {
                        return false;
                    }
                }

                return true;
            } catch (\Throwable $th) {
                return false;
            }
        });
        
        Validator::extend('json_array_items_count', function ($attribute, $value, $parameters, $validator) {
            try {
                $json = $value;
                $validCounts = (int) $parameters[0];
                $items = json_decode($json);

                if (count($items) !== $validCounts) {
                    return false;
                }
                return true;
            } catch (\Throwable $th) {
                return false;
            }
        });

        Validator::extend('json_array_items_min', function ($attribute, $value, $parameters, $validator) {
            try {
                $json = $value;
                $min = (int) $parameters[0];
                $items = json_decode($json);

                if (count($items) < $min) {
                    return false;
                }
                return true;
            } catch (\Throwable $th) {
                return false;
            }
        });

        Validator::extend('json_array_items_max', function ($attribute, $value, $parameters, $validator) {
            try {
                $json = $value;
                $max = (int) $parameters[0];
                $items = json_decode($json);

                if (count($items) > $max) {
                    return false;
                }
                return true;
            } catch (\Throwable $th) {
                return false;
            }
        });
    }
}
