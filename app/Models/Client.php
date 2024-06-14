<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Client
 *
 * @property $id
 * @property $contacto
 * @property $social
 * @property $direccion
 * @property $ciudad
 * @property $nombre_cliente
 * @property $cuit
 * @property $email
 * @property $telefono_cliente
 * @property $telefono_contacto
 * @property $allow
 * @property $created_at
 * @property $updated_at
 *
 * @property Workorder[] $workorders
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Client extends Model
{
    use HasFactory;
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['contacto', 'social', 'direccion', 'ciudad', 'nombre_cliente', 'cuit', 'email', 'telefono_cliente', 'telefono_contacto', 'allow'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function workorders()
    {
        return $this->hasMany(\App\Models\Workorder::class);
    }

}
