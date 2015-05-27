<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model {

	// untuk menampilkan nama kecamatan di resources/views/kelurahan/index.blade.php
	public function kecamatan()
    {
        return $this->belongsTo('App\Kecamatan');
    }

    // untuk mengambil daftar nama kecamatan dan id untuk dropdown di:
    // resources/views/kelurahan/create.blade.php dan edit.blade.php
    public function getKecamatanLists()
	{
		return Kecamatan::lists('nama_kecamatan', 'id');
	}

}
