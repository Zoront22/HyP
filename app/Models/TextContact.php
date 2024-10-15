<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TextContact extends Model
{
    use HasFactory;

    protected $table = 'text_contacts';

    protected $fillable = ['title', 'content', 'subtitle', 'others'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
