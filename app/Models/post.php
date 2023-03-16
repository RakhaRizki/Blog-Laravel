<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class post extends Model
{
    use HasFactory;
    use SoftDeletes;

    // Index //
    public function scopeActive($query){
        return $query-> where('active', true);
    }

    // Show //
    public function scopeSelectById($query, $id){
        return $query -> where('id', $id);
    }

}
