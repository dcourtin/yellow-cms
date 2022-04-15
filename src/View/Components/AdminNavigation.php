<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\NodeType;

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
        return view('components.admin-navigation', [
            'nodeTypes' => $this->nodeTypes
        ]);
    }
}
