<?php

namespace App\Http\Controllers;

use App\Models\Money;
use Illuminate\Http\Request;

class MoneyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Money::get();
        return view('index2', compact('data'));
    }

    public function indexMoney()
    {
        return view('add');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
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
            'nama' => 'required',
            'nis' => 'required',
            'rayon' => 'required',
        ]);

        Money::create([
          'nama' => $request->nama,  
          'nis' => $request->nis,  
          'rayon' => $request->rayon,  
        ]);

        return redirect()->back()->with('success', 'Successfully Added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Money  $money
     * @return \Illuminate\Http\Response
     */
    public function show(Money $money)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Money  $money
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Money::where('id', $id)->first();
        return view('edit2')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Money  $money
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' =>'required',
            'nis' =>'required|min:8',
            'rayon' =>'required',
            'action' =>'required',
            'money' =>'required',
        ]);

        $data = Money::where('id', $id)->first();

        if($request->action == 'add') {
            $total_money = $data['money'] + $request->money;
        } else{   
            if($data['money'] < $request->money && $data['money'] == $request->money){
                return redirect(route('index'))->with('fail', 'Saldo anda kurang!!');
            } else{
                $total_money = $data['money'] - $request->money;
            }
        }

        $data->update([
            'nama'=> $request->nama,
            'nis'=> $request->nis,
            'rayon'=> $request->rayon,
            'money'=> $total_money, 
        ]);

        return redirect(route('index'))->with('edit', 'Berhasil edit data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Money  $money
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Money::where('id', $id)->delete();
        return redirect(route('index'));
    }
}
