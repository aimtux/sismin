<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\NamaKriminalitas;
use \Auth, \Redirect, \Validator, \Input, \Session;
use Illuminate\Http\Request;

class NamaKriminalitasController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		if (Auth::check())
		{
			$namakriminalitasku = NamaKriminalitas::all();
			return view('namakriminalitas.index')->with('namakriminalitas', $namakriminalitasku);
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
			return view('namakriminalitas.create');
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
	            'nama_kriminalitas' => 'required',
	        );
	        $validator = Validator::make(Input::all(), $rules);
	        // process the login
	        if ($validator->fails()) {
	            return Redirect::to('nama-kriminalitas/create')
	                ->withErrors($validator)
	                ->withInput(Input::except('password'));
	        } else {
	            // store
	            $namakriminalitasku = new NamaKriminalitas;
	            $namakriminalitasku->nama_kriminalitas = Input::get('nama_kriminalitas');
	            $namakriminalitasku->save();
	            // redirect
	            Session::flash('message', 'Berhasil membuat Nama Kriminalitas!');
	            return Redirect::to('nama-kriminalitas');
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
		$namakriminalitasku = NamaKriminalitas::find($id);
        return view('namakriminalitas.edit')
            ->with('namakriminalitas', $namakriminalitasku);
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
	            'nama_kriminalitas' => 'required',
	        );
	        $validator = Validator::make(Input::all(), $rules);
	        if ($validator->fails()) {
	            return Redirect::to('nama-kriminalitas/' . $id . '/edit')
	                ->withErrors($validator)
	                ->withInput(Input::except('password'));
	        } else {
	            // simpan
	            $namakriminalitasku = NamaKriminalitas::find($id);
	            $namakriminalitasku->nama_kriminalitas = Input::get('nama_kriminalitas');
	            $namakriminalitasku->save();
	            // redirect
	            Session::flash('message', 'Berhasil mengganti Nama Kriminalitas!');
	            return Redirect::to('nama-kriminalitas');
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
			$namakriminalitasku = NamaKriminalitas::find($id);
	        $namakriminalitasku->delete();
	        // redirect
	        Session::flash('message', 'Berhasil menghapus NamaKriminalitas!');
	        return Redirect::to('nama-kriminalitas');
		}
		else
		{
			return Redirect::to('/auth/login');
		}
	}

}
