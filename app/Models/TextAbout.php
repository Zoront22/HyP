<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TextAbout extends Model
{
    use HasFactory;

    protected $table = 'texts_about';

    protected $fillable = ['title', 'subtitle', 'content', 'others'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
