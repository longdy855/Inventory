<?php

namespace App\Http\Middleware;

use Closure;

class Cors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $trusted_domains = ["http://localhost:4200", "http://127.0.0.1:4200", "http://localhost:3000", "http://127.0.0.1:3000"];
        header("Access-Control-Allow-Origin: *");
        $headers = [
        'Access-Control-Allow-Methods'=> 'POST, GET, OPTIONS, PUT, DELETE',
        'Access-Control-Allow-Credentials' => true,
        'Access-Control-Allow-Headers'=> 'Origin, X-XSRF-TOKEN, Content-Type, X-Auth-Token, Authorization, X-Requested-With'
        ];
        if($request->getMethod() == "OPTIONS") {

            return response()->make('OK', 200, $headers);
        }

        $response = $next($request);
        foreach($headers as $key => $value)
        $response->header($key, $value);
        return $response;
    }
}
