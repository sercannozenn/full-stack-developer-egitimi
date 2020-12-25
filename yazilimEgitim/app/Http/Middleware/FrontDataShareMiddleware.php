<?php

namespace App\Http\Middleware;

use App\Models\Menu;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class FrontDataShareMiddleware
{

    public function handle(Request $request, Closure $next)
    {
        $menu = Menu::where('status', 1)->orderBy('order', 'ASC')->get();
        View::share('menu', $menu);

        return $next($request);
    }
}
