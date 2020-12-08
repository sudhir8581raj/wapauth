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
                "path" => "dashboad",
                "submenu" => ""
            ],
            [
                "icon" => "ring_volume",
                "text" => "Call Manager",
                "path" => "callmanager",
                "submenu" => [
                    [
                        "icon" => "add_ic_call",
                        "text" => "Add Call",
                        "path" => "addcall"
                    ],
                    [
                        "icon" => "phone_missed",
                        "text" => "Missed Call",
                        "path" => "addcall"
                    ]
                ]
            ],
            [
                "icon" => "group_work",
                "text" => "Team Design",
                "path" => "teamdesign",
                "submenu" => ""
            ],
            [
                "icon" => "account_circle",
                "text" => "Users",
                "path" => "users",
                "submenu" => ""
            ],
        ];
    }
}
