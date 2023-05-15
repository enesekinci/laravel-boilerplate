<?php

namespace App\View\Components\Dashboard;

use Closure;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class Table extends Component
{
    public function __construct(
        // public array|null $headers = [],
        public array $columns,
        public array|Collection|Arrayable $data,
        public bool $pagination = false,
    ) {
    }

    public function render(): View|Closure|string
    {
        return view('components.dashboard.table', [
            // 'headers' => $this->headers,
            'columns' => $this->columns,
            'data' => $this->data,
            'pagination' => $this->pagination,
        ]);
    }
}
