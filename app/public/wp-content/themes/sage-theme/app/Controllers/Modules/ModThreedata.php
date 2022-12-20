<?php

namespace App\Controllers\Modules;

class ModThreedata
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
