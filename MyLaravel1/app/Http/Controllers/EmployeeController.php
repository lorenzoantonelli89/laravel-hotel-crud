<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employees;

class EmployeeController extends Controller
{   
    private function getColumn()
    {
        return [
            'firstname' => 'required',
            'lastname' => 'required',
            'role' => 'required',
            'ral' => 'required',
        ];
    }
    public function home()
    {
        $employees = Employees::all();

        return view('pages.home', compact('employees'));
    }
    public function employee($id)
    {
       $employee = Employees::findOrFail($id);

       return view('pages.employee', compact('employee'));
    }
    public function edit($id)
    {
        $employee = Employees::findOrFail($id);
        // dd($employee);
        return view('pages.edit', compact('employee'));
    }
    public function update(Request $request, $id)
    {
        // $validate = $request -> validate([
        //     'firstname' => 'required',
        //     'lastname' => 'required',
        //     'role' => 'required',
        //     'ral' => 'required',
        // ]);
        $validate = $request -> validate($this -> getColumn());

        $employee = Employees::findOrFail($id);
        $employee -> update($validate);

        return redirect() -> route('employee', $employee -> id);
    }
    public function destroy($id)
    {
        $employee = Employees::findOrFail($id);
        $employee -> delete();

        return redirect()->route('home');
    }
    public function newEmployee()
    {

        return view('pages.new-employee');

    }

    public function store(Request $request)
    {
        // $validate = $request -> validate([
        //     'firstname' => 'required',
        //     'lastname' => 'required',
        //     'role' => 'required',
        //     'ral' => 'required',
            
        // ]);
        $validate = $request -> validate($this -> getColumn());

        $employee = Employees::create($validate);

        return redirect() -> route('employee', $employee -> id);
        // dd($validate);
    }
}
