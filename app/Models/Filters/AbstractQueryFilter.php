<?php

namespace App\Models\Filters;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

abstract class AbstractQueryFilter
{
    protected EloquentBuilder $builder;

    public function __construct(protected Request $request)
    {
    }

    public function apply(Builder $builder)
    {
        $this->builder = $builder;

        foreach ($this->fields() as $field => $value) {
            $method = Str::camel($field);
            if (method_exists($this, $method)) {
                call_user_func_array([$this, $method], (array)$value);
            }
        }

        return $this->builder;
    }

    protected function fields(): array
    {
        return array_filter(
            array_map(function (mixed $item) {
                return is_string($item) ? trim($item) : $item;
            }, $this->filters())
        );
    }

    /**
     * Get filter parameters from a request.
     *
     * @return array
     */
    private function filters(): array
    {
        return $this->request->validated();
    }
}
