<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    protected $except = [
        'https://gasmapi.test/api/locationCoords'
    ];

    protected function tokenMatch($request)
    {
        // If request is an ajax request, check csrf_token
        $token = $request->ajax() ? $request->header('X-CSRF-Token') : $request->input('token');
        return $request->session()->token() == $token;
    }
}
