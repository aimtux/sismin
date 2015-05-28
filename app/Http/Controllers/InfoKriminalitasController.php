<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Kelurahan;
use App\Kecamatan;
use App\NamaKriminalitas;
use App\InfoKriminalitas;
use \Auth, \Redirect, \Validator, \Input, \Session;
use Illuminate\Http\Request;

class InfoKriminalitasController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		if (Auth::check())
		{
			$infokriminalitasku = InfoKriminalitas::all();
			return view('infokriminalitas.index')->with('infokriminalitas', $infokriminalitasku);
		} 
		else
		{
			return Redirect::to('/auth/login');
		}
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		if (Auth::check())
		{
			$infokriminalitasku = InfoKriminalitas::all();
			$kecamatanku = Kecamatan::lists('nama_kecamatan', 'id');
			$kelurahanku = Kelurahan::lists('nama_kelurahan', 'id');
			$namakriminalitasku = NamaKriminalitas::lists('nama_kriminalitas', 'id');
			return view('infokriminalitas.create')
				->with('infokriminalitas', $infokriminalitasku)
				->with('kecamatan',$kecamatanku)
				->with('kelurahan',$kelurahanku)
				->with('namakriminalitas',$namakriminalitasku);
		}
		else
		{
			return Redirect::to('/auth/login');
		}
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		if (Auth::check())
		{
			$rules = array(
	            'kecamatan_id' => 'required',
	            'kelurahan_id' => 'required',
	            'namakriminalitas_id' => 'required',
	            'tgl_info' => 'required|date_format:"d-m-Y"',
	            'jam_info' => 'required|date_format:"H:i',
	            'informasi' => 'required',
	        );
	        $validator = Validator::make(Input::all(), $rules);
	        // process the login
	        if ($validator->fails()) {
	            return Redirect::to('info-kriminalitas/create')
	                ->withErrors($validator);
	        } else {
	            // store
	            $format_tgl_info_old = Input::get('tgl_info');
				$tgl_info = date("Y-m-d", strtotime($format_tgl_info_old));
				//$format_jam_info_old = Input::get('tgl_info');
				$tgl_info = date("Y-m-d", strtotime($format_tgl_info_old));
	            $infokriminalitasku = new InfoKriminalitas;
	            $infokriminalitasku->kecamatan_id = Input::get('kecamatan_id');
	            $infokriminalitasku->kelurahan_id = Input::get('kelurahan_id');
	            $infokriminalitasku->namakriminalitas_id = Input::get('namakriminalitas_id');
	            $infokriminalitasku->tgl_info = $tgl_info;
	            $infokriminalitasku->jam_info = Input::get('jam_info');
	            $infokriminalitasku->informasi = Input::get('informasi');
	            $infokriminalitasku->save();
	            // redirect
	            Session::flash('message', 'Berhasil membuat Informasi Kriminalitas!');
	            return Redirect::to('info-kriminalitas');
	        }
    	}
    	else
		{
			return Redirect::to('/auth/login');
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		if (Auth::check())
		{
			$infokriminalitasku = InfoKriminalitas::find($id);
			$kecamatanku = Kecamatan::lists('nama_kecamatan', 'id');
			$kelurahanku = Kelurahan::lists('nama_kelurahan', 'id');
			$namakriminalitasku = NamaKriminalitas::lists('nama_kriminalitas', 'id');
	        return view('infokriminalitas.edit')
	            ->with('infokriminalitas', $infokriminalitasku)
	            ->with('kecamatan',$kecamatanku)
	            ->with('kelurahan',$kelurahanku)
	            ->with('namakriminalitas',$namakriminalitasku);
        }
        else
		{
			return Redirect::to('/auth/login');
		}
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		if (Auth::check())
		{
			$rules = array(
	            'kecamatan_id'       => 'required',
	            'kelurahan_id'       => 'required',
	            'namakriminalitas_id'       => 'required',
	            'tgl_info' => 'required|date_format:"d-m-Y"',
	            'jam_info' => 'required|date_format:"H:i"',
	            'informasi'       => 'required',
	        );
	        $validator = Validator::make(Input::all(), $rules);
	        if ($validator->fails()) {
	            return Redirect::to('info-kriminalitas/' . $id . '/edit')
	                ->withErrors($validator);
	        } else {
	            // simpan
	            $format_tgl_info_old = Input::get('tgl_info');
				$tgl_info = date("Y-m-d", strtotime($format_tgl_info_old));
	            $infokriminalitasku = InfoKriminalitas::find($id);
	            $infokriminalitasku->kecamatan_id       = Input::get('kecamatan_id');
	            $infokriminalitasku->kelurahan_id      = Input::get('kelurahan_id');
	            $infokriminalitasku->namakriminalitas_id      = Input::get('namakriminalitas_id');
	            $infokriminalitasku->tgl_info = $tgl_info;
	            $infokriminalitasku->jam_info  = Input::get('jam_info');
	            $infokriminalitasku->informasi      = Input::get('informasi');
	            $infokriminalitasku->save();
	            // redirect
	            Session::flash('message', 'Berhasil mengganti Informasi Kriminalitas!');
	            return Redirect::to('info-kriminalitas');
	        }
        }
        else
		{
			return Redirect::to('/auth/login');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		if (Auth::check())
		{
			$infokriminalitasku = InfoKriminalitas::find($id);
	        $infokriminalitasku->delete();
	        // redirect
	        Session::flash('message', 'Berhasil menghapus Informasi Kriminalitas!');
	        return Redirect::to('info-kriminalitas');
		}
		else
		{
			return Redirect::to('/auth/login');
		}
	}

}
