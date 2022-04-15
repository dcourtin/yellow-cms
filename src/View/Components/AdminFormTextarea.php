<?php

namespace Dcourtin\YellowCms\View\Components;

use Illuminate\View\Component;

class AdminFormTextarea extends AdminFormInput
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view(
            'yellowcms::components.admin-form-textarea',
            [
                'label' => $this->label,
                'name' => $this->name,
                'value' => $this->value,
                'description' => $this->description,
                'required' => $this->required,
            ]
        );
    }
}
