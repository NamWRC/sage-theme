<?php

namespace App\Controllers\Modules;

use App\Services\Queries;   

class Demo
{
    public function dataModule($module)
    {
        return (object) [
            'module' => $module,
            'title' => 'This is title',
            'desc' => 'this is description'
        ];
    }
}