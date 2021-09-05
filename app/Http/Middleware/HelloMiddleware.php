<?php

namespace App\Http\Middleware;

use Closure;

class HelloMiddleware
{
    public function handle($request, Closure $next)
    {
       $response = $next($request);//コントローラのアクションが実行されて結果が変数に代入される

       $content = $response->content();
 
      $pattern = '/<middleware>(.*)<\/middleware>/i';					
      $replace = '<a href="http://$1">$1</a>';
      $content = preg_replace($pattern,$replace, $content);
     $response->setContent($content);
     return $response;

     }
}
