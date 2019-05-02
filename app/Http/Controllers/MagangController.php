<?php

namespace App\Http\Controllers;

use App\magang;
use Illuminate\Http\Request;
use Session;
use App\user;

use App\tempatmagang;

use App\pembimbing;
class MagangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //

        $magang = magang::join('users','users.id','=','magsisid')->join('tempatmagangs','tmid','=','magtemid')->join('pembimbings','pbid','=','magpemid')->get();
  
        return view('magang.index', compact('magang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $siswa= user::where('level','=','siswa')->get();
        $pb= pembimbing::all();
        $tm= tempatmagang::all();
        
        return view('magang.add', compact('siswa','pb','tm'));
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

        $magang = magang::where('magsisid','=',$request['magsisid'])->get();
      
        if(count($magang)>0){
            
        Session::flash('error','Data gagal di tambahkan, siswa memiliki tempat magang, silah cek data');
        return redirect('/magang'); 
        }
        $magang = new magang;
        $magang->magsisid = $request['magsisid'];    
        $magang->magpemid = $request['magpemid'];    
        $magang->magtemid = $request['magtemid'];     
        $magang->tahun = $request['tahun'];
        $magang->save();
        
        Session::flash('success','Data sukses di tambahkan');
        return redirect('/magang');    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\magang  $magang
     * @return \Illuminate\Http\Response
     */
    public function show( $magang)
    {
        //
     
        $mg = magang::where('magangs.mgid','=',$magang)->join('users','users.id','=','magsisid')->join('tempatmagangs','tmid','=','magtemid')->join('pembimbings','pbid','=','magpemid')->get();
       
        $siswa= user::where('level','=','siswa')->get();
        $pb= pembimbing::all();
        $tm= tempatmagang::all();
        return view('magang.edit', compact('mg','siswa','pb','tm'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\magang  $magang
     * @return \Illuminate\Http\Response
     */
    public function edit(magang $magang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\magang  $magang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $magang)
    {
        //
        $cek = magang::find($magang);
        if($request['magsisid']!= $cek->magsisid){
        
            $magang = magang::where('magsisid','=',$request['magsisid'])->get();
            if(count($magang)>0){       
                Session::flash('error','Data gagal di tambahkan, siswa memiliki tempat magang, silah cek data');
                return redirect('/magang');      
            return redirect('/magang'); 
            }
        }
        else{
            $magang = magang::find($magang);
            $magang->magsisid = $request['magsisid'];    
            $magang->magpemid = $request['magpemid'];    
            $magang->magtemid = $request['magtemid'];     
            $magang->tahun = $request['tahun'];
            $magang->save();
            Session::flash('success','Data sukses di ubah');
            return redirect('/magang'); 
        }
           
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\magang  $magang
     * @return \Illuminate\Http\Response
     */
    public function destroy( $magang)
    {
        //
        $mg = magang::find($magang);
        Session::flash('success','Data sukses di hapus');
        $mg->delete();
        return redirect('/magang');   
    }
}
