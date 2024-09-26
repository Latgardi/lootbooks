@php
    use Illuminate\Support\Facades\Request;
    $menuItems = \App\Models\Menu::all();
@endphp
<div class="collapse navbar-collapse col-4">
    <ul class="navbar-nav ml-auto">
        @foreach($menuItems as $menuItem)
            @if (str_contains(Request::url(), $menuItem->url))
                <li class="nav-item">
                    <span class="nav-link px-2d active">{{ $menuItem->title }}</span>
                </li>
            @else
                <li class="nav-item">
                    <a href="{{ $menuItem->url }}" class="nav-link px-2">{{ $menuItem->title }}</a>
                </li>
            @endif
        @endforeach
    </ul>
</div>

