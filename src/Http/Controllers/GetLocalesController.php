<?php

namespace TramuntanaStudio\NovaLocaleSwitcher\Http\Controllers;

use TramuntanaStudio\NovaLocaleSwitcher\FindsTools;
use TramuntanaStudio\NovaLocaleSwitcher\LocaleSwitcher;

final class GetLocalesController
{
    use FindsTools;

    public function __invoke()
    {
        $localeSwitcher = $this->getFirstToolOfType(LocaleSwitcher::class);

        return response()->json(['locales' => optional($localeSwitcher)->locales() ?? []]);
    }
}
