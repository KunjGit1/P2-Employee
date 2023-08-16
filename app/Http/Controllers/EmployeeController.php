<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index(){
        $data = Employee::get();
        //return $data;
        return view('employee-list',compact('data'));
    }

    public function addemployee(){
        return view('add-employee');
    }

    public function saveemployee(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'company' => 'required',
            'salary' => 'required',
            'city' => 'required',
        ]);
        
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $company = $request->company;
        $salary = $request->salary;
        $city = $request->city;

        $emp = new Employee();
        $emp -> name = $name;
        $emp -> email = $email;
        $emp -> phone = $phone;
        $emp -> company = $company;
        $emp -> salary = $salary;
        $emp -> city = $city;
        $emp -> save();

        return redirect()->back()->with('success','Employee Addedd Successfully!!!');
    }

    public function editEmployee($id){
        $data = Employee::where('id','=', $id)->first();
        return view('edit-employee',compact('data'));
    }

    public function updateemployee(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'company' => 'required',
            'salary' => 'required',
            'city' => 'required',
        ]);
        
        $id = $request->id;
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $company = $request->company;
        $salary = $request->salary;
        $city = $request->city;

        Employee::where('id','=',$id)->update([
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'company'=> $company,
            'salary' => $salary,
            'city' => $city
        ]);
        return redirect()->back()->with('success','Employee updated Successfully!!!');
    }

    public function deleteemployee($id){
        Employee::where('id','=',$id)->delete();
        return redirect()->back()->with('success','Employee Deleted Successfully!!!'); 
    }
}

