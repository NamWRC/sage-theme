<?php

namespace App\Controllers\Modules;

class ModTest
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
