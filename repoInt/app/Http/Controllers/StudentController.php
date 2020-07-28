<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\StudentRepositoryInterface;

class StudentController extends Controller
{
    protected $student_repo = null;

     // UserRepositoryInterface is the interface
     public function __construct(StudentRepositoryInterface $student_repo)
     {
         $this->$student_repo = $student_repo;
     }

    public function index(){
        $students = $this->student_repo->getAllStudents();
        return view('students',['students'=>$students]);
    }

    public function show($id){
        return view('details',['id'=>$id]);
    }
}
