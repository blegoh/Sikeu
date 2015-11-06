<?php
/**
 * Created by PhpStorm.
 * User: blegoh
 * Date: 05/11/15
 * Time: 11:27
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Tagihan extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'Tagihan';

    public $timestamps = false;

    public function nama(){
        return $this->belongsTo('App\Models\Mahasiswa','NIM');
    }
}