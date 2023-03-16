<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class post extends Model
{
    use HasFactory;
    use SoftDeletes;

    // Mendekrasikan  Relasi 1 blog bisa memiliki banyak komen hasMany //
    public function comments() {
        return $this->hasMany(comment::class);
    }

    public function total_comments(){
        return $this->comments()->count();
    }

    // Index //
    public function scopeActive($query) {
        return $query-> where('active', true);
    }

    // Show //
    public function scopeSelectById($query, $id) {
        return $query -> where('id', $id);
    }

}
