<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(){
        return view('students.index');
    }

    public function create(){
        return view('students.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            's_id' => 'required|unique:students,is_id',
            'school' => 'required|boolean',
            'gender' => 'required|boolean',
            'age' => 'required|numeric|between:15,22',
            'address' => 'required|boolean',
            'famsize' => 'required|boolean',
            'Pstatus' => 'required|boolean',
            'Medu' => 'required|numeric|in:0,1,2,3,4',
            'Fedu' => 'required|numeric|in:0,1,2,3,4',
            'Mjob' => 'required|in:teacher,health,services,at_home,other',
            'Fjob' => 'required|in:teacher,health,services,at_home,other',
            'reason' => 'required|in:home,reputation,course,other',
            'guardian' => 'required|in:mother,father,other',
            'traveltime' => 'required|numeric|in:1,2,3,4',
            'studytime' => 'required|numeric|in:1,2,3,4',
            'failures' => 'required|numeric|in:1,2,3,4',
            'schoolsup' => 'required|boolean',
            'famsup' => 'required|boolean',
            'paid' => 'required|boolean',
            'activities' => 'required|boolean',
            'nursery' => 'required|boolean',
            'higher' => 'required|boolean',
            'internet' => 'required|boolean',
            'famrel' => 'required|numeric|between:1,5',
            'freetime' => 'required|numeric|between:1,5',
            'health' => 'required|numeric|between:1,5',
            'absences' => 'required|numeric|between:0,93',
            'passed' => 'required|boolean',
            // Add more fields as needed
        ]);
    
        $newStudent = Student::create($data);
    
        return redirect(route('student.index'));
    }
    
}
