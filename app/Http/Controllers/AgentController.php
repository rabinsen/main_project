<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;

class AgentController extends Controller
{
    public function agentSearch(Request $request){

        $users = User::where(function($query)  use ($request){
//            if ( ($group_id = $request->get("group_id"))){
//                $query->where("group_id", $group_id);
//            }

            if (($terms = $request->get('terms'))){
                $query->orWhere('first_name', 'like', '%' . $terms . '%');
                $query->orWhere('last_name', 'like', '%' . $terms . '%');
                $query->orWhere('address', 'like', '%' . $terms . '%');
                $query->orWhere('city', 'like', '%' . $terms . '%');
            }
        })
            ->orderBy("id", "desc")
            ->paginate(6);

//
        return view('agents.showAgents', [
            'users' => $users
        ]);
    }

    public function getAgentInfo(){
        return view('agents.getAgentProfile', array('user' => Auth::user()));
    }

    public function uploadAgent(Request $request){
        $user = Auth::user();

        $user->specialities = $request->specialities;
        $user->website = $request->website;
        $user->experience = $request->experience;
        $user->details = $request->details;
        $user->save();

        return view('dashboard');
    }

    public function editAgent(){
        $user = Auth::user();
        return view('agents.editAgentProfile', compact('user'));
    }

    public function updateAgent(Request $request, $id){
        $user = User::find($id);

        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->address = $request->input('address');
        $user->city = $request->input('city');
        $user->country = $request->input('country');
        $user->phone1 = $request->input('phone1');
        $user->phone2 = $request->input('phone2');
        $user->website = $request->input('website');
        $user->experience = $request->input('experience');
        $user->specialities = $request->input('specialities');
        $user->details = $request->input('details');

        $user->save();

        return redirect()->route('agentDetails', $user->id);
    }
}
