<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InventoryImage extends Model
{
    /**
     * The database table name
     *
     * @var string
     */
    protected $table = 'inventory_image';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'url', 'image_type'
    ];

    /**
     * Validation rules
     *
     * @var string[]
     */
    public static $rules = [
        'url' => 'required|unique:inventory_image,url',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function inventory() {
        return $this->belongsTo('App\\Inventory');
    }
}
