<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{

    use HasFactory;
    protected $table = 'wishlist';
    /**

     * The attributes that are mass assignable.

     *

     * @var array

     */

    protected $fillable = [
        'user_id',
        'product_id',
        'status',
    ];
}
