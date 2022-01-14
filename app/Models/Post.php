<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['competition_id', 'match'];

    public function Competition()
    {
        return $this->belongsTo(Competition::class);
    }

}
