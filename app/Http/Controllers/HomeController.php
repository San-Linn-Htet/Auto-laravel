<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use App\Models\Booking;
use App\Models\User;


class HomeController extends Controller
{
    public function redirect() 
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype=='0')
            {
                $admins = admin::all();

                return view('user.home', compact('admins'));
            }
            else
            {
                return view('admin.home');
            }
        }
        else 
        {
            return redirect()->back();
        }
    }

    public function index()
    {

        if(Auth::id())
        {
            return redirect('home');
        }

        else
        {
            $admins = admin::all();

            return view('user.home', compact('admins'));

        }


    }

    public function booking(Request $request)
    {

        $data = new booking;

        $data->date = $request->date;

        $data->name = $request->name;

        $data->email = $request->email;

        $data->number = $request->number;

        $data->services = $request->services;

        $data->duration = $request->duration;

        $data->notes = $request->notes;


        // if(Auth::id())
        // {
        //     $data->user_id = Auth::user()->id;

        // }

        $data->save();

        return redirect()->back()->with('message', 'Booking Request Successful . We Will contact with you soon..');
        
    }



    public function cancel_booking($id)
    {
    
        $data = booking::find($id);

        $data->delete();

        return redirect()->back();

        // $data->delete();

        // if ($data != null) {
        //     $data->delete();
        //     return redirect()->back()->ith(['message'=> 'Appointment deleted!!']);
        // }
    
        // return redirect()->back()->with(['message'=> 'Wrong ID!!']);


        // return redirect()->back();
    }
}
