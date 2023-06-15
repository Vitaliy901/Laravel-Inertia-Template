<?php

declare(strict_types=1);

namespace App\Traits;

use App\Model\Filter\AbstractQueryFilter;
use Illuminate\Database\Eloquent\Builder;

/**
 * Filterable - Implements support for filters in the model.
 *
 * @method static Builder filter(AbstractQueryFilter $filter)
 */
trait Filterable
{
    /**
     * Apply filters.
     *
     * @param Builder $builder
     * @param AbstractQueryFilter $filter
     *
     * @return Builder
     */
    public function scopeFilter(Builder $builder, AbstractQueryFilter $filter): Builder
    {
        return $filter->apply($builder);
    }
}
