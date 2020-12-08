<ul {!! $attributes !!} >
    @foreach($panelMenu as $items)
    <li class="nav-item">
        <a href="/{{ $items['path'] }}" class="nav-link d-flex align-items-center">
            <i class="material-icons icon">{{ $items['icon'] }}</i>
            <span class="text">{{ $items['text'] }}</span>
        </a>
    </li>
    @endforeach
    
</ul>