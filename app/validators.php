<?php



Validator::extend('alpha_space', function($attribute, $value)
{
    return preg_match('/^[\pL\s]+$/u', $value);
});


Validator::extend('alpha_space_dash', function($attribute, $value)
{
    return preg_match('/^[\pL\s_-]+$/u', $value);
});

Validator::extend('numeric_dash', function($attribute, $value)
{
    return preg_match('/^[\0-9\s_-]+$/u', $value);
});