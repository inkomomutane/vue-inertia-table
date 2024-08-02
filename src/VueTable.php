<?php

namespace Mutane\VueTable;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\JsonResponse;
use Mutane\VueTable\Data\TableDto;

class VueTable {

    protected string $model = '';
    public function columns(): array {
        return [];
    }

    public function make(): JsonResponse
    {

        $columns = array_map(static function($column) {
            return $column->toArray();
        }, $this->columns());


        return response()->json(new TableDto(
            columns: $columns,
            filters: [],
            query: $this->getModelInstance()->select(['name'])->paginate(10)
        ));
    }


    private function getModelInstance(): Builder {

        // check if the model is set and can be used as an Eloquent model
        if (!class_exists($this->model)) {
            throw new \InvalidArgumentException("The model $this->model does not exist");
        }
        return $this->model::query();
    }
}
