<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\staff_qualification;
use App\Helpers\APIHelper;
use Exception;

class StaffQualificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staffs = staff_qualification::all();
        $response = APIHelper::APIResponse(false,200,'',$staffs);
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
        $Qualification = new staff_qualification();

        $Qualification->staff_id = $request->staff;
        $Qualification->qualification_date = $request->qualification;
        $Qualification->type = $request->type;
        $Qualification->institution_name = $request->institution;

        try{
            $saveStaff = $Qualification->save();

            if($saveStaff){
                $response = APIHelper::APIResponse(false,200,'Staff qualification created successfully',null);
                return response()->json($response,200);
            }else{
                $response = APIHelper::APIResponse(true,'Failed to create staff qualification',null);
                return response()->json($response,400);
            }
        }catch(Exception $e){
            $response = APIHelper::APIResponse(true,'Failed to create staff qualification',null);
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
        $FindStaff = staff_qualification::find($id);
        if(empty($FindStaff)){
            $response = APIHelper::APIResponse(true,200,'Cannot Find Staff',$FindStaff);
            return response()->json($response,200);
        }else{
            $response = APIHelper::APIResponse(false,200,'',$FindStaff);
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
        $Qualification = staff_qualification::find($id);

        $Qualification->staff_id = $request->staff;
        $Qualification->qualification_date = $request->qualification;
        $Qualification->type = $request->type;
        $Qualification->institution_name = $request->institution;

        try{
            $UpdateStaff = $Qualification->save();

            if($UpdateStaff){
                $response = APIHelper::APIResponse(false,200,'Staff qualification created successfully',null);
                return response()->json($response,200);
            }else{
                $response = APIHelper::APIResponse(true,'Failed to create staff qualification',null);
                return response()->json($response,400);
            }
        }catch(Exception $e){
            $response = APIHelper::APIResponse(true,'Failed to create staff qualification',null);
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
        $staff = staff_qualification::find($id);
        $deleteStaff = $staff->delete();

        if($deleteStaff){
            $response = APIHelper::APIResponse(false,200,'Staff deleted successfully',null);
            return response()->json($response,200);
        }else{
            $response = APIHelper::APIResponse(true,'Failed to delete staff',null);
            return response()->json($response,400);
        }
    }
}
