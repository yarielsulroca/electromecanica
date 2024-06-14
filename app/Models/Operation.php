<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Operation
 *
 * @property $id
 * @property $description
 * @property $name
 * @property $about
 * @property $date_int
 * @property $date_out
 * @property $worker_id
 * @property $labour_id
 * @property $componente_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Componente $componente
 * @property Labour $labour
 * @property Worker $worker
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Operation extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['description', 'name', 'about', 'date_int', 'date_out', 'worker_id', 'labour_id', 'componente_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function componente()
    {
        return $this->belongsTo(\App\Models\Componente::class, 'componente_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function labour()
    {
        return $this->belongsTo(\App\Models\Labour::class, 'labour_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function worker()
    {
        return $this->belongsTo(\App\Models\Worker::class, 'worker_id', 'id');
    }
    
}
