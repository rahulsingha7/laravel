<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function create(){
        return view('employee.create');
    }
    public function store(Request $req){
        $name = $req->name;
        $doj=$req-> doj;
        $salary= $req->salary;
        $department = $req->department;
        $skills = json_encode($req->skills);
        DB::table('employee')->insert([
           'name' => $name,
           'date_of_joining' =>$doj,
           'salary' =>$salary,
           'department' =>$department,
           'skills' =>$skills
        ]);
        return redirect('employees');
    }
    public function all(){
        $data = DB::table('employee')->get();
        return view('employee.all', ['employee' => $data]);
    }
    public function edit($id){
        $result = DB::table('employee')->where('id','=',$id)->first();
        return view('employee.edit', ['employee' => $result]);
    }
    public function update(Request $req,$id){
        $name = $req->name;
        $doj=$req-> doj;
        $salary= $req->salary;
        $department = $req->department;
        $skills = json_encode($req->skills);
        DB::table('employee')->where('id','=',$id)->update([
           'name' => $name,
           'date_of_joining' =>$doj,
           'salary' =>$salary,
           'department' =>$department,
           'skills' =>$skills
        ]);
        return redirect('employees');
    }
    public function delete($id){
        $deleted = DB::table('employee')->where('id', '=', $id)->delete();
        return redirect('employees');
    }
}
