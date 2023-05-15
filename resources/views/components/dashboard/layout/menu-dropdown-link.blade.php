<li class="pc-item pc-hasmenu">
    <a href="#!" class="pc-link">
        <span class="pc-micon">
            <span class="pc-micon">
                <i data-feather="{{ $icon }}"></i>
            </span>
        </span>
        <span class="pc-mtext">{{ $title }}</span>
        <span class="pc-arrow">
            <i data-feather="chevron-right"></i>
        </span>
    </a>
    <ul class="pc-submenu">
        {{ $slot }}
    </ul>
</li>
