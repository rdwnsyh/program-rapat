<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Post extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['cari'] ?? false, function ($query, $cari) {
            return $query->where('rapat', 'like', '%' . $cari . '%')
                ->orWhere('tanggal', 'like', '%' . $cari . '%')
                ->orWhere('tempat', 'like', '%' . $cari . '%')
                ->orWhere('data', 'like', '%' . $cari . '%');
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'rapat'
            ]
        ];
    }
}
