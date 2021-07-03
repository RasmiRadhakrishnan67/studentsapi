<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function studentsIndex() {
      $students = Student::get();
      return \Response::json(array('no_of_students'=>count($students),'response' => $students),200,array(),JSON_PRETTY_PRINT);
    }

    public function createStudent(Request $request) {
        $student = new Student;
        $student->name = $request->name;
        $student->roll_number = $request->roll_number;
        $student->class = $request->class;
        $student->english = $request->english;
        $student->maths = $request->maths;
        $student->science = $request->science;
        $student->language = $request->language;
        $student->social = $request->social;
        #Marks Validation
        if(empty($student->social) || empty($student->language) || empty($student->english) ||  empty($student->maths) || empty($student->science)){
             return \Response::json(array('response' => 'Please enter all the subject marks'), 200, array(), JSON_PRETTY_PRINT); 
        }
        $student->save();
        return \Response::json(array('response' => 'Record has been created for'. $student->roll_number), 200, array(), JSON_PRETTY_PRINT);   
    }

    public function updateStudent(Request $request, $id) {
        if (Student::where('id', $id)->exists()) {
            $student = Student::find($id);
            $student->name = is_null($request->name) ? $student->name : $request->name;
            $student->roll_number = is_null($request->roll_number) ? $student->roll_number : $request->roll_number;
            $student->class = is_null($request->class) ? $student->class : $request->class;
            $student->english = is_null($request->english) ? $student->english : $request->english;
            $student->maths = is_null($request->maths) ? $student->maths : $request->maths;
            $student->science = is_null($request->science) ? $student->science : $request->science;
            $student->language = is_null($request->language) ? $student->language : $request->language;
            $student->social = is_null($request->social) ? $student->social : $request->social;
            $student->update();
            return \Response::json(array('response' => 'Requested Records are Updated'), 200, array(), JSON_PRETTY_PRINT);

        } else {
            return \Response::json(array('response' => 'No records found for the requested ID'), 404, array(), JSON_PRETTY_PRINT);      
        }
    }

    public function deleteStudent ($id) {
        if(Student::where('id', $id)->exists()) {
            $student = Student::find($id);
            $student->delete();
            return \Response::json(array('response' => 'Requested Records are deleted'), 200, array(), JSON_PRETTY_PRINT);
        } else {
            return \Response::json(array('response' => 'No records found for the requested ID'), 404, array(), JSON_PRETTY_PRINT);
        }
    }

    public function searchStudent($id) {
        if (Student::where('id', $id)->exists()) {
            $student = Student::where('id', $id)->get();
            return \Response::json(array('no_of_students'=>count($student),'response' => $student), 200, array(),JSON_PRETTY_PRINT);

        }else {
            return \Response::json(array('no_of_students'=> 0,'response' => 'No Results Found'), 200, array(),JSON_PRETTY_PRINT);
        }
    }
}
