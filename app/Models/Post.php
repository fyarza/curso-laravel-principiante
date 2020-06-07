<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = ['title','body','categoria_id','user_id'];
    protected $date = ['published_at'];

    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'body' =>'string',
        'categoria_id' => 'integer',
        'user_id' => 'integer'
    ];

    public static $rules = [
        'title' => 'string|max:100|required',
        'body' => 'string',
        'categoria_id' => 'integer',
        'published_at' => 'date',
        'user_id' => 'integer|required'
    ];

    public static $message = [
        'title.required' => 'El title es un Campo Requerido',
        'title.string' => 'El title debe ser un string',
        'title.max' => 'El title supera el limit 100 caracteres',
        'body.string' => 'El Body debe ser un string',
        'categoria_id.integer' => 'La Categoria debe ser un Entero',
        'user_id.integer' => 'El Usuario debe ser un Entero',
        'user_id.required' => 'El Usuario es requerido'
    ];

    // relacion un post pertenece a una categoria
    public function categoria() {
        return $this->belongsTo(Categoria::class, 'categoria_id', 'id');
    }

    // relacion de usuario, un post pertenece a un usuario
    public function user(){
        return $this->belongsTo(User::class, 'user_id','id');
    }
}
