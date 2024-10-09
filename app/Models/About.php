<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'company_about'];

    /**
     * Define the relationship with the User model.
     * Each 'About' belongs to one user (the clothing business).
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
