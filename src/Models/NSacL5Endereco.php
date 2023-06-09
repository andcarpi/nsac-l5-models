<?php

namespace Andcarpi\NsacL5Models\Models;

class NSacL5Endereco extends BaseModel
{
    protected $table = 'alunos.endereco';

    public function cidades()
    {
        return $this->belongsTo(NSacL5Cidade::class, 'cidade', 'codigo');
    }
}
