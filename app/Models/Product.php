<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable=['name', 'description','price', 'category_id', 'quantity', 'image'];
    public function category():BelongsTo
    {
    return $this->belongsTo(Category::class);
    }
    public function photo():HasMany
    {
    return $this->hasMany(Photo::class);
    }
}
