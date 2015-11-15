<?php
/**
 * Created by PhpStorm.
 * User: blegoh
 * Date: 13/11/15
 * Time: 18:39
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'Fakultas';

    /**
     * @var string
     */
    protected $primaryKey = 'FakultasID';

    public function prodi(){
        return $this->hasMany('App\Models\Prodi','FakultasID');
    }
}