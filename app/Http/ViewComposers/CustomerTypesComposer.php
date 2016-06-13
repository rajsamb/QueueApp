<?php

namespace App\Http\ViewComposers;

use Config;
use App\CustomerTypes;
use Illuminate\Contracts\View\View;

class CustomerTypesComposer
{
    /**
     * Make Customer Types id and name available
     * to the view.
     *
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('customerTypes', CustomerTypes::lists('id', 'name'));
    }
}
