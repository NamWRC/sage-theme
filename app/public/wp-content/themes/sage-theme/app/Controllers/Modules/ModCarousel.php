<?php

namespace App\Controllers\Modules;

class ModCarousel
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module
        ];
    }
}
