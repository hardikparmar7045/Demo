<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\JsonResponse;

class StudentApiController extends Controller
{
    public function index(): JsonResponse
    {
        $students = Student::all();

        return response()->json([
            'status' => 200,
            'data' => $students,
        ], 200);
    }
}
