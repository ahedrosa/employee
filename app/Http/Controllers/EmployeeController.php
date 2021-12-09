<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Workstation;
use App\Models\Department;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('employee.index',['employees'=>employee::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Employee $employee)
    {
        $data = [];
        $data['workstations'] = Workstation::all();
        $data['departments'] = Department::all();
        $data['employee'] = $employee;
        
        
        return view ('employee.create', $data);
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
        $data['message'] = 'New employee has been inserted successfully.';
        $data['type'] = 'success';
        $employee = new employee($request->all());
        try {
            $result = $employee->save();
        } catch( \Exception $e) {
            $result = false;
        }
        if(!$result) {
            $data['message'] = 'The employee can not be inserted.';
            $data['type'] = 'danger';
            return back()->withInput()->with($data);
        }
        return redirect('employee')->with($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        // $data = [];
        // $workstations = Workstation::all();
        // $departments = Department::all();
        // foreach ($workstations as $workstation){
        //     if($workstation->id == $employee->idworkstation){
        //         $data['workstation'] = $workstation;
        //         break;
        //     }
        // }
        // foreach ($departments as $department){
        //     if($department->id == $employee->iddepartment){
        //         $data['department'] = $department;
        //         break;
        //     }
        // }
        return view('employee.show', ['employee' => $employee]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        $data = [];
        $data['workstations'] = Workstation::all();
        $data['departments'] = Department::all();
        $data['employee'] = $employee;
        return view('employee.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        $data = [];
        $data['message'] = 'The employee ' . $employee->name . ' has been updated successfully.';
        $data['type'] = 'success';
        try {
            $result = $employee->update($request->all());
            
        } catch(\Exception $e) {
            $result = false;
        }
        if(!$result) {
            $data['message'] = 'The employee can not be updated.';
            $data['type'] = 'danger';
            return back()->withInput()->with($data);
        }
        return redirect('employee')->with($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $data = [];
        $data['message'] = 'The employee ' . $employee->name . ' has been removed.';
        $data['type'] = 'success';
        try {
            $employee->delete();
        } catch( \Exception $e) {
            $data['message'] = 'The employee ' . $employee->name . ' has NOT been removed.';
            $data['type'] = 'danger';
        }
        return redirect('employee')->with($data);
    }
}
