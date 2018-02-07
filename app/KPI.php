<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KPI extends Model
{
    protected $table = 'CMD_M_KPI';
    protected $fillable = ['KPI', 'CMD_IDX_M_Department'];
    protected $primaryKey = 'CMD_IDX_M_KPI';

    const CREATED_AT = 'DCreate';
    const UPDATED_AT = 'DModified';
}
