<?php
/**
 * Created by PhpStorm.
 * User: blegoh
 * Date: 02/11/15
 * Time: 5:34
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class UKT extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'UKT';

    /**
     * @var string
     */
    protected $primaryKey = 'UKTID';

    public $timestamps = false;

    public function golongan()
    {
        return $this->belongsTo('App\Models\Golongan','GolID');
    }
}