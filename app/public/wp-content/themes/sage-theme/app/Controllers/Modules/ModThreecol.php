<?php

namespace App\Controllers\Modules;

class ModThreecol
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
