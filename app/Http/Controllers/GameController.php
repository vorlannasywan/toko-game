<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use App\Models\Purchase;

class GameController extends Controller
{
    public function index(){
        $data = Game::all();
        $purchases = Purchase::all();
        return view('game',compact('data', 'purchases'));
    }
    public function tambahgame(){
        return view('tambahgame');
    }

    public function insertgame(Request $request){

        $data = Game::create($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotogame/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('game')->with('success',' Game berhasil ditambahkan');
    }

    public function tampildata($id){
        $data = Game::find($id);
        // dd($data);
        return view('tampilgame', compact('data'));
    }
    public function updatedata(Request $request, $id){
        $data = Game::find($id);
        $data->update($request->all());
        return redirect()->route('game')->with('success',' Game berhasil diupdate');
    }
    public function deletegame($id){
        $data = Game::find($id);
        $data->delete();
        return redirect()->route('game')->with('success',' Game berhasil dihapus');
    }


    public function homegame(){
        $data = Game::all(); 
        return view('homegame', ['data' => $data]);
    }

    public function showgame($id){
        $data = Game::find($id);
        return view('showgame', ['game' => $data]);
    }
}
