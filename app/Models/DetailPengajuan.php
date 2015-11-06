<?php
/**
 * Created by PhpStorm.
 * User: blegoh
 * Date: 06/11/15
 * Time: 19:35
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class DetailPengajuan extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'DetailPengajuan';

    /**
     * @var string
     */
    protected $primaryKey = 'KodeMax';
}