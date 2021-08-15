<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\staff_type;
use App\Helpers\APIHelper;
use Exception;

class StaffTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staffs = staff_type::all();
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
        $Type = new staff_type();

        $Type->staff_id = $request->staff;
        $Type->status = $request->stat;
        $Type->start_date = $request->start;
        $Type->end_date = $request->end;

        try{
            $saveStaff = $Type->save();

            if($saveStaff){
                $response = APIHelper::APIResponse(false,200,'Staff type created successfully',null);
                return response()->json($response,200);
            }else{
                $response = APIHelper::APIResponse(true,'Failed to create staff type',null);
                return response()->json($response,400);
            }
        }catch(Exception $e){
            $response = APIHelper::APIResponse(true,'Failed to create staff type',null);
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
        $FindStaff = staff_type::find($id);
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
        $Type = staff_type::find($id);

        $Type->staff_id = $request->staff;
        $Type->status = $request->stat;
        $Type->start_date = $request->start;
        $Type->end_date = $request->end;

        try{
            $UpdateStaff = $Type->save();

            if($UpdateStaff){
                $response = APIHelper::APIResponse(false,200,'Staff type created successfully',null);
                return response()->json($response,200);
            }else{
                $response = APIHelper::APIResponse(true,'Failed to create staff type',null);
                return response()->json($response,400);
            }
        }catch(Exception $e){
            $response = APIHelper::APIResponse(true,'Failed to create staff type',null);
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
        $staff = staff_type::find($id);
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
