<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PanelMenu extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.panel-menu');
    }

    public function panelMenu(){
        return [
            [
                "icon" => "api",
                "text" => "Dashboard",
                "path" => "dashboad"
            ],
            [
                "icon" => "group_work",
                "text" => "Team Design",
                "path" => "teamdesign"
            ],
            [
                "icon" => "account_circle",
                "text" => "Users",
                "path" => "users"
            ],
        ];
    }
}
