<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\month;
use App\Models\hari;
use App\Models\Camera;
use Illuminate\Http\Request;

class PasdeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function bulanShow($pas_id, $bulan)
    {
        $haris = hari::all();
        $months = month::where('id', $bulan)->first();
        $pasien = User::find($pas_id);
        $image = Camera::where('pasien_id', $pas_id)
        ->whereMonth('created_at', $bulan)
        ->get()->all();
        //$studs = Studs::where('id_tech', auth()->user()->id)->orderBy('id_stud', 'asc')->Paginate(10);
        return view('pasien.pasde')->with('pasien', $pasien)
        ->with('haris', $haris)
        ->with('months', $months)
        ->with('image', $image);
    }

    public function hariShow($pas_id, $bulan, $hari)
    {
        $haris = hari::where('id', $hari)->first();
        $months = month::where('id', $bulan)->first();
        $pasien = User::find($pas_id);
        $image = Camera::where('pasien_id', $pas_id)
        ->whereMonth('created_at', $bulan)
        ->whereDay('created_at', $hari)->get()->last();
        //$studs = Studs::where('id_tech', auth()->user()->id)->orderBy('id_stud', 'asc')->Paginate(10);
        return view('pasien.showhari')
        ->with('pasien', $pasien)
        ->with('haris', $haris)
        ->with('months', $months)
        ->with('image', $image);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
