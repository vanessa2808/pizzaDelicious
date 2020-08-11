<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'status';
    protected $fillable = ['name', 'created_at', 'updated_at'];
    /**
     * Relation with model Orders
     *
     * @retun mix
     */
    public function orders() {
        return $this->hasMany('App\Models\Orders', 'status_id', 'id');
    }
}
