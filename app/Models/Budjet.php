<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Budjet
 *
 * @property $id
 * @property $value
 * @property $value_dolar
 * @property $operation_value
 * @property $forma_pago
 * @property $worder_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Workorder $workorder
 * @property Labour[] $labours
 * @property Part[] $parts
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Budjet extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['value', 'value_dolar', 'operation_value', 'forma_pago', 'worder_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function workorder()
    {
        return $this->belongsTo(\App\Models\Workorder::class, 'worder_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function labours()
    {
        return $this->hasMany(\App\Models\Labour::class, 'id', 'budjet_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function parts()
    {
        return $this->hasMany(\App\Models\Part::class, 'id', 'budjet_id');
    }
    
}
