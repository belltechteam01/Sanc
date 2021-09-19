<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\District;
use App\Models\Classs;
use App\Models\School;
use App\Models\Grade;
use App\Models\Student;
use App\Models\Perform;

class FileuploaddataController extends Controller
{
    //
    public function addperform(Request $request)
    {
        //District
        $district = District::firstOrCreate(['name' => $request->district]);
        
        //School
        $school = School::firstOrCreate(['name' => $request->school, 'district_id' => $district->id]);

        //Grade
        $grade = Grade::firstOrCreate(['name' => $request->grade, 'school_id' => $school->id]);

        //Classs
        $classs = Classs::firstOrCreate(['name' => $request->class, 'grade_id' => $grade->id]);

        return $classs;
    }
}

