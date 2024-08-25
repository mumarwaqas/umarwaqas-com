<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

use App\Models\ThemeOption;
class Works extends Component
{
    public $works;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->works = ThemeOption::getOptionByKey('works');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.works');
    }
}
