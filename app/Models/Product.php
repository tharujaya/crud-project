<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'status',
        'category_id',
    ];
    /**
     * Get the user that owns the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category() 
    {
        return $this->belongsTo(Category::class);
    }
}