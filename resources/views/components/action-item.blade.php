@if (canAction(findRouteName($url)))
    <a data-is-route="{{ isRoute($url) }}" class="dropdown-item" href="{{ $url }}">{{ $title }}</a>
@endif
