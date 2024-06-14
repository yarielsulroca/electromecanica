<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Item
 *
 * @property $id
 * @property $name
 * @property $model
 * @property $casification
 * @property $brand
 * @property $description
 * @property $about
 * @property $service_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Service $service
 * @property Component[] $components
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Item extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name', 'model', 'casification', 'brand', 'description', 'about', 'service_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function service()
    {
        return $this->belongsTo(\App\Models\Service::class, 'service_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function components()
    {
        return $this->hasMany(\App\Models\Component::class, 'id', 'item_id');
    }
    
}
