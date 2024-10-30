<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.admin_login');
    }


    public function dash()
    {
        return view('admin.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('admin.admin_login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }
    public function admin_login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $data = admin::where("email", $request->email)->first(); // single data first()     // ->get(); // arr
       // print_r("yes");die;
        if ($data) {
            if (Hash::check($request->password, $data->password)) {
                if ($data->status == "Unblock") {
                    
                    // create session
                    session()->put('ses_adminname',$data->name); 
                    session()->put('ses_adminid',$data->id); 


                    Alert::success('Success', 'Login Success');
                    return redirect('/dashboard');
                }else {
                    Alert::error('Failed', 'Login Failed due Blocked Account');
                    return redirect('/admins');
                }
            } else {
                Alert::error('Failed', 'Login Failed due wrong Password');
                return redirect('/admins');
            }
        } else {
            Alert::error('Failed', 'Login Failed due wrong Email');
            return redirect('/admins');
        }
    }

    function admin_logout(){

        session()->pull('ses_adminid');
		session()->pull('ses_adminname');
		Alert::success('Congrats', 'You Have Successfully Logout');
		return redirect('/admins');
    }

    /**
     * Display the specified resource.
     */
    public function show(admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(admin $admin)
    {
        //
    }
}
