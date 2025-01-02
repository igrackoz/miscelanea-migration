<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;

class deviceTypeMiddleWare
{
    public function handle(Request $request, Closure $next)
    {
        $agent = new Agent();
        $deviceType = 'layouts.nav-desktop';  // Valor predeterminado

        if ($agent->isMobile()) {
            $deviceType = 'layouts.nav-mobile';
        }

        // Compartir la variable con todas las vistas
        view()->share('deviceType', $deviceType);

        return $next($request);
    }
}
