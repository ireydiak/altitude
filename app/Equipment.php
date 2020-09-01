<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * The abstract representation of an equipment.
 */
class Equipment extends Model
{
    use SoftDeletes;

    /**
     * The database table name
     *
     * @var string
     */
    protected $table = 'equipment';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description'
    ];

    /**
     * Validation rules
     *
     * @var string[]
     */
    public static $rules = [
        'name' => 'required|unique:equipment,name',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inventories() {
        return $this->hasMany('App\\Inventory');
    }
}
