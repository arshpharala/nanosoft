<?php

if (!function_exists('setting')) {
    function setting($key, $default = null)
    {
        return \App\Models\Setting::where('key', $key)->value('value') ?? $default;
    }
}

if (!function_exists('services')) {
    function services()
    {
        return \App\Models\Service::latest()->get();
    }
}

if (!function_exists('stores')) {
    function stores()
    {
        return \App\Models\OnlineStore::latest()->get();
    }
}
