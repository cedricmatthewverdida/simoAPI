<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\patient;
use App\Helpers\APIHelper;
use Exception;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patient = patient::all();
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
        
        $Patient = new patient();

        $Patient->patient_fname = $request->fname;
        $Patient->patient_mname = $request->mname;
        $Patient->patient_lname = $request->lname;
        $Patient->address = $request->address;
        $Patient->telephone_number = $request->contact;
        $Patient->date_of_birth = $request->birth;
        $Patient->sex = $request->gender;
        $Patient->marital_status = $request->stat;
        $Patient->date_registered = $request->registered;
        $Patient->nok_id = $request->nok;
        

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
        $FindPatient = patient::find($id);
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
        $Patient = patient::find($id); 

        $Patient->patient_fname = $request->fname;
        $Patient->patient_mname = $request->mname;
        $Patient->patient_lname = $request->lname;
        $Patient->address = $request->address;
        $Patient->telephone_number = $request->contact;
        $Patient->date_of_birth = $request->birth;
        $Patient->sex = $request->gender;
        $Patient->marital_status = $request->stat;
        $Patient->date_registered = $request->registered;
        $Patient->nok_id = $request->nok;
        

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
        $Patient = patient::find($id);
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
