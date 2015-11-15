<?php
/**
 * Created by PhpStorm.
 * User: blegoh
 * Date: 07/11/15
 * Time: 16:50
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Wisuda extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'Wisuda';

    /**
     * @var string
     */
    protected $primaryKey = 'WisudaID';
}