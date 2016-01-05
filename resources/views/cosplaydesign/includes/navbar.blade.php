<div class="navbar">
    <div class="navbar-inner">
        <ul class="nav">
            @foreach($voci_menu as $voce_menu)
                <li><a href="{{ url('/' . $voce_menu->slug) }}">{{ $voce_menu->voce }}</a></li>
            @endforeach
        </ul>
    </div>
</div>