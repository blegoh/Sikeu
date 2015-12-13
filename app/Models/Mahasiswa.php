<?php
/**
 * Created by PhpStorm.
 * User: blegoh
 * Date: 05/11/15
 * Time: 21:02
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'Mahasiswa';

    /**
     * @var string
     */
    protected $primaryKey = 'NIM';

    public $timestamps = false;

    public function ukt(){
        return $this->belongsTo('App\Models\UKT','UKTID');
    }

    public function prodi(){
        return $this->belongsTo('App\Models\Prodi','ProdiID');
    }
}