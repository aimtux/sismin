<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model {

	public function kelurahan()
    {
        return $this->hasMany('App\Kelurahan');
    }

    public function infokriminalitas()
    {
        return $this->belongsTo('App\InfoKriminalitas');
    }

}
