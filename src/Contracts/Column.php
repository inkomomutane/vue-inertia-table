<?php

namespace Mutane\VueTable\Contracts;

use Mutane\VueTable\Data\ColumnDto;

 class Column
{

    protected string $name;
    protected ?string $label;
    protected bool $searchable;
    protected bool $sortable;
    protected bool $hidden;

    private static array $instances = [];

    private  function __construct(string $name, ?string $label,bool $searchable = true,bool $sortable = true,bool $hidden = false) {
        $this->name = $name;
        $this->label = $label;
        $this->searchable = $searchable;
        $this->sortable = $sortable;
        $this->hidden = $hidden;
    }

    public static function create(string $name, ?string $label,bool $searchable = true,bool $sortable = true,bool $hidden = false): static {

        $instance = static::class;
        if (!is_subclass_of($instance, __CLASS__)) {
            throw new \InvalidArgumentException("The class $instance must be an instance of " . __CLASS__);
        }

        return new static($name, $label, $searchable, $sortable, $hidden);
    }

    public function label(string $label): static {
        $this->label = $label;
        return $this;
    }

    public function searchable(bool $searchable = true): static{
        $this->searchable = $searchable;
        return $this;
    }

    public function sortable(bool $sortable = true): static {
        $this->sortable = $sortable;
        return $this;
    }

    public function hide(): static {
        $this->hidden = true;
        return $this;
    }

    public function show(): static {
        $this->hidden = false;
        return $this;
    }

    public function hidden(bool $hidden = true): static {
        $this->hidden = $hidden;
        return $this;
    }

    public function toArray(): array {
        return [
            'name' => $this->name,
            'label' => $this->label,
            'searchable' => $this->searchable,
            'sortable' => $this->sortable,
            'hidden' => $this->hidden
        ];
    }

    public function toColumnDto(): ColumnDto {
        return new ColumnDto($this->name, $this->label, $this->searchable, $this->sortable, $this->hidden);
    }
}
