@php
    use Illuminate\Support\Facades\Request;
    $menuItems = [
        '/about' => 'О проекте',
        '/faq' => 'ЧаВо',
        '/partners' => 'Партнерам',
        '/contacts' => 'Контакты'
    ];
@endphp
<ul class="nav justify-content-center border-bottom pb-3 mb-3 nav-list">
    @foreach($menuItems as $link => $title)
        @if (str_contains(Request::url(), $link))
            <li class="nav-item">
                <span class="nav-link px-2d active">{{ $title }}</span>
            </li>
        @else
            <li class="nav-item">
                <a href="{{ $link }}" class="nav-link px-2">{{ $title }}</a>
            </li>
        @endif
    @endforeach
</ul>

