<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\User;
use App\nilai;
use App\buktipembayaran;
use Illuminate\Support\Facades\Auth;
use Storage;
use Response;
use PDF;
class SiswaController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){

        $batas =12;
    
        $user = user::where('users.level','=','siswa')->paginate($batas);
        return view('siswa.index', compact('user'));
    }
    public function create(){
        return view('siswa.add');
    }
    public function edit($id){
        $user = user::find($id);
        
        return view('siswa.edit', compact('user'));
    }
    public function update(Request $request, $id){
        $user = user::find($id);
        $user->name=$request['name'];
        $user->email=$request['email'];
        $user->nins=$request['nins'];
        $user->temla=$request['temla'];
        $user->tangla=$request['tangla'];
        $user->jurusan=$request['jurusan'];
        $user->jk=$request['jk'];
        $user->save();
        
        Session::flash('success','Data sukses di ubah');
        return redirect('/siswa');
    }
    
    public function destroy($id){
        $user = user::find($id);

        $user->delete();
        
        Session::flash('success','Data sukses di hapus');
        return redirect('/siswa');
    }

    public function mymagang(){

        $bp = buktipembayaran::where('siswaid','=',Auth::user()->id)->get();
        $magang = nilai::rightjoin('magangs','magangs.mgid','=','nilais.nilmagid')->join('users','users.id','=','magsisid')->join('tempatmagangs','tmid','=','magtemid')->join('pembimbings','pbid','=','magpemid')->where('magangs.magsisid','=',Auth::user()->id)->get();
      
        return view('mymagang.index', compact('bp','magang'));
    }
    public function berkas(){
        $file="./form nilai.xlsx";
        return Response::download($file);
    } 
    public function a(){
        $data = ['title' => 'Welcome to HDTuto.com'];

        $pdf = PDF::loadView('myPDF', $data);   
        return $pdf->download('itsolutionstuff.pdf');
    }
}
