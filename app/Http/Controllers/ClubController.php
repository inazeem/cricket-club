<?php namespace App\Http\Controllers;

use App\Club;
use App\Http\Requests;
use App\User;
use App\Http\Controllers\Controller;

use Carbon\Carbon;
use Illuminate\Http\Request;


class ClubController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $clubs = Club::all();
        //return $clubs;
		return view('clubs.index',compact('clubs'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
        return view('clubs.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $input =  \Illuminate\Support\Facades\Request::all();
        $input['published_at'] = Carbon::now();

        $club = new Club;
        $club->name = $input['name'];
        $club->owner = $input['owner'];
        $club->secretory = $input['secretory'];
        $club->admin = $input['admin'];

        $club->save();

		return redirect('clubs');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $club = Club::findorfail($id);
        return view('clubs.show', compact('club'));
	}

	public function users(){
		$users = User::all();
		return view('clubs.users', compact('users'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Club $club)
	{
		//
        return view('projects.edit', compact('club'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Club $club)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Club $club)
	{
		//
	}

}
