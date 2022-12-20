<?php

namespace App\Http\Controllers;
use DB;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $doctors=DB::table('doctors')
       ->get();

       $doctors2=DB::table('doctors')
       ->select('doctors.*')
       ->where('doctors.specijalizacija','Kardiolog')
       ->get();

       return view('doctors.index', ['doctors'=>$doctors, 'doctors2'=>$doctors2]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('doctors.add');
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
            'ime'=>'required|string|max:255',
            ]);
            DB::table('doctors')->insert([
                'ime'=>$request->ime,
                'prezime'=>$request->prezime,
                'datum'=>$request->datum,
                'specijalizacija'=>$request->specijalizacija,
                
            ]);
            return redirect()->route('doctors');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $id=$request->id;
     $doctors=DB::table('doctors')
     ->where('id',$id)
     ->get();
     

     return view('doctors.edit',['doctors'=> $doctors]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctor $doctor)
    {
        $id=$request->id;
        $request->validate([
            'ime'=>'required|string|max:255',
            'prezime'=>'required|string|max:255',
            'datum'=>'required|date',
            'specijalizacija'=>'required|string|max:255',
            
    
        ]);
        $update_query=DB::table('doctors')
        ->where('id',$id)
        ->update([
            'ime'=>$request->ime,
            'prezime'=>$request->prezime,
            'datum'=>$request->datum,
            'specijalizacija'=>$request->specijalizacija,
           
        ]);
        return redirect()->route('doctors');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        //
    }

    public function delete(Request $request){
        $id=$request->id;
        Doctor::destroy($id);
        return redirect()->route('doctors');
    }
}
