<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

use App\Models\ThemeOption;

class Header extends Component
{
    public $logo;
    public $name;
    public $title;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->logo       = ThemeOption::getOptionByKey('logo');
        $this->name       = ThemeOption::getOptionByKey('name');
        $this->title      = ThemeOption::getOptionByKey('title');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function render()
    {
        return view('components.header');
    }
}
