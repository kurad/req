<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Requests;
use Illuminate\Support\Facades\Auth;
use DB;

class UserController extends Controller
{
    public function index(){
        return view('users.index');
    }
    public function request_form(){
        $requests = Requests::all();
        return view('users.create_request_form', compact('requests'));
    }

    public function item_form(){
        $user_id = Auth::user()->id;
        $re = Requests::where('requested_by', '=', $user_id)->latest()->first();
        return view('users.request_form', compact('re'));
    }
    public function all_requests(){
        $requests = Requests::all();
        return view('users.Allrequests', compact('requests'));
    }

    public function create(Request $request){
        $request->validate([
            'itemname'=>'required',
            'quantity'=>'required',
            'unit_price'=>'required'
        ]);

        $newR=new Requests();
        $newR->itemname = $request->itemname;
        $newR->quantity = $request->quantity;
        $newR->unit_price = $request->unit_price;
        $newR->requested_by = Auth::user()->id;
        $save = $newR->save();

        if($save){
            return redirect()->back()->with('success','Item requested successfully');
        }else{
            return redirect()->back()->with('fail','Something went wrong');
        }   
    }
    public function createRequest(Request $request){
        $request->validate([
            'dept'=>'required'
        ]);

        $newR=new Requests();
        $newR->department = $request->dept;
        $newR->requested_by = Auth::user()->id;
        $save = $newR->save();

        return redirect("/request_item");
    }
}
