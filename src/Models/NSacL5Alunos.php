<?php

namespace Andcarpi\NsacL5Models\Models;

use Illuminate\Database\Eloquent\Model;

class NSacL5Alunos extends Model
{
    protected $connection = 'NSacL5';

    protected $table = 'alunos.dados';
}
