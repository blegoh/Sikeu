<?php
/**
 * Created by PhpStorm.
 * User: blegoh
 * Date: 13/12/15
 * Time: 17:46
 */

namespace App\Models;


use Carbon\Carbon;

class TagihanUKT
{
    private $tagihans;
    private $sudah;
    private $belum;
    private $tgl;
    private $smt;
    private $thn;
    private $temp;

    public function __construct()
    {
        $this->sudah = 0;
        $this->belum = 0;
        $this->tgl = Carbon::today();
        $this->smt = ($this->tgl->month > 6)? 1 : 2;
        $this->thn = ($this->smt == 1)? $this->tgl->year.$this->tgl->year+1 : ($this->tgl->year-1).$this->tgl->year;
        $this->setModel();
    }

    public function setTahunAkademik($thn)
    {
        $this->thn = $thn;
        $this->setModel();
    }

    private function setModel(){
        $this->tagihans = Tagihan::where('SmtAkademik',$this->smt)
            ->where('ThnAkademik',$this->thn)
            ->where('JenisTagihanID','1');
        $this->temp = Tagihan::where('SmtAkademik',$this->smt)
            ->where('ThnAkademik',$this->thn)
            ->where('JenisTagihanID','1');
    }

    public function setFakultas($fakultasID)
    {
        $this->tagihans = $this->tagihans->whereHas('nama', function ($query) use ($fakultasID)
        {
            $query->whereHas('prodi', function($a) use ($fakultasID)
            {
                $a->where('FakultasID',$fakultasID);
            });
        });
        $this->temp = $this->temp->whereHas('nama', function ($query) use ($fakultasID)
        {
            $query->whereHas('prodi', function($a) use ($fakultasID)
            {
                $a->where('FakultasID',$fakultasID);
            });
        });
    }

    public function getTagihan(){
        $this->temp = $this->temp->get();
        $this->count();
        $this->tagihans = $this->tagihans->paginate(15);
        return $this->tagihans;
    }

    private function count(){
        foreach ($this->temp as $item) {
            if($item->TglBayar == null){
                $this->belum++;
            }else{
                $this->sudah++;
            }
        }
    }

    public function getSudah(){
        return $this->sudah;
    }

    public function getBelum(){
        return $this->belum;
    }


}