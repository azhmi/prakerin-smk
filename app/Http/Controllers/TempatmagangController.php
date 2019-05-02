<?php

namespace App\Http\Controllers;

use App\tempatmagang;
use DB;
use App\magang;
use Illuminate\Http\Request;
use Session;
class TempatmagangController extends Controller
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

        $tm = tempatmagang::all();
        
        return view('tempatmagang.index', compact('tm'));
    }
    public function history($his)
    {
        //

        $tm = tempatmagang::find($his);
        $magang = magang::join('tempatmagangs','tempatmagangs.tmid','=','magangs.magtemid')->where('magangs.magtemid','=',$his)->select('*',DB::raw('COUNT(*) as total '))->groupBy('magangs.tahun')->get();
       
        return view('tempatmagang.history', compact('tm','magang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tempatmagang.add');
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
        $tm = new tempatmagang;
        $tm->tmnam=$request['name'];
        $tm->tamalt=$request['tamalt'];
        $tm->tamprof=$request['tamprof'];
        $tm->save();
        
        Session::flash('success','Data sukses di tambahkan');
        return redirect('/tempat-magang');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tempatmagang  $tempatmagang
     * @return \Illuminate\Http\Response
     */
    public function show( $tempatmagang)
    {
        //
        
        $tm =  tempatmagang::find($tempatmagang);
        return view('tempatmagang.edit', compact('tm'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tempatmagang  $tempatmagang
     * @return \Illuminate\Http\Response
     */
    public function edit(tempatmagang $tempatmagang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tempatmagang  $tempatmagang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $tempatmagang)
    {
        //
        $tm =  tempatmagang::find($tempatmagang);
        $tm->tmnam=$request['name'];
        $tm->tamalt=$request['tamalt'];
        $tm->tamprof=$request['tamprof'];
        $tm->save();
        
        Session::flash('success','Data sukses di ubah');
        return redirect('/tempat-magang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tempatmagang  $tempatmagang
     * @return \Illuminate\Http\Response
     */
    public function destroy($tempatmagang)
    {
        //
        $tm =  tempatmagang::find($tempatmagang);
        $tm->delete();
        
        Session::flash('success','Data sukses di Dihapus');
        return redirect('/tempat-magang');
    }
}
