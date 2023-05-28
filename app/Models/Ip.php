<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ip
 *
 * @property $id
 * @property $description
 * @property $area_id
 * @property $ip
 * @property $status
 * @property $created_at
 * @property $updated_at
 *
 * @property Area $area
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ip extends Model
{
    
    static $rules = [
		'description' => 'required',
		'area_id' => 'required',
		'ip' => 'required',
		'status' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['description','area_id','ip','status'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function area()
    {
        return $this->hasOne('App\Models\Area', 'id', 'area_id');
    }
    
    

}
