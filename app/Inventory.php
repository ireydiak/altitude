<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Represents a physical EquipmentController
 */
class Inventory extends Model
{
    use SoftDeletes;

    /**
     * The database table name
     *
     * @var string
     */
    protected $table = 'inventory';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'info', 'sku', 'description', 'notes', 'state', 'price', 'purchase_date'
    ];

    /**
     * Used for validation
     *
     * @var string[]
     */
    public static $rules = [
        'sku' => 'required|unique,inventory,sku'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function equipment() {
        return $this->belongsTo('App\\Equipment');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function images() {
        return $this->hasMany('App\\InventoryImage');
    }
}
