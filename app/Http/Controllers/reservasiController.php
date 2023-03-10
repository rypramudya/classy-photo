<?php
namespace App\Http\Controllers;
use App\Http\Controllers;
use App\Models\reservasi;
use Illuminate\Http\Request;


class reservasiController extends Controller
{

    public function index()
    {
        $reservasi = Reservasi::all();
        return view('reservasi.index',compact(['reservasi']));
    }

    public function create()
    {
        return view('reservasi.create');
    }

    public function store(Request $request)
    {
       Reservasi::create($request->except(['_token','submit']));
       return redirect('/reservasi');
    }


    public function edit($id)
    {
        $reservasi = Reservasi::find($id);
        return view('reservasi.edit', compact(['reservasi']));
    }
  
    public function update($id, Request $request)
    {
        $reservasi = Reservasi::find($id);
        $reservasi->update($request->except(['_token','submit']));
        return redirect('/reservasi');
    }

    public function destroy($id)
    {
       $reservasi = Reservasi::find($id);
       $reservasi->delete();
       return redirect('/reservasi');


    }


}
