<?php

namespace App\Http\ViewComposers;

use Config;
use App\ServiceTypes;
use Illuminate\Contracts\View\View;

class ServiceTypesComposer
{
    /**
     * Make Service Types id and name available
     * to the view.
     *
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('serviceTypes', ServiceTypes::lists('name', 'id'));
    }
}
