<?php
/**
 * Created by PhpStorm.
 * User: blegoh
 * Date: 09/11/15
 * Time: 10:34
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class DetailPermohonan extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'DetailPermohonan';

    /**
     * @var string
     */
    protected $primaryKey = 'DetailID';

    /**
     * @var bool
     */
    public $timestamps = false;
}