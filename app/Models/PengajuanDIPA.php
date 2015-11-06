<?php
/**
 * Created by PhpStorm.
 * User: blegoh
 * Date: 06/11/15
 * Time: 19:30
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class PengajuanDIPA extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'PengajuanDIPA';

    /**
     * @var string
     */
    protected $primaryKey = 'NomerPengajuan';

    public function details(){
        return $this->hasMany('App\Models\DetailPengajuan.php','KodeMax');
    }
}