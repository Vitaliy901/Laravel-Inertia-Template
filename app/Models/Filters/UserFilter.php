<?php

namespace App\Model\Filter;

class UsersFilter extends AbstractQueryFilter
{
    public function firstName(string $param): void
    {
        $this->builder->where('first_name', 'like', "%{$param}%");
    }

    public function email(string $param): void
    {
        $this->builder->where('email', '=', $param);
    }
}
