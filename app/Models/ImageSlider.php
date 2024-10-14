<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageSlider extends Model
{
    use HasFactory;

    // Aquí definimos los campos que se pueden asignar masivamente
    protected $fillable = ['filename', 'location', 'path'];

    // Puedes agregar relaciones si fuera necesario, por ejemplo, si las imágenes están asociadas a un usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
