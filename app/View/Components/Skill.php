<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Skill extends Component
{
    public string $name;
    public string $image;

    public function __construct(string $name, string $image)
    {
        $this->name = $name;
        $this->image = $image;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.skill');
    }
}
