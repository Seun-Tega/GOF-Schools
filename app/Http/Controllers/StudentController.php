<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Models\User;
use App\Notifications\AdminNotification;
use Devrabiul\ToastMagic\Facades\ToastMagic;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentRequest $request)
    {
        try {

            DB::transaction(function () use ($request) {

                $student = Student::create($request->validated());

                $admin = User::first();

                $admin->notify(new AdminNotification($admin, $student));
            });

            ToastMagic::success('Application submitted successfully');

            return to_route('success');
        } catch (Exception $e) {

            ToastMagic::error('Error occured while processing application');
            Log::error(message: 'Error occured while processing application' . $e->getMessage());

            return back();
        }
    }


    public function loadSuccessPage()
    {
        return view('pages.success');
    }


    public function getStudents()
    {
        $students = Student::all();

        return view('admin.students.index', compact('students'));
    }


    public function getStudentDetails(Student $student)
    {
         return view('admin.students.view', compact('student'));
    }


    

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
