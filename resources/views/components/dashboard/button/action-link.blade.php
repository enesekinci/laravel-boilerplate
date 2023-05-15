@if (canAction(findRouteName($url)))
    <a data-is-route="{{ isRoute($url) }}" class="btn btn-{{ $color ?? 'success' }} {{ $class ?? null }}" href="{{ $url }}">{{ $title }}</a>
@endif
