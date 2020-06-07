<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';
    protected $fillable = ['nombre','descripcion'];


    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'descripcion' =>'string'
    ];

    public static $rules = [
        'nombre' => 'max:100|required',
        'descripcion' => 'max:255'
    ];

    public static $message = [
        'nombre.required' => 'El Nombre es un Campo Requerido',
        'nombre.max' => 'El Nombre supera el limit 100 caracteres',
        'descripcion.max' => 'El Descripcion supera el limit 100 caracteres',
    ];
    // Relacion  con los Posts, una categoria tiene muchos posts
    public function posts(){
        return $this->hasMany(Post::class,'categoria_id','id');
    }
   


}
