<?php

class TrakingsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// $arr = array ('a'=>1,'b'=>2,'c'=>3,'d'=>4,'e'=>5);
		// return json_encode($arr);

			// $personas = DB::table('personas')->orderBy('apellido', 'asc')->get();

			// $personas = Persona::all();

		 //return json_encode($personas);
		 echo "esto es el index";
		 return;

	}


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function home()
	{

		$tracks = DB::table('tracks')
											->orderBy('id', 'desc')
											->first();

		 return View::make('home', array(
			 								 'tracks' => $tracks
							 ));




	}




	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		$latitud = Input::get('latitud', 0);
		$longitud = Input::get('longitud', 0);

		// DB::table('tracks')->insert( array(
		// 	'latitud' => $latitud,
		// 	'longitud' => $longitud
		// ));

		$track = new Track;
		$track->latitud = $latitud;
		$track->longitud = $longitud;
		$track->save();


		$respuesta = array(
    		"state" => "ok",
    		"message" => "todo ok"
		);

		// $personas = Persona::all();
		return json_encode($respuesta);


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
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
