@php
    use Illuminate\Support\Facades\Request;
    $menuItems = \App\Models\Menu::all();
@endphp
<ul class="nav justify-content-center border-bottom pb-3 mb-3 nav-list mobile-menu">
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

