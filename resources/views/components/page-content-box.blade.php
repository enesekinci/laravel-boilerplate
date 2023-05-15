    <!-- Individual Column Searching (Text Inputs) start -->
    <div class="col-sm-12">
        <div class="card">
            @if (isset($title) && isset($description))
                <div class="card-header">
                    <h5>{{ $title }}</h5>
                    <small>{{ $description }}</small>
                </div>
            @endif
            <div class="card-body">
                {{ $slot }}
                {{-- Eğer datada sayfalama varsa --}}
            </div>
        </div>
    </div>
    <!-- Individual Column Searching (Text Inputs) end -->
