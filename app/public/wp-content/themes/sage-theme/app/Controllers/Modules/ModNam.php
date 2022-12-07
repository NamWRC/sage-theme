<?php

namespace App\Controllers\Modules;

class ModNam
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
