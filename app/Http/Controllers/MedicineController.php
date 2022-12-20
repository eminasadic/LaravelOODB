<?php

namespace App\Http\Controllers;
use DB;

use App\Models\Medicine;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $medicines=DB::table('medicines')
        ->get();

        $medicines2=DB::table('medicines')
        ->select('medicines.*')
        ->where('medicines.MedicineType','Sirup')
        ->get();


        return view('medicines.index', ['medicines'=> $medicines,'medicines2'=> $medicines2]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medicines.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'medicineName'=>'required|string|max:255',
            ]);
            DB::table('medicines')->insert([
                'medicineName'=>$request->medicineName,
                'medicineType'=>$request->medicineType,
                'use'=>$request->use,
            ]);
            return redirect()->route('medicines');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function show(Medicine $medicine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $id=$request->id;
     $medicines=DB::table('medicines')
     ->where('id',$id)
     ->get();
     

     return view('medicines.edit',['medicines'=> $medicines]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medicine $medicine)
    {
        $id=$request->id;
    $request->validate([
        'medicineName'=>'required|string|max:255',
        'medicineType'=>'required|string|max:255',
        'use'=>'required|string|max:255',
     
    ]);
    $update_query=DB::table('medicines')
    ->where('id',$id)
    ->update([
        'medicineName'=>$request->medicineName,
        'medicineType'=>$request->medicineType,
        'use'=>$request->use,
        
    ]);
    return redirect()->route('medicines');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medicine $medicine)
    {
        //
    }

    public function delete(Request $request){
        $id=$request->id;
        Medicine::destroy($id);
        return redirect()->route('medicines');
    }
}
