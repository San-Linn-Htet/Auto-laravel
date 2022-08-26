<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Notifications\MyFirstNotification;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Notifications\Notification;
// use Notification;

class AdminController extends Controller
{
    public function addview()
    {

        if(Auth::id())
        {
            if(Auth::user()->usertype == 1 )
            {
                
                return view('admin.add_service');
            }
            else 
            {
                return redirect()->back();
            }
        }
        else
        {
            return redirect()->back();
        }

    }

    public function upload(Request $request)
    {
        $admin = new admin();

        $admin->services = $request->services;

        $admin->save();

        return redirect()->back()->with('message', 'Services Added Successfully');
    }

    public function showbooking()
    {

        $data = booking::all();

        return view('admin.showbooking', compact('data'));
    }

    public function approved($id)
    {
        $data = booking::find($id);

        $data->status = 'approved';

        $data->save();

        return redirect()->back();
    }

    public function canceled($id)
    {
        $data = booking::find($id);

        $data->status = 'canceled';

        $data->save();

        return redirect()->back();
    }

    public function showuser()
    {

        $data = User::all();



        return view('admin.showuser', compact('data'));
    }

    public function deleteuser($id)
    {
        $data = user::find($id);

        $data->delete();

        return redirect()->back();
    }

    public function updateuser($id)
    {

        $data = user::find($id);

        // $data

        return view('admin.update_user', compact('data'));
    }

    public function edituser(Request $request, $id)
    {

        $admin = user::find($id);

        $admin->name = $request->name;

        $admin->phone = $request->phone;

        $admin->speciality = $request->speciality;

        $admin->room = $request->room;

        $image = $request->file;

        if($image)
        {

    
            $imagename = time().".".$image->getClientOriginalExtension();
    
            $request->file->move('updateimage', $imagename);
    
            $admin->image = $imagename;

        }


        $admin->save();



        return redirect()->back()->with('message', 'User Details Update Successful');
    }

    public function emailview($id)
    {

        $data = booking::find($id);

        return view('admin.email_view', compact('data'));
    }

    public function sendemail(Request $request,$id)
    {

        $data = booking::find($id);

        $details = [

            'greeting' => $request->greeting,

            'body' => $request->body,

            'actiontext' => $request->actiontext,

            'actionurl' => $request->actionurl,
    
            'endpart' => $request->endpart

            
        ];
        // Notification::send($data,new MyFirstNotification($details));

        // $details->save();

    //     if ($data->save())
    //    {  
    //     $details=$data::all();

    // }
    // Notification::send($data, new MyFirstNotification($details));

    // Notification::route('mail', 'contact@example.com')->notify(new MyFirstNotification($details));


        return redirect()->back();
    }

    public function updatecustomer(Request $request)
    {
        $customer = new booking;

        $customer->date = $request->date;

        $customer->name = $request->name;

        $customer->email = $request->email;

        $customer->number = $request->number;

        $customer->services = $request->services;

        $customer->duration = $request->duration;

        if(Auth::id())
        {
            $customer->user_id = Auth::user()->id;

        }

        $customer->save();

        return view('admin.update_customer', compact('customer'));

        // return redirect()->back()->with('message', 'Booking Request Successful . We Will contact with you soon..');
    }

    public function showcustomer()
    {
        $data = booking::all();

        

        return view('admin.showcustomer', compact('data'));
    }

    public function deletecustomer($id)
    {
        $data = booking::find($id);

        $data->delete();

        return redirect()->back();
    }

   
}
