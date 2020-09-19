<?php

namespace TramuntanaStudio\NovaLocaleSwitcher\Http\Controllers;

use Illuminate\Http\Request;
use TramuntanaStudio\NovaLocaleSwitcher\FindsTools;
use TramuntanaStudio\NovaLocaleSwitcher\LocaleSwitcher;

final class SwitchLocaleController
{
    use FindsTools;

    public function __invoke(Request $request)
    {
        $localeSwitcher = $this->getFirstToolOfType(LocaleSwitcher::class);

        optional($localeSwitcher)->onSwitchLocaleHandler()($request);
    }
}
