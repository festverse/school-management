<?php
namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AddstudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('layouts.addstudent');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
         // Validate the form data
        $validatedData = $request->validate([
            'fName' => 'required',
            'mName' => 'required',
            'lName' => 'required',
            'studentId' => 'required|numeric|unique:students',
            'email' => 'required',
            'pNumber' => 'required',
            'course' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'brgy' => 'required',
            'city' => 'required',
            'province' => 'required',
            'enrolled' => 'required',
            'student_image_upload' => 'required|image|max:2048',
        ]);

        // Create a new student object
        $student = new Student;
        $student->fName = $validatedData['fName'];
        $student->mName = $validatedData['mName'];
        $student->lName = $validatedData['lName'];
        $student->studentId = $validatedData['studentId'];
        $student->email = $validatedData['email'];
        $student->pNumber = $validatedData['pNumber'];
        $student->course = $validatedData['course'];
        $student->age = $validatedData['age'];
        $student->gender = $validatedData['gender'];
        $student->brgy = $validatedData['brgy'];
        $student->city = $validatedData['city'];
        $student->province = $validatedData['province'];
        $student->enrolled = $validatedData['enrolled'];
        $filename = 'default.jpg';

        // Check if an image was uploaded
        if ($request->file('student_image_upload')) {
            // Store the uploaded image in the public disk's "images" directory
            $image = $request->file('student_image_upload');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('public/images', $filename);
        
            // Set the student's image path to the uploaded image's path
            $student->studentImage = $filename;
        }
        // Save the new student to the database
        $student->save();

        // Redirect the user back to the dashboard
        return redirect()->route('dashboard');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $students = Student::paginate(20);
        return view('dashboard', compact('students'));
    }

    public function showWelcome()
    {
        $students = Student::paginate(20);
        return view('welcome', compact('students'));
    }

    public function showEach($id)
    {
        $students = Student::findOrFail($id);
        
        if (!$students instanceof Student) {
            abort(404);
        }
        
        return view('layouts.student.viewstudent', compact('students'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function showEdit($id)
    {
        $students = Student::findOrFail($id);
        
        if (!$students instanceof Student) {
            abort(404);
        }
        
        return view('layouts.student.editstudent', compact('students'));
    }


    public function update(Request $request, $id)
    {
        // Find the student by ID
        $students = Student::findOrFail($id);

        // Update the student with the form data
        $students->fName = $request->input('fName');
        $students->mName = $request->input('mName');
        $students->lName = $request->input('lName');
        $students->studentId = $request->input('studentId');
        $students->email = $request->input('email');
        $students->pNumber = $request->input('pNumber');
        $students->course = $request->input('course');
        $students->age = $request->input('age');
        $students->gender = $request->input('gender');
        $students->brgy = $request->input('brgy');
        $students->city = $request->input('city');
        $students->province = $request->input('province');
        $students->enrolled = $request->input('enrolled');

        // Check if an image was uploaded
        if ($request->file('student_image_upload')) {
            // Store the uploaded image in the public disk's "images" directory
            $image = $request->file('student_image_upload');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('public/images', $filename);

            // Set the student's image path to the uploaded image's path
            $students->studentImage = $filename;
        }

        $students->save();


        // Redirect to the student list with a success message
        return redirect()->route('dashboard')->with('success', 'Student updated successfully.');
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        
        $students = Student::where('fName', 'LIKE', '%'.$search.'%')
                            ->orWhere('mName', 'LIKE', '%'.$search.'%')
                            ->orWhere('lName', 'LIKE', '%'.$search.'%')
                            ->orWhere('studentId', 'LIKE', '%'.$search.'%')
                            ->orWhere('email', 'LIKE', '%'.$search.'%')
                            ->orWhere('pNumber', 'LIKE', '%'.$search.'%')
                            ->orWhere('course', 'LIKE', '%'.$search.'%')
                            ->orWhere('age', 'LIKE', '%'.$search.'%')
                            ->orWhere('gender', 'LIKE', '%'.$search.'%')
                            ->orWhere('brgy', 'LIKE', '%'.$search.'%')
                            ->orWhere('city', 'LIKE', '%'.$search.'%')
                            ->orWhere('province', 'LIKE', '%'.$search.'%')
                            ->orWhere('enrolled', 'LIKE', '%'.$search.'%')
                            ->paginate(20);
        
        return view('dashboard', compact('students'));
    }

    public function searchWelcome(Request $request)
    {
        $search = $request->input('search');
        
        $students = Student::where('fName', 'LIKE', '%'.$search.'%')
                            ->orWhere('mName', 'LIKE', '%'.$search.'%')
                            ->orWhere('lName', 'LIKE', '%'.$search.'%')
                            ->orWhere('studentId', 'LIKE', '%'.$search.'%')
                            ->orWhere('email', 'LIKE', '%'.$search.'%')
                            ->orWhere('pNumber', 'LIKE', '%'.$search.'%')
                            ->orWhere('course', 'LIKE', '%'.$search.'%')
                            ->orWhere('age', 'LIKE', '%'.$search.'%')
                            ->orWhere('gender', 'LIKE', '%'.$search.'%')
                            ->orWhere('brgy', 'LIKE', '%'.$search.'%')
                            ->orWhere('city', 'LIKE', '%'.$search.'%')
                            ->orWhere('province', 'LIKE', '%'.$search.'%')
                            ->orWhere('enrolled', 'LIKE', '%'.$search.'%')
                            ->paginate(20);
        
        return view('welcome', compact('students'));
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $students = Student::find($id);
        $students->delete();
        return redirect()->back()->with('success', 'Student has been deleted.');
    }
}
