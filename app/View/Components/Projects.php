<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

use App\Models\ThemeOption;
class Projects extends Component{
 
    public $count;

    public $project;

    /**
     * Create a new component instance.
     */
    public function __construct($count = 5)
    {
        $this->count = $count;
        $this->project = ThemeOption::getOptionByKey('projects');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {

        $projectsArray = json_decode($this->project, true);
        // Convert the array to a collection for easier manipulation
        $projectsToShow = array_slice($projectsArray, 0, $this->count);
    
        return view('components.projects', ['projects' => $projectsToShow]);
    }
}
