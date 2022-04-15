<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AdminFormInput extends Component
{
    protected $label;
    protected $name;
    protected $type;
    protected $value;
    protected $description;
    protected $required='';
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label,$name,$type='text',$value='',$required='',$description='')
    {
        $this->label=$label;
        $this->name=$name;
        $this->type=$type;
        $this->value=$value;
        $this->required=$required;
        $this->description=$description;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin-form-input',
            [
                'label' => $this->label,
                'name'  => $this->name,
                'type'  => $this->type,
                'value' => $this->value,
                'description' => $this->description,
                'required' => $this->required
            ]
        );
    }
}
