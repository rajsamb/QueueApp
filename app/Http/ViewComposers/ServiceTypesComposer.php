<?php

namespace App\Http\ViewComposers;

use Config;
use App\ServiceTypes;
use Illuminate\Contracts\View\View;

class ServiceTypesComposer
{
    public function compose(View $view)
    {
        $view->with('serviceTypes', ServiceTypes::lists('name', 'id'));
    }
}
