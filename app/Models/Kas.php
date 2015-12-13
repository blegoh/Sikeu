<?php
/**
 * Created by PhpStorm.
 * User: blegoh
 * Date: 13/12/15
 * Time: 19:58
 */

namespace App\Models;


class Kas
{

    /**
     * @var ItemKas
     */
    private $kas;

    public function __construct()
    {
        $sarpras = PengajuanSarpras::all();
        foreach ($sarpras as $sarpras) {
            $a = new ItemKas();
            $a->tanggal = $sarpras->created_at;
            $a->uraian = $sarpras->jenis;
            $a->nominal = $sarpras->rekap->sum('harga');
            $a->jenis = "pengeluaran";
            $this->addItem($a);
        }
    }

    /**
     * @param ItemKas $kas
     */
    public function addItem(ItemKas $kas){
        $this->kas[] = $kas;
    }

    /**
     * @return mixed
     */
    public function getKas(){
        $this->sorting();
        return $this->kas;
    }

    private function sorting(){
        for($i=0;$i<count($this->kas)-1;$i++){
            for($j=0;$j<count($this->kas)-1-$i;$j++){
                if($this->kas[$j]->tanggal > $this->kas[$j+1]->tanggal){
                    $temp = $this->kas[$j]->tanggal;
                    $this->kas[$j]->tanggal = $this->kas[$j+1]->tanggal;
                    $this->kas[$j+1]->tanggal = $temp;
                }
            }
        }
    }
}