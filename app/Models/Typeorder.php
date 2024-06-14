<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Typeorder
 *
 * @property $id
 * @property $worder_id
 * @property $problems
 * @property $date_init
 * @property $date_end
 * @property $condition
 * @property $created_at
 * @property $updated_at
 *
 * @property Workorder $workorder
 * @property Service[] $services
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Typeorder extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['worder_id', 'problems', 'date_init', 'date_end', 'condition'];


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
    public function services()
    {
        return $this->hasMany(\App\Models\Service::class, 'id', 'torder_id');
    }
    
}
