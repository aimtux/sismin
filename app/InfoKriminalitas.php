<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class InfoKriminalitas extends Model {

	public function kecamatan()
    {
        return $this->belongsTo('App\Kecamatan');
    }

    public function kelurahan()
    {
        return $this->belongsTo('App\Kelurahan');
    }

    public function namakriminalitas()
    {
        return $this->belongsTo('App\NamaKriminalitas');
    }

}
