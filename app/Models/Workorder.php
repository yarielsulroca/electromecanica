<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Workorder
 *
 * @property $id
 * @property $user_id
 * @property $about
 * @property $problems
 * @property $date_init
 * @property $date_end
 * @property $client_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Client $client
 * @property Budjet[] $budjets
 * @property Typeorder[] $typeorders
 * @property Waranty[] $waranties
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Workorder extends Model
{
    use HasFactory;
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['user_id', 'about', 'problems', 'date_init', 'date_end', 'client_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function client()
    {
        return $this->belongsTo(\App\Models\Client::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function budjets()
    {
        return $this->hasMany(\App\Models\Budjet::class, 'id', 'worder_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function typeorders()
    {
        return $this->hasMany(\App\Models\Typeorder::class, 'id', 'worder_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function waranties()
    {
        return $this->hasMany(\App\Models\Waranty::class, 'id', 'worder_id');
    }

}
