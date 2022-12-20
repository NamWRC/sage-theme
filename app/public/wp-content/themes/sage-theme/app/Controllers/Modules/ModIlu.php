<?php

namespace App\Controllers\Modules;

class ModIlu
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
