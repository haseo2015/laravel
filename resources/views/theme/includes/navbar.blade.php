
<div class="navbar">
    <div class="navbar-inner">
        <ul class="nav">
        @foreach ($voci_menu as $voce_menu)

             <li>{{$voce_menu->voce}}</li>
        @endforeach


        </ul>

    </div>
</div>