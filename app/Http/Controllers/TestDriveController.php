<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\CarModel;
use App\TestDrive;
use Hash;

class TestDriveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $authenticated = false;
        if(Auth::check()){
            $authenticated = true;
        }
        $modelId = $request->session()->get('key','Не найдена модель');
        $car = CarModel::find($modelId);

        $data = array(
            'authenticated' => $authenticated,
            'car' => $car
        );
       
        
        return view('testDrive.index')->with($data);
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

        $this->validate($request,[
            'password' => 'required',
        ]);

        $modelId = $request->session()->get('key','Не найдена модель');
        $car = CarModel::find($modelId);
        $password = $request->input('password');
        $hashedPassword=auth()->user()->password;
        if (Hash::check($password, $hashedPassword)) {

            $drtest = new TestDrive;
            $drtest->model_id = $car->id;
            $drtest->user_id = auth()->user()->id;
            $drtest->test_drive_date = '2019-05-31 8:15:00';
            $drtest->save();

            return redirect('/models')->with('success', 'model added)');
            
        }
            
        return redirect('/models')->with('error', 'model not added)');

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
        //
    }
}
