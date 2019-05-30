<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CarModel;
use App\TestDrive;
use App\User;
use App\Post;
use Illuminate\Support\Facades\Auth;

class AdminCarModelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$models = CarModel::all();
        $models = CarModel::orderBy('id','desc')->paginate(5);
        return view('admin.adminCarModels.index')->with('models', $models);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.adminCarModels.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'vin'=>'required',
            'model'=>'required',
            'type'=>'required',
            'year'=>'required',
            'transmission'=>'required',
            'engine'=>'required',
            'color'=>'required',
            'equipment'=>'required',
            'price'=>'required',
            'image'=>'required',
        ]);

        $model = new CarModel;
        $model->vin = $request->input('vin');
        $model->model_name = $request->input('model');
        $model->model_type = $request->input('type');
        $model->year = $request->input('year');
        $model->transmission = $request->input('transmission');
        $model->engine = $request->input('engine');
        $model->color = $request->input('color');
        $model->equipment = $request->input('equipment');
        $model->price = $request->input('price');
        $model->img = $request->input('image');
        $model->save();

        return redirect('admin/adminCarModels/create')->with('success', 'model added)');

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
