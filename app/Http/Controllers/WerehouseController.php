<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Werehouse;

class WerehouseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
      $werehouse = Werehouse::all();
      return view('werehouse', ['werehouse' => $werehouse]);
    }

    public function werehouseaction(Request $request){
      $werehouse = new Werehouse;
      $werehouse->werehouse_name = $request->werehouse_name;
      $werehouse->save();

      return redirect('werehouse');
    }

    public function show($werehouse_id){
      $werehouse = Werehouse::find($werehouse_id);
      return view('werehouse_update', ['werehouse' => $werehouse]);
    }

    public function updatewerehouse(Request $request, $werehouse_id){
      $werehouse = Werehouse::find($werehouse_id);
      $werehouse->update($request->all());
      $werehouse->save();

      return redirect('werehouse');
    }

    public function destroy($werehouse_id){
      $werehouse = Werehouse::find($werehouse_id);
      $werehouse->delete();

      return redirect('werehouse');
    }
}
