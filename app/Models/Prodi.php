<?php
/**
 * Created by PhpStorm.
 * User: blegoh
 * Date: 31/10/15
 * Time: 7:44
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'Prodi';

    /**
     * @var string
     */
    protected $primaryKey = 'ProdiID';

    public function ukts(){
        return $this->hasMany('App\Models\UKT','ProdiID');
    }

}