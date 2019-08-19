<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Comp1Controller extends Controller
{
    public function index()
    {
    	$users = DB::table('webs')->get();
    	return view('index',['webs'=>$users]);
    }

    public function news()
    {
        return view('news');
    }
    public function contact()
    {
        return view('contact');
    }
    public function about()
    {
        return view('about');
    }

    // public function tambah()
    // {
    // 	return view('tambah');
    // }

    // public function protambah(Request $req)
    // {
    // 	DB::table('users')->insert([
    // 		'nama'=>$req->nama,
    // 		'jabatan'=>$req->jabatan,
    // 		'tanggal_lahir'=>$req->tanggal_lahir,
    // 		'alamat'=>$req->alamat
    // 	]);

    // 	return redirect('/home');
    // }

    // public function edit($id)
    // {
    // 	$users = DB::table('users')->where('id',$id)->get();
    // 	return view('edit',['users'=>$users]);
    // }	

    // public function updated(Request $req)
    // {
    // 	DB::table('users')->where('id',$req->id)->update([
    // 		'nama'=>$req->nama,
    // 		'jabatan'=>$req->jabatan,
    // 		'tanggal_lahir'=>$req->tanggal_lahir,
    // 		'alamat'=>$req->alamat
    // 	]);
    // 	return redirect('/home');
    // }

    // public function hapus($id)
    // {
    //     DB::table('users')->where('id',$id)->delete();
    //     return redirect('/home');
    // }
}
