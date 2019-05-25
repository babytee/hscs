<?php

namespace App\Http\Controllers;

use App\Healthinfo;
use App\Patient;

use Illuminate\Http\Request;

class HealthinfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
	  public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
		$healths = Healthinfo::all();
		$patients = Patient::all();
		return view('hospital.health_information',compact('healths','patients'));
    }
	
	
	 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		return view('hospital.add_health_info',compact('id'));
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
		Healthinfo::create($request->all());
		return redirect()->route('healthinfo.index')->with('message', 'Patient Health Details Recorded.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Healthinfo  $healthinfo
     * @return \Illuminate\Http\Response
     */
    public function show(Healthinfo $healthinfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Healthinfo  $healthinfo
     * @return \Illuminate\Http\Response
     */
    public function edit(Healthinfo $healthinfo)
    {
        //
		$healthinfos = Healthinfo::findOrFail($healthinfo);
		return view('hospital.update_health_info',compact('healthinfos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Healthinfo  $healthinfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Healthinfo $healthinfo)
    {
        //
		//$healthinfo->update($request->all());
		//return redirect()->route('patient.edit',$patient->id)->with('message', 'Patient Record Updated.');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Healthinfo  $healthinfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Healthinfo $healthinfo)
    {
        //
    }
	
	public function addinfo($id){
		return view('hospital.add_health_info',compact('id'));
    }
	
	public function updateinfo(Request $request,Healthinfo $healthinfo){
		$healthinfo->update($request->all());
		return redirect()->route('updatehealthinfo',$id->id)->with('message', 'Patient Record Updated.');
    
    }
	
	
	 

    
}
