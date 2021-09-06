<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use File;
use Image;


class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::orderBy('id','asc')->get();
        return view('backend.pages.employee.manage',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employee = new Employee();
        $employee->fullname  =$request->fullname;
        $employee->designation =$request->designation;
        $employee->slug =Str::slug($request->fullname);
        $employee->overview =$request->overview;
        $employee->phone =$request->phone;
        $employee->address =$request->address;
        $employee->email =$request->email;
        $employee->status =$request->status;
        if($request->image){
            $image = $request->file('image');
            $img = rand() . '.' . $image->getClientOriginalExtension();
            $location = public_path('backend/img/employee/'.$img);
            Image::make($image)->save($location);
            $employee->profile_pic = $img;
        }
        $employee->save();
        return redirect()->route('employee.manage');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employee::find($id);
        if(!empty($employee)){
            return view('backend.pages.employee.edit',compact('employee'));
        }
        else{
            return redirect()->route('employee.manage');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $employee = Employee::find($id);
        $employee->fullname  =$request->fullname;
        $employee->designation =$request->designation;
        $employee->slug =Str::slug($request->fullname);
        $employee->overview =$request->overview;
        $employee->phone =$request->phone;
        $employee->address =$request->address;
        $employee->email =$request->email;
        $employee->status =$request->status;
        if(!empty($request->image)){
            if(File::exists('backend/img/employee/'.$employee->profile_pic)){
                File::delete('backend/img/employee/'.$employee->profile_pic);
            }
            $image = $request->file('image');
            $img = rand() . '.' . $image->getClientOriginalExtension();
            $location = public_path('backend/img/employee/'.$img);
            Image::make($image)->save($location);
            $employee->profile_pic = $img;
        }
        $employee->save();
        return redirect()->route('employee.manage');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
