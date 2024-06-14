<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Waranty
 *
 * @property $id
 * @property $description_items
 * @property $client_id
 * @property $derechos
 * @property $date_end
 * @property $vias_reclamacion
 * @property $worder_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Workorder $workorder
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Waranty extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['description_items', 'client_id', 'derechos', 'date_end', 'vias_reclamacion', 'worder_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function workorder()
    {
        return $this->belongsTo(\App\Models\Workorder::class, 'worder_id', 'id');
    }
    
}
