<?php

namespace TramuntanaStudio\NovaLocaleSwitcher\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use TramuntanaStudio\NovaLocaleSwitcher\FindsTools;
use TramuntanaStudio\NovaLocaleSwitcher\LocaleSwitcher;

final class Authorize
{
    use FindsTools;

    public function handle(Request $request, Closure $next)
    {
        $tool = $this->getFirstToolOfType(LocaleSwitcher::class);

        return optional($tool)->authorize($request) ? $next($request) : abort(403);
    }
}
