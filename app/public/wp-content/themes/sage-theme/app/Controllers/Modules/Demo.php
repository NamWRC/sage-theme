<?php

namespace App\Controllers\Modules;

class Demo
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module,
            'tittle' => $module['tittle'],
            'desc' => $module['desc']
        ];
    }
}