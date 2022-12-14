<?php

namespace App\Http\Controllers;

use App\Models\Emploiye;
use Illuminate\Http\Request;


class EmploiyesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $emploiyes = Emploiye::all();
        return view('emploiyes.index')->with([
            'emploiyes'=>$emploiyes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('emploiyes.create');
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
            'registrition_number'=>'required|numeric|unique:emploiyes,registration_number',
       
            'fullname'=>'required|unique:emploiyes,fullname',
            'depart'=>'required',
            'hire_date'=>'required',
            'Num_Telephone'=>'required|numeric',
            'address'=>'required',
            'ville'=>'required'
        ]);

        // ------- Methode 1 ) : ----------
        
        // Emploiye::create($request->except('_token'));
        // return redirect()->route('emploiyes.index')->with([
        //     'success'=> 'Emploiye Ajouter avec succée'
        // ]);

        // ------- Methode 2) : ----------
        $emploiye = new Emploiye();
        
        $emploiye-> registration_number = strip_tags($request ->input('registrition_number'));
        $emploiye-> fullname = strip_tags($request ->input('fullname'));
        $emploiye-> depart = strip_tags($request ->input('depart'));
        $emploiye-> hire_date = strip_tags($request ->input('hire_date'));
        $emploiye-> phone = strip_tags($request ->input('Num_Telephone'));
        $emploiye-> address = strip_tags($request ->input('address'));
        $emploiye-> city = strip_tags($request ->input('ville'));

        $emploiye->save();
        return redirect()->route('emploiyes.index')
        // ->with('success' , 'Bien Ajouter ')
        ->with(['success' => 'Emploiyer Ajouter avec succssé']);

       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $emploiye = Emploiye::where('registration_number' , $id)->first();
            return view('emploiyes.show')->with([
                'emploiye'=> $emploiye
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

            $emploiye = Emploiye::where('registration_number' , $id)->first();
            return view('emploiyes.edit')->with([
                'emploiye'=> $emploiye
            ]);

      
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
        $emploiye = Emploiye::where('registration_number', $id)->first();
        //
        $this->validate($request , [
            
            'registrition_number'=>'required|numeric|unique:emploiyes,id,'.$emploiye->registration_number,
            //pour ne me dit pas fullname has already been taken 
            'fullname'=>'required|unique:emploiyes,fullname,'. $emploiye->fullname,

            'fullname'=>'required',
            'depart'=>'required',
            'hire_date'=>'required',
            'Num_Telephone'=>'required|numeric',
            'address'=>'required',
            'ville'=>'required'
        ]);
      
        
        
        $emploiye->update($request -> except('_token' ,'_method'));
        return redirect()->route('emploiyes.index')
        ->with(['success'=>'Emploiye Modifier avec succée']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        $emploiye = Emploiye::where('registration_number', $id)->first();
        $emploiye->delete();
        return redirect()->route('emploiyes.index')->with([
            'success' =>'Emploiye suprimer avec succeé'
        ]);
    }

    public function DemandeConger($id){
        $emploiye= Emploiye::where('registration_number',$id)->first();
        return view('emploiyes.DemandeConger')->with([
            'emploiye'=>$emploiye
        ]);
    }

    public function AtistationTravaille($id){
        $emploiye= Emploiye::where('registration_number',$id)->first();
        return view('emploiyes.AtistationTravaille')->with([
            'emploiye'=>$emploiye
        ]);
    }
}
