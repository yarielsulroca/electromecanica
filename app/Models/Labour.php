<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Labour
 *
 * @property $id
 * @property $value
 * @property $tax
 * @property $budjet_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Budjet $budjet
 * @property Operation[] $operations
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Labour extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['value', 'tax', 'budjet_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function budjet()
    {
        return $this->belongsTo(\App\Models\Budjet::class, 'budjet_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function operations()
    {
        return $this->hasMany(\App\Models\Operation::class, 'id', 'labour_id');
    }
    
}
