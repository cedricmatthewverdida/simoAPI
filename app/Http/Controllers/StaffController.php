<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\staff;
use App\Helpers\APIHelper;
class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Staffs = staff::all();
        $response = APIHelper::APIResponse(false,200,'',$Staffs);
        return response()->json($response,200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo 'Create Function';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $staff = new staff();

        $staff->staff_fname = $request->fname;
        $staff->staff_mname = $request->mname;
        $staff->staff_lname = $request->lname;
        $staff->full_address = $request->address;
        $staff->telephone_number =  $request->number;
        $staff->date_of_birth = $request->birthday;
        $staff->sex = $request->gender;
        $staff->nin = APIHelper::GENERATE_NIN();

        $saveStaff = $staff->save();

        if($saveStaff){
            $response = APIHelper::APIResponse(false,200,'Staff Created Successfully',null);
            return response()->json($response,200);
        }else{
            $response = APIHelper::APIResponse(true,'Failed to Create Staff',null);
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
        $FindStaff = staff::find($id);
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
        $staff = staff::find($id);

        $staff->staff_fname = $request->fname;
        $staff->staff_mname = $request->mname;
        $staff->staff_lname = $request->lname;
        $staff->full_address = $request->address;
        $staff->telephone_number =  $request->number;
        $staff->date_of_birth = $request->birthday;
        $staff->sex = $request->gender;
        $staff->nin = APIHelper::GENERATE_NIN();

        $UpdateStaff = $staff->save();

        if($UpdateStaff){
            $response = APIHelper::APIResponse(false,200,'Staff updated successfully',null);
            return response()->json($response,200);
        }else{
            $response = APIHelper::APIResponse(true,'Failed to update staff',null);
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
        $staff = staff::find($id);
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
