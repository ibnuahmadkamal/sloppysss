<?php

namespace App\Http\Controllers;

use App\ModelHs;
use App\ModelUser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Validator;
use Auth;

class HomestayController extends Controller
{
    
    public function index()
    {    
    	return view('index');
    }

    
//Login
    public function login(){
        return view('signin');
    }

    public function loginowner(){
        return view('loginowner');
    }

    public function loginadmin(){
        return view('loginadmin');
    }

//Checklogin    
    function checklogin(Request $request)
    {
        $this->validate($request, [
            'name'      => 'required',
            'password'      => 'required|min:3',
            'status'      => 'required'
            ]);

        $user_data = array('name' => $request->get('name'),
            'password' => $request->get('password'),
             'status' => $request->get('status')
        );

        if (Auth::attempt($user_data)) {
            
            return redirect('/index');
        }
        else
        {
            return back()->with('error', 'Wrong Login Details');
        }
    }

    function checkloginadmin(Request $request)
    {
        $this->validate($request, [
            'name'      => 'required',
            'password'      => 'required|min:3',
            'status'      => 'required'
            ]);

        $user_data = array('name' => $request->get('name'),
            'password' => $request->get('password'),
             'status' => $request->get('status')
        );

        if (Auth::attempt($user_data)) {
            
            return redirect('/sucessloginadmin');
        }
        else
        {
            return back()->with('error', 'Wrong Login Details');
        }
    }


    function checkloginowner(Request $request)
    {
        $this->validate($request, [
            'name'      => 'required',
            'password'      => 'required|min:3',
            'status'      => 'required'
            ]);

        $user_data = array('name' => $request->get('name'),
            'password' => $request->get('password'),
             'status' => $request->get('status')
        );

        if (Auth::attempt($user_data)) {
            
            return redirect('/sucessloginowner');
        }
        else
        {
            return back()->with('error', 'Wrong Login Details');
        }
    }


    public function simpan(Request $request)
    {
        $tablehm = new ModelHs;
    
    // insert data ke table
        $tablehm->name = $request->input('name');
        $tablehm->alamat = $request->input('alamat');
        $tablehm->deskripsi = $request->input('deskripsi');
        $tablehm->fasilitas = $request->input('fasilitas');
        $tablehm->tarif = $request->input('tarif');

        $file = $request->file('gambar');
        $extension = $file->getClientOriginalExtension();
        $filename = time().'.'.$extension;
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload,$filename);
        $tablehm->gambar = $filename;
        $tablehm->save();

    // alihkan halaman ke halaman
    return redirect('/sucessloginowner');
    }




    public function sucessloginowner(){
        $model_hs = DB::table('model_hs')->get();
        return view('dashboardhs',['model_hs' => $model_hs]);
    }

    public function dreview(){
        $review = DB::table('review')->get();
        return view('dashboardreview',['review' => $review]);
    }

    
    public function sucessloginadmin(){
        $hs = DB::table('model_hs')->get();
        return view('dashboardhs',['model_hs' => $hs]);
    }





    public function register(Request $request){
        return view('signup');
    }



    public function registerPost(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'status' => 'required',
            'password' => 'required',
            're' => 'required|same:password',
        ]);

        $data =  new ModelUser();
        $data->name = $request->name;
        $data->status = $request->status;
        $data->password = bcrypt($request->password);
        $data->save();
        return redirect('/');
    }


    public function daftarhm(Request $request){
        return view('daftarhm');
    }


    // method untuk insert data
    

    // method untuk edit data pegawai
    public function edit($id)
    {   
    // mengambil data pegawai berdasarkan id yang dipilih
    $model_hs = DB::table('model_hs')->where('id',$id)->get();
    // passing data pegawai yang didapat ke view edit.blade.php
    return view('dashboardhsedit',['model_hs' => $model_hs]);

    }

    // update data pegawai
    public function update(Request $request, $id)
    {
        
         $tablehm = ModelHs::find($id);
    
    // insert data ke table
        $tablehm->name = $request->input('name');
        $tablehm->alamat = $request->input('alamat');
        $tablehm->deskripsi = $request->input('deskripsi');
        $tablehm->fasilitas = $request->input('fasilitas');
        $tablehm->tarif = $request->input('tarif');

        $file = $request->file('gambar');
        $extension = $file->getClientOriginalExtension();
        $filename = time().'.'.$extension;
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload,$filename);
        $tablehm->gambar = $filename;
        $tablehm->save();

    // alihkan halaman ke halaman
    return redirect('/sucessloginowner');
    }

    // method untuk hapus data pegawai
    public function hapus($id)
    {
    // menghapus data pegawai berdasarkan id yang dipilih
    DB::table('model_hs')->where('id',$id)->delete();
    
    // alihkan halaman ke halaman pegawai
    return redirect('/sucessloginadmin');
    }

    public function hapusreview($id)
    {
    // menghapus data pegawai berdasarkan id yang dipilih
    DB::table('review')->where('id',$id)->delete();


    // alihkan halaman ke halaman pegawai
    return redirect('/dreview');
    }

    
//CariCariCariCariCari
    public function search(Request $request)
    {   
       $cari = $request->nama;
 
        // mengambil data dari table pegawai sesuai pencarian data
        $model_hs = DB::table('model_hs')
        ->where('name','like',"%".$cari."%")
        ->paginate();
 
            // mengirim data pegawai ke view index
        return view('search',['model_hs' => $model_hs]);
    }

    public function buatreview(){
        return view('tambahreview');
    }

    public function simpanreview(Request $request)
    {
    
    // insert data ke table
    DB::table('review')->insert([
        'nama' => $request->nama,
        'review' => $request->review
    ]);

    // alihkan halaman ke halaman
    return redirect('/index');

    }



}