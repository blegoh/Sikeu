<?php
/**
 * Created by PhpStorm.
 * User: blegoh
 * Date: 13/12/15
 * Time: 20:00
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class PengajuanSarpras extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'rekappengajuan';

    /**
     * @var string
     */
    protected $primaryKey = 'id';

    public function rekap(){
        return $this->hasMany('App\Models\RekapBarang','idRekap');
    }
}