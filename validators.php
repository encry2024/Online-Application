<?php



Validator::extend('alpha_space', function ($attribute,$value,$parameters) {
    return preg_match("/^[\s\n\-+:?#~'\/\(\)_,!.a-zA-Z\pL\pN_-]+$/um",$value);
});