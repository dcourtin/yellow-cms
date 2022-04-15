<?php

namespace Dcourtin\YellowCms\View\Components;

use Dcourtin\YellowCms\Models\NodeType;
use Illuminate\View\Component;

class AdminNavigation extends Component
{
    private $nodeTypes;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->nodeTypes = NodeType::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('yellowcms::components.admin-navigation', [
            'nodeTypes' => $this->nodeTypes,
        ]);
    }
}
