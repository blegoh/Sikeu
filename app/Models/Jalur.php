<?php
/**
 * Created by PhpStorm.
 * User: blegoh
 * Date: 31/10/15
 * Time: 7:13
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Jalur extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'JalurMasuk';

    /**
     * @var string
     */
    protected $primaryKey = 'JalurID';
}