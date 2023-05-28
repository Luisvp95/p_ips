<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Area
 *
 * @property $id
 * @property $name
 * @property $segment
 * @property $gateway
 * @property $mask
 * @property $range
 * @property $created_at
 * @property $updated_at
 *
 * @property Ip[] $ips
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Area extends Model
{
    
    static $rules = [
		'name' => 'required',
		'segment' => 'required',
		'gateway' => 'required',
		'mask' => 'required',
		'range' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','segment','gateway','mask','range'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ips()
    {
        return $this->hasMany('App\Models\Ip', 'area_id', 'id');
    }
    

}
