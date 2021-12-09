<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('department.index');
        return view('department.index', ['departments' => Department::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('department.create');
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
        $data['message'] = 'New department has been inserted successfully.';
        $data['type'] = 'success';
        $department = new Department($request->all());
        try {
            $result = $department->save();
        } catch( \Exception $e) {
            $result = false;
        }
        if(!$result) {
            $data['message'] = 'The department can not be inserted.';
            $data['type'] = 'danger';
            return back()->withInput()->with($data);
        }
        return redirect('department')->with($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department)
    {
        return view('department.show', ['department'=>$department]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit(Department $department)
    {
        $data = [];
        $data['department'] = $department;
        return view('department.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Department $department)
    {
        $data = [];
        $data['message'] = 'The department ' . $department->name . ' has been updated successfully.';
        $data['type'] = 'success';
        try {
            $result = $department->update($request->all());
            
        } catch( \Exception $e) {
            $result = false;
        }
        if(!$result) {
            $data['message'] = 'The department can not be updated.';
            $data['type'] = 'danger';
            return back()->withInput()->with($data);
        }
        return redirect('department')->with($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy(Department $department)
    {
        
        $data = [];
        $data['message'] = 'The department ' . $department->name . ' has been removed, may some employees has been affected.';
        $data['type'] = 'success';
        $employees = Employee::all();
        try {
            foreach($employees as $employee){
                if($employee->iddepartment == $department->id){
                   
                   $employee->iddepartment = null;
                   $employee->save();
                }
            }
            $department->delete();
        } catch( \Exception $e) {
            $data['message'] = 'The department ' . $department->name . ' has NOT been removed.';
            $data['type'] = 'danger';
        }
        return redirect('department')->with($data);
    
    }
}
