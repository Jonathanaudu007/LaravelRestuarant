<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /**
     * Get the menus for the categories.
     */
    public function menu()
    {
        return $this->hasMany(Menu::class);
    }



    /**
     * Get the menus for the categories.
     */
    public function drink()
    {
        return $this->hasMany(Drink::class);
    }
}
