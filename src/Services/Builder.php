<?php

namespace Vormkracht10\FluentMultivers\Services;

use namespace App\Connectors\Multivers;

class Builder
{
    /** @var string */
    protected $query = '';

    /** @var array */
    protected $attributes = [];

    public function builder(string $query): self
    {
        $this->query .= $query;

        return $this;
    }

    public function get(): array
    {
        return Multivers::execute($this->query, 'get');
    }

    public function post(): array
    {
        return Multivers::execute($this->query, 'post', $this->attributes);
    }
}
