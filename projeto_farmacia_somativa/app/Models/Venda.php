<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class venda extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_usuario',
        'id_medicamento',
        'total',
        'quantidade',
        'data'
    ];

    // Relação entre o venda e o usuário
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relação entre o venda e medicamento
    public function medicamento()
    {
        return $this->belongsTo(Medicamento::class);
    }
}
