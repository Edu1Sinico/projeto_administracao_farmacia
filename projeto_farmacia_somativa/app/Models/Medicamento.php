<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class medicamento extends Model
{
    use HasFactory;
    protected $fillable = [
        'descricao',
        'quantidade',
        'preco'
    ];

    public function total(){
        return $this->preco*$this->quantidade;
    }

    public function quantidade(){
        return $this->quantidade;
    }
}
