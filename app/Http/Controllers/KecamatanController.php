<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Kecamatan;
use \Auth, \Redirect, \Validator, \Input, \Session;
use Illuminate\Http\Request;

class KecamatanController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		if (Auth::check())
		{
			$kecamatanku = Kecamatan::all();
			return view('kecamatan.index')->with('kecamatan', $kecamatanku);
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
			return view('kecamatan.create');
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
	            'nama_kecamatan' => 'required',
	        );
	        $validator = Validator::make(Input::all(), $rules);
	        // process the login
	        if ($validator->fails()) {
	            return Redirect::to('kecamatan/create')
	                ->withErrors($validator)
	                ->withInput(Input::except('password'));
	        } else {
	            // store
	            $kecamatanku = new Kecamatan;
	            $kecamatanku->nama_kecamatan = Input::get('nama_kecamatan');
	            $kecamatanku->save();
	            // redirect
	            Session::flash('message', 'Berhasil membuat Kecamatan!');
	            return Redirect::to('kecamatan');
	        }
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
		$kecamatanku = Kecamatan::find($id);
        return view('kecamatan.edit')
            ->with('kecamatan', $kecamatanku);
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
            'nama_kecamatan' => 'required',
        );
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return Redirect::to('kecamatan/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // simpan
            $kecamatanku = Kecamatan::find($id);
            $kecamatanku->nama_kecamatan = Input::get('nama_kecamatan');
            $kecamatanku->save();
            // redirect
            Session::flash('message', 'Berhasil mengganti Kecamatan!');
            return Redirect::to('kecamatan');
        }
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
		$kecamatanku = Kecamatan::find($id);
        $kecamatanku->delete();
        // redirect
        Session::flash('message', 'Berhasil menghapus Kecamatan!');
        return Redirect::to('kecamatan');
	}

}
