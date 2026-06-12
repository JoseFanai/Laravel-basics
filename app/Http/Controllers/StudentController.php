<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    //he function hi siam thar a ni
    public function index()
    {
        $students = Student::all();
        return view('students', compact('students'));
    }

    // Form page tarlang tu
    public function create()
    {
        return view('create');
    }

    // Form data dawngsawng a, database a save tu
    // 'Request $request' hi delivery boy ang a ni, form atanga thil lo kal a rawn pawm vek a ni.
    public function store(Request $request)
    {
        // model hmangin data thar kan siam
        $student = new Student();

        // form atanga lo kal ($request->name) kha database column ($student->name) ah kan dah lut
        $student->name = $request->name;
        $student->course = $request->course;

        $student->save();

        // kan save zawh velah list page ah kan redirect leh nghal ang
        return redirect('/students');
    }

    // Delete-na list phek tarlang tu tur
    public function showList()
    {
        // Database atangin a list kan pawt chhuak leh phawt ang
        $students = Student::all();
        // list.blade.php ah data nen kan thawn chhuak ang
        return view('list', compact('students'));
    }

    // Data nawt reh (Delete) tu tur
    public function destroy($id) 
    {
        // 1. Database-ah a ID hmangin zirlai kha kan va zawng chhuak phawt a
        $student = Student::find($id);

        // 2. Kan hmuh veleh kan ti-hlum (delete) nghal hmiah
        $student->delete();

        // 3. Kan delete zawh veleh list phek ngaiah kan kir leh nghal ang
        return redirect('/students');
    }
}
