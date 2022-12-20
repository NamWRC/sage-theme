<?php

namespace App\Controllers\Modules;

class ModThelast
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
