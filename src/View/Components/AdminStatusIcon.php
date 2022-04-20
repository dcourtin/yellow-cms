<?php

namespace Dcourtin\YellowCms\View\Components;

use Illuminate\View\Component;

class AdminStatusIcon extends Component
{
    public $status;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($status)
    {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view(
            'yellowcms::components.admin-status-icon',
            [

            ]
        );
    }
}
