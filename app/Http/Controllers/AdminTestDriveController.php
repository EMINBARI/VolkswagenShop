<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TestDrive;
use App\User;
use App\CarModel;
use DB;

class AdminTestDriveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$testDrives = TestDrive::all();
       

       $test_drives = DB::table('test_drives')
            ->join('car_models', 'test_drives.model_id', '=', 'car_models.id')
            ->join('users', 'test_drives.user_id', '=', 'users.id')
            ->select('test_drives.*', 'car_models.model_name', 'users.name','car_models.vin','car_models.img')
            ->get();
        //var_dump($test_drives);
        //$data = ['test_drives'=> $test_drives];
        //return view('admin.adminTestDrive.index')->with($test_drives);
        return view('admin.adminTestDrive.index',['test_drives'=> $test_drives]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testDrive = TestDrive::find($id);
        $testDrive->delete();

        return redirect('admin/adminTestDrive')->with('success', 'model deleted)');
    }
}
