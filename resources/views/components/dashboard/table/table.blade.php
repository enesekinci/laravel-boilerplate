<div>
    <div class="table-responsive">
        <table id="data-table" class="table table-striped table-bordered">
            <thead>
                <tr>
                    @foreach ($columns as $column)
                        <th>{{ trans('table.header.' . $column) }}</th>
                    @endforeach
                    <th>İşlemler</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $types = ['active', 'success', 'warning', 'danger', 'info', 'primary', 'secondary', 'light', 'dark'];
                @endphp
                @foreach ($data as $index => $item)
                    <tr class="table-{{ $types[$index % count($types)] }}">
                        @foreach ($columns as $column)
                            <x-dashboard.table.column :column="$column" :content="$item->{$column}" />
                        @endforeach
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-outline-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">İşlemler</button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <x-dashboard.table.action-link :url="route('posts.edit', $item['id'])" :title="'Düzenle'" />
                                    </li>
                                    <li>
                                        <x-dashboard.table.action-link :url="route('posts.destroy', $item['id'])" :title="'Sil'" />
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        @empty($data)
            <div class="alert alert-warning">
                <i class="fas fa-exclamation-triangle"></i> Kayıt bulunamadı.
            </div>
        @endempty

        @if ($pagination)
            <div class="d-flex justify-content-center">
                {{ $data->links('pagination::bootstrap-4') }}
            </div>
        @endif


        <script>
            const types = ['table-active', 'table-success', 'table-warning', 'table-danger', 'table-info', 'table-primary', 'table-secondary', 'table-light', 'table-dark'];

            const table = document.querySelector('#data-table');

            const tableRows = table.querySelectorAll('tbody tr');

            const theme = localStorage.getItem('dark_layout');

            if (theme === 'true') {
                tableRows.forEach((row, index) => {
                    types.forEach(type => {
                        row.classList.remove(type);
                    });
                });
            }
        </script>
    </div>
    {{ $slot }}
</div>
