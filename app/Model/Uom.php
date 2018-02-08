<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Uom extends Model
{
    protected $table = 'CMD_M_UoM';
    protected $fillable = ['UoMID', 'UoMDescription'];
    protected $primaryKey = ['IDX_CMD_M_UoM'];

    const CREATED_AT = 'DCreate';
    const UPDATED_AT = 'DModified';

    public function getUoM() {
        
        //$table = 'CMD_M_UoM';
        //$uom = DB::select('SELECT * FROM CMD_M_UoM');
        //$uom = DB::table($table);
        $uom = Uom::paginate(2);

        return $uom;

    }
}
