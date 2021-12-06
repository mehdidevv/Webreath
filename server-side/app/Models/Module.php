<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function mesures()
    {
        return $this->hasMany(Mesures::class);
    }

    public function histories()
    {
        return $this->hasMany(History::class);
    }
}
