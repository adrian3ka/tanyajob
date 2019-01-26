<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\MasterDegree;
use App\MasterMajor;
use App\MasterSkillSet;
use App\MasterLocation;
use App\MasterFacility;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
	
	/*kalo ga login ga bisa masuk*/
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        echo "test";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        echo "store";
        echo $request;
    }

    public function show($id)
    {
        echo $id;
    }

    public function edit($id)
    {
        return view('user/edit',[
			'master_degree' => MasterDegree::all(),
			'master_major' => MasterMajor::orderBy('name')->get(),
			'skill_set' => MasterSkillSet::orderBy('name')->get(),
			'master_location' => MasterLocation::orderBy('name')->get(),
			'facility' => MasterFacility::orderBy('name')->get(),
		]);
    }

    public function update(UserRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $input = $request->all();
        
        $user->update($request->all());
        $user->date_of_birth = $input['date_of_birth'];
        $user->gender = $input['gender'];
        $user->last_degree_id = $input['last_degree_id'];
        $user->major_id = $input['major_id'];
        $user->expected_salary_lower = $input['expected_salary_lower'];
        $user->expected_salary_upper = $input['expected_salary_upper'];
        
        $user->expectedLocations()->sync($input['location_id']);
        $user->skillSets()->sync($input['skill_set_id']);
        $user->expectedFacilities()->sync($input['facility_id']);
        echo $user->save();
		return redirect ('home');
    }


    public function destroy($id)
    {
        echo "destroy";
    }
}
