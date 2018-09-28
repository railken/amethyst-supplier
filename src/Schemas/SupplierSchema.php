<?php

namespace Railken\Amethyst\Schemas;

use Railken\Lem\Attributes;
use Railken\Lem\Schema;

class SupplierSchema extends Schema
{
    /**
     * Get all the attributes.
     *
     * @var array
     */
    public function getAttributes()
    {
        return [
            Attributes\IdAttribute::make(),
            Attributes\TextAttribute::make('name'),
            Attributes\LongTextAttribute::make('description'),
            Attributes\LongTextAttribute::make('notes'),
            Attributes\BooleanAttribute::make('enabled'),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}
