<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Configuraciones extends Model
{
    use Traits\CompositePrimaryKey;

    protected $table = 'tblconfiguracion';
    protected $primaryKey = array('iIdConfiguracion');//[];
    //protected $primaryKey = 'seccion';
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable = [
			'cClave', 'cValor','cDescripcion'
		];

}