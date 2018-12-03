<?php

namespace Modules\Module\Http\ViewComposers;

use Illuminate\View\View;

class ModuleComposer {

    protected $modules;

    public function __construct() {

    }

    public function compose(View $view)
    {
        //$view->with('count', $this->users->count());
    }
}
