<?php

namespace Modules\Tema\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;

class TemasController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'Temas';

        // module name
        $this->module_name = 'temas';

        // directory path of the module
        $this->module_path = 'tema::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "Modules\Tema\Models\Tema";
    }

}
