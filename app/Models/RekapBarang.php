<?php
/**
 * Created by PhpStorm.
 * User: blegoh
 * Date: 13/12/15
 * Time: 20:34
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class RekapBarang extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'rekapbarang';

    /**
     * @var string
     */
    protected $primaryKey = 'id';
}