<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

use App\Models\ThemeOption;
class Services extends Component{
 
    public $count;

    public $service;

    /**
     * Create a new component instance.
     */
    public function __construct($count = 5)
    {
        $this->count = $count;
        $this->service = ThemeOption::getOptionByKey('services');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {

        $servicesArray = json_decode($this->service, true);
        // Convert the array to a collection for easier manipulation
        $servicesToShow = array_slice($servicesArray, 0, $this->count);

        return view('components.services', ['services' => $servicesToShow]);
    }
}
