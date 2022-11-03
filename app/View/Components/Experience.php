<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Experience extends Component
{
    public string $name;
    public string $description;
    public string $city;
    public string $startDate;
    public string $endDate;
    public string $companyLogo;
    public string $companyWebsite;

    public function __construct(string $name, string $description, string $city, string $startDate, string $endDate, string $companyLogo, string $companyWebsite)
    {
        $this->name = $name;
        $this->description = $description;
        $this->city = $city;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->companyLogo = $companyLogo;
        $this->companyWebsite = $companyWebsite;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.experience');
    }
}
