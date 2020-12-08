<ul {!! $attributes !!} >
    @foreach($panelMenu as $menu)
    <li class="nav-item">
        <router-link href="/{{ $menu['path'] }}" class="nav-link d-flex align-items-center menu">
            <i class="material-icons icon">{{ $menu['icon'] }}</i>
            <span class="text">{{ $menu['text'] }}</span>
            @if($menu['submenu'] != "")
                <i class="material-icons icon d-none">navigate_prev</i>
                <i class="material-icons icon ml-auto">navigate_next</i>
            @endif

        </router-link>
        @if($menu['submenu'] != "")
        <div class="submenu-cont">
            @foreach($menu['submenu'] as $submenu)
                <router-link  href="/{{ $submenu['path'] }}" class="nav-link d-flex align-items-center submenu">
                    <i class="material-icons icon">{{ $submenu['icon'] }}</i>
                    <span class="text">{{ $submenu['text'] }}</span>
                </router-link>
            @endforeach
        </div>
        @endif 
    </li>
    @endforeach
    
</ul>