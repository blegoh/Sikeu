<?php
/**
 * Created by PhpStorm.
 * User: blegoh
 * Date: 09/11/15
 * Time: 10:33
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class PermohonanBelanja extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'PermohonanBelanja';

    /**
     * @var string
     */
    protected $primaryKey = 'NoPermohonan';

    public $timestamps = false;

    public function details(){
        return $this->hasMany('App\Models\DetailPermohonan','NoPermohonan');
    }
}