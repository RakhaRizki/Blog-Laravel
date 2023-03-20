<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class post extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'content',
    ];
    
    // Mendekrasikan Relasi 1 blog bisa memiliki banyak komen hasMany //
    public function comments() {
        return $this->hasMany(comment::class);
    }

    public function total_comments(){
        return $this->comments()->count();
    }

    public function scopeStatus($query, $bool) {
        return $query-> where('active', $bool);
    }

    // Show //
    public function scopeSelectById($query, $id) {
        return $query -> where('id', $id);
    }

    // Membuat URI Slug //
    public static function boot(){
        parent::boot();

        static::creating(function($post){
            $post->slug = str_replace(' ','-',
            $post->title);
        });
    }

}
