<?php namespace App\Http\Controllers;

use App\Club;
use App\Http\Requests;
use App\User;
use App\Http\Controllers\Controller;
use Auth;
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
        $clubs = Club::where('user_id', '=', Auth::user()->id)->get();
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
        return 'You can\'t not create another club.';
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

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
	public function edit($id)
	{
		$club = Club::find($id);
        return view('clubs.edit', compact('club'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input =  \Illuminate\Support\Facades\Request::all();

		$club = Club::find($id);
		$club->name 		= $input['name'];
		$club->owner 		= $input['owner'];
		$club->secretory 	= $input['secretory'];
		$club->admin 		= $input['admin'];
		$club->address1		= $input['address1'];
		$club->address2		= $input['address2'];
		$club->city			= $input['city'];
		$club->postcode		= $input['postcode'];
		$club->county		= $input['county'];

		$club->save();

		$user = Auth::user();

		$user->club_name = $input['name'];
		$user->save();

		return redirect('clubs');
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
