<?php
/**
 * Created by PhpStorm.
 * User: blegoh
 * Date: 31/10/15
 * Time: 7:45
 */

namespace app\Models;


use Illuminate\Database\Eloquent\Model;

class Golongan extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'Golongan';

    /**
     * @var string
     */
    protected $primaryKey = 'GolID';
}