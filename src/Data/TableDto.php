<?php

namespace Mutane\VueTable\Data;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class TableDto
{
    public function __construct(
        public array $columns,
        public array $filters,
        public null|Builder|Model|LengthAwarePaginator|Collection|\Illuminate\Database\Eloquent\Collection $query,
    ){
    }
}
