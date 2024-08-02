<?php

namespace Mutane\VueTable\Data;

readonly class ColumnDto
{
    public function __construct(
        public string $name,
        public ?string $label,
        public bool $searchable = true,
        public bool $sortable = true,
        public bool $hidden = false
    ) {}
}
