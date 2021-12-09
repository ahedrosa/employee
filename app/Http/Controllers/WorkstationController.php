<?php

namespace App\Http\Controllers;

use App\Models\Workstation;
use App\Models\Employee;
use Illuminate\Http\Request;

class WorkstationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('workstation.index',['workstations'=>Workstation::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('workstation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [];
        $data['message'] = 'New workstation has been inserted successfully.';
        $data['type'] = 'success';
        $workstation = new workstation($request->all());
        try {
            $result = $workstation->save();
        } catch( \Exception $e) {
            $result = false;
        }
        if(!$result) {
            $data['message'] = 'The workstation can not be inserted.';
            $data['type'] = 'danger';
            return back()->withInput()->with($data);
        }
        return redirect('workstation')->with($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Workstation  $workstation
     * @return \Illuminate\Http\Response
     */
    public function show(Workstation $workstation)
    {
        return view('workstation.show', ['workstation'=>$workstation]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Workstation  $workstation
     * @return \Illuminate\Http\Response
     */
    public function edit(Workstation $workstation)
    {
        $data = [];
        $data['workstation'] = $workstation;
        return view('workstation.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Workstation  $workstation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Workstation $workstation)
    {
        $data = [];
        $data['message'] = 'The workstation ' . $workstation->name . ' has been updated successfully.';
        $data['type'] = 'success';
        try {
            $result = $workstation->update($request->all());
            
        } catch( \Exception $e) {
            $result = false;
        }
        if(!$result) {
            $data['message'] = 'The workstation can not be updated.';
            $data['type'] = 'danger';
            return back()->withInput()->with($data);
        }
        return redirect('workstation')->with($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Workstation  $workstation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Workstation $workstation)
    {
        
        $data = [];
        $data['message'] = 'The workstation ' . $workstation->name . ' has been removed, may some employees has been affected.';
        $data['type'] = 'success';
        $employees = Employee::all();
        try {
            foreach($employees as $employee){
                if($employee->idworkstation == $workstation->id){
                   
                   $employee->idworkstation = null;
                   $employee->save();
                }
            }
            $workstation->delete();
        } catch( \Exception $e) {
            $data['message'] = 'The workstation ' . $workstation->name . ' has NOT been removed.';
            $data['type'] = 'danger';
        }
        
        
        return redirect('workstation')->with($data);
    
    }
}
