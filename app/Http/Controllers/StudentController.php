<?php
namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Carbon\Carbon;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'roll_no' => 'required',
            'class' => 'required',
            'dob' => 'required|date',
        ]);

        $dob = Carbon::parse($request->dob);
        $age = $dob->diffInYears(Carbon::now());

        Student::create([
            'name' => $request->name,
            'roll_no' => $request->roll_no,
            'class' => $request->class,
            'dob' => $request->dob,
            'age' => $age,
        ]);

        return redirect()->route('students.index')->with('success', 'Student added successfully.');
    }
}
