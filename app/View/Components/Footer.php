<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Footer extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title;
    public $slogan;
    public function __construct($title,$slogan)
    {
        $this->title = $title;
        $this->slogan = $slogan;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.footer');
    }
    public function getUser(){
        return [
            "sudhir",
            "dev",
            "anup",
            "saurav"
        ];
    }
}
