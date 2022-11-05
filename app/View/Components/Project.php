<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Project extends Component
{
    public string $name;
    public string $description;
    public string $link;
    public string $date;

    public function __construct(string $name, string $description, ?string $link, string $date)
    {
        $this->name = $name;
        $this->description = $description;
        if(is_null($link)) {
            $this->link = '#';
        } else {
            $this->link = $link;
        }
        $this->date = $date;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.project');
    }
}
