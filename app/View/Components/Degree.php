<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Degree extends Component
{
    public string $name;
    public string $description;
    public string $schoolName;
    public string $schoolWebsite;
    public string $startDate;
    public string $endDate;
    public string $degreeImage;

    public function __construct(string $name, string $description, string $schoolName, string $schoolWebsite, string $startDate, string $endDate, string $degreeImage)
    {
        $this->name = $name;
        $this->description = $description;
        $this->schoolName = $schoolName;
        $this->schoolWebsite = $schoolWebsite;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->degreeImage = $degreeImage;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.degree');
    }
}
