<?php

namespace App\Http\Controllers;

use App\Models\Pregled;
use Illuminate\Http\Request;
use DB;

class PregledController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pregledi=DB::table('pregleds')
        ->join('doctors','pregleds.doktor1','=','doctors.id')
        ->join('patients','pregleds.pacijent1','=','patients.id')
        ->join('diseases','pregleds.bolest1','=','diseases.id')
        ->join('medicines','pregleds.lijek1','=','medicines.id')
        ->select('pregleds.*','doctors.ime','doctors.prezime','patients.name','patients.lastname','diseases.type','medicines.medicineName')
        ->get();

        $pregledi2=DB::table('pregleds')
        ->join('doctors','pregleds.doktor1','=','doctors.id')
        ->select('pregleds.*','doctors.ime','doctors.prezime')
        ->where('pregleds.pacijent1','5')
        ->get();

        $pregledi3=DB::table('pregleds')
        ->join('diseases','pregleds.bolest1','=','diseases.id')
        ->select('pregleds.*','diseases.type')
        ->where('pregleds.pacijent1','5')
        ->get();

        $pregledi4=DB::table('pregleds')
        ->join('doctors','pregleds.doktor1','=','doctors.id')
        ->join('patients','pregleds.pacijent1','=','patients.id')
        ->join('diseases','pregleds.bolest1','=','diseases.id')
        ->join('medicines','pregleds.lijek1','=','medicines.id')
        ->select('pregleds.*','doctors.ime','doctors.prezime','patients.name','patients.lastname','diseases.type','medicines.medicineName')
        ->where('pregleds.pacijent1','5')
        ->get();
       
        $pregledi5=DB::table('pregleds')
        ->join('medicines','pregleds.lijek1','=','medicines.id')
        ->select('pregleds.*','medicines.medicineName')
        ->where('pregleds.pacijent1','5')
        ->get();

        return view('pregleds.index',
        ['pregledi' => $pregledi,
        'pregledi2' => $pregledi2,
        'pregledi3' => $pregledi3,
        'pregledi4' => $pregledi4,
        'pregledi5' => $pregledi5,
       
    
    
    
    ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $patients=DB::table('patients') ->get();
        $doctors=DB::table('doctors') ->get();
        $diseases=DB::table('diseases') ->get();
        $medicines=DB::table('medicines') ->get();



        return view('pregleds.add',['doctors'=> $doctors,'patients'=> $patients,'diseases'=>$diseases,'medicines'=> $medicines]);    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'doktor1'=>'required|integer',
            ]);
            DB::table('pregleds')->insert([
                'doktor1'=>$request->doktor1,
                'pacijent1'=>$request->pacijent1,
                'bolest1'=>$request->bolest1,
                'lijek1'=>$request->lijek1,
                
            ]);
            return redirect()->route('pregleds');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pregled  $pregled
     * @return \Illuminate\Http\Response
     */
    public function show(Pregled $pregled)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pregled  $pregled
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $id=$request->id;
        $pregledi=DB::table('pregleds')
        ->where('id',$id)
        ->get();
        
        $doctors=DB::table('doctors')
        ->get();

        $patients=DB::table('patients')
        ->get();

        $diseases=DB::table('diseases')
        ->get();

        $medicines=DB::table('medicines')
        ->get();
   
        return view('pregleds.edit',['pregledi'=> $pregledi,'doctors'=> $doctors,'patients'=> $patients,'diseases'=>$diseases,'medicines'=> $medicines]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pregled  $pregled
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id=$request->id;
        $request->validate([
            'doktor1'=>'required|integer',
            'pacijent1'=>'required|integer',
            'bolest1'=>'required|integer',
            'lijek1'=>'required|integer',
    
        ]);
        $update_query=DB::table('pregleds')
        ->where('id',$id)
        ->update([
            'doktor1'=>$request->doktor1,
            'pacijent1'=>$request->pacijent1,
            'bolest1'=>$request->bolest1,
            'lijek1'=>$request->lijek1,
        ]);
        return redirect()->route('pregleds');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pregled  $pregled
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pregled $pregled)
    {
        //
    }

    public function delete(Request $request){
        $id=$request->id;
        Pregled::destroy($id);
        return redirect()->route('pregleds');
    }
}
