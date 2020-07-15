<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $pessoa_id
 * @property string $nome
 * @property string $data_nascimento
 * @property string $created_at
 * @property string $updated_at
 * @property CadastroPessoa $cadastroPessoa
 */
class CadastroDependente extends Model
{
    protected $table = 'cadastro_dependentes';
    /**
     * @var array
     */
    protected $fillable = ['pessoa_id', 'nome', 'data_nascimento', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cadastroPessoa()
    {
        return $this->belongsTo(CadastroPessoa::class, 'pessoa_id');
    }
}
