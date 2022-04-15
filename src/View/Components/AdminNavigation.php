<?php

namespace App\View\Components;

use App\Models\NodeType;
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
        return view('components.admin-navigation', [
            'nodeTypes' => $this->nodeTypes,
        ]);
    }
}
