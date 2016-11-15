<?php

namespace App\Http\Controllers;

use App\Compare;
use App\Property;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;


class SessionController extends Controller
{
    public function accessSessionData(Request $request){
        if (!Session::has('compare'))
        {
            return view('compare.compareResult');
        }

        $oldCompare = Session::get('compare');
        $compare = new Compare($oldCompare);
        return view('compare.compareResult', ['property' => $compare->items]);

    }
    public function storeSessionData(Request $request, $id){
        $properties = Property::findOrFail($id);
        $oldCompare = Session::has('compare') ? Session::get('compare') : null;
        $compare = new Compare($oldCompare);
        $compare->add($properties, $properties->id);

        $request->session()->put('compare', $compare);
//        dd($request->session()->get('compare'));
        return redirect()->back();

//        $request->session()->put('properties', $properties);
//        dd($request->session()->all());
//        return redirect()->back();
//        echo "Data has been added to session";
    }
    public function deleteSessionData(Request $request){
        $request->session()->forget('compare');
        return redirect()->route('properties.index');
    }
}
