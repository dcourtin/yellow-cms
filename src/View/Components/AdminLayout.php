<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AdminLayout extends Component
{
    private $pageTitle;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($pageTitle="")
    {
        $this->pageTitle = $pageTitle;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin-layout', [
            'pageTitle' => $this->pageTitle,
            'quote' => \Illuminate\Foundation\Inspiring::quote()
        ]);
    }
}
