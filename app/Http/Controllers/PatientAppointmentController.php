<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\patient_appointment;
use App\Helpers\APIHelper;
use Exception;

class PatientAppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patient = patient_appointment::all();
        $response = APIHelper::APIResponse(false,200,'',$patient);
        return response()->json($response,200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Patient = new patient_appointment();

        $Patient->staff_id = $request->staff;
        $Patient->patient_id = $request->patient;
        $Patient->date_time = $request->date;
        $Patient->room = $request->room;
        

        try{
            $savePatient = $Patient->save();

            if($savePatient){
                $response = APIHelper::APIResponse(false,200,'Patient created successfully',null);
                return response()->json($response,200);
            }else{
                $response = APIHelper::APIResponse(true,'Failed to create Patient',null);
                return response()->json($response,400);
            }
        }catch(Exception $e){
            $response = APIHelper::APIResponse(true,'Failed to create Patient',null);
            return response()->json($response,400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {  
        $FindPatient = patient_appointment::find($id);
        if(empty($FindPatient)){
            $response = APIHelper::APIResponse(true,200,'Cannot Find Patient',$FindPatient);
            return response()->json($response,200);
        }else{
            $response = APIHelper::APIResponse(false,200,'',$FindPatient);
            return response()->json($response,200);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Patient = patient_appointment::find($id); 

        $Patient->staff_id = $request->staff;
        $Patient->patient_id = $request->patient;
        $Patient->date_time = $request->date;
        $Patient->room = $request->room;
        

        try{
            $savePatient = $Patient->save();

            if($savePatient){
                $response = APIHelper::APIResponse(false,200,'Patient created successfully',null);
                return response()->json($response,200);
            }else{
                $response = APIHelper::APIResponse(true,'Failed to create Patient',null);
                return response()->json($response,400);
            }
        }catch(Exception $e){
            $response = APIHelper::APIResponse(true,'Failed to create Patient',null);
            return response()->json($response,400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Patient = patient_appointment::find($id);
        $deletePatient = $Patient->delete();

        if($deletePatient){
            $response = APIHelper::APIResponse(false,200,'Patient deleted successfully',null);
            return response()->json($response,200);
        }else{
            $response = APIHelper::APIResponse(true,'Failed to delete patient',null);
            return response()->json($response,400);
        }
    }
}
