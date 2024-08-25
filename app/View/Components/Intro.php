<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

use App\Models\ThemeOption;

class Intro extends Component
{
    public $name;
    public $image;    
    public $summary;
    public $socials;
    public $email;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->name    = ThemeOption::getOptionByKey('name');
        $this->image   = ThemeOption::getOptionByKey('image');
        $this->summary = ThemeOption::getOptionByKey('summary');
        $this->socials = ThemeOption::getOptionByKey('socials');
        $this->email   = ThemeOption::getOptionByKey('email');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function render()
    {
        return view('components.intro');
    }
}
