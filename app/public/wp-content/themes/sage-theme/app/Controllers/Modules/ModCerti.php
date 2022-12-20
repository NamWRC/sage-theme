<?php

namespace App\Controllers\Modules;

class ModCerti
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
