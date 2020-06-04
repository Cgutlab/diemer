<div class="sidebar-menu" >
    <ul class="collapsible">
    @foreach($familia as $f)
        <li id="familia-{{$f->id}}">
            <div class="collapsible-header"> 
                <a id="f-{{$f->id}}" href="{{ route('seccion-pg', $f->id) }}">{{ $f->nombre }}</a>
                <i class="material-icons">navigate_next</i>
            </div>
            <div class="collapsible-body">
                <div class="sidemenu-contenedor">
                    @if ($f->product_general->count() > 0)
                        @foreach($productoG as $pg)
                            @if($pg->family_id==$f->id)
                            <a id="pg-{{$pg->id}}" href="{{ route('seccion-pesp', $pg->id) }}">{{ $pg->nombre }}</a>
                                <div id="menu_pg-{{$pg->id}}" class="menu-pg"></div>
                            @endif
                        @endforeach
                    @else
                        @foreach($f->products as $p)
                            <a id="pf-{{$p->id}}" href="{{ route('seccion-pf', $p->id) }}">{{ $p->nombre }}</a>
                                <div id="menu_pf-{{$p->id}}" class="menu-pf"></div>
                        @endforeach
                    @endif
                </div>
            </div>
        </li>
    @endforeach
    </ul>
</div>
        