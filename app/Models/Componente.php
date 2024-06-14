<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Componente
 *
 * @property $id
 * @property $description
 * @property $model
 * @property $problem
 * @property $brand
 * @property $text
 * @property $name
 * @property $item_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Item $item
 * @property Operation[] $operations
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Componente extends Model
{

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['description', 'model', 'problem', 'brand', 'text', 'name', 'item_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function item()
    {
        return $this->belongsTo(\App\Models\Item::class, 'item_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function operations()
    {
        return $this->hasMany(\App\Models\Operation::class, 'id', 'component_id');
    }

}
