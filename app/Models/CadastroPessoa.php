<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $nome
 * @property string $data_nascimento
 * @property string $email
 * @property string $foto
 * @property boolean $is_active
 * @property string $created_at
 * @property string $updated_at
 * @property CadastroDependente[] $cadastroDependentes
 */
class CadastroPessoa extends Model
{
    protected $table = 'cadastro_pessoas';
    /**
     * @var array
     */
    protected $fillable = ['nome', 'data_nascimento', 'email', 'foto', 'is_active', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cadastroDependentes()
    {
        return $this->hasMany(\CadastroDependente::class, 'pessoa_id');
    }
}
