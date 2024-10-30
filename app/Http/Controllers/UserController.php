<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use App\Mail\welcomeMail;
use App\Mail\forgetMail;
use Illuminate\Support\Facades\Mail;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('website.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('website.signup');
    }
    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $data = User::where("email", $request->email)->first(); // single data first()     // ->get(); // arr
        if ($data) {
            if (Hash::check($request->password, $data->password)) {
                if ($data->status == "Unblock") {
                    
                    // create session
                    session()->put('ses_username',$data->name); 
                    session()->put('ses_userid',$data->id); 
                    session()->put('ses_userimage',$data->img); 


                    Alert::success('Success', 'Login Success');
                    return redirect('/home');
                }else {
                    Alert::error('Failed', 'Login Failed due Blocked Account');
                    return redirect('/login');
                }
            } else {
                Alert::error('Failed', 'Login Failed due wrong Password');
                return redirect('/login');
            }
        } else {
            Alert::error('Failed', 'Login Failed due wrong Email');
            return redirect('/login');
        }
    }

    function user_logout(){

        session()->pull('ses_userid');
		session()->pull('ses_username');
		Alert::success('Congrats', 'You Have Successfully Logout');
		return redirect('/home');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            // 'image_url' => 'required|mimes:jpg,jpeg,png,gif',
            'name' => 'required|alpha:ascii',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'gender' => 'required',
            'language' => 'required',
            
        ]); 

        $data = new User;

        $file = $request->file('img');
        $file_name = time().'_img.'. $file->getClientOriginalExtension();
        $file->move('website/images/assets/users/', $file_name);

        $data->img = $file_name;

        $data->name = $request->name;
        $email = $data->email = $request->email;
        $data->password = Hash::make($request->password);
        $data->gender = $request->gender;


        $data->language = implode("," , $request->language);
       
      

        $data->save();
        Mail::to($email)->send(new welcomeMail);
        Alert::success('Success Title', 'User Signup Success!');
        return redirect('/auth_loign');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    // Forget Pass

    public function forget_pass(Request $request)
    {
        return view('website.forget_pass');
    }
    public function showForgetOtpForm()
{
    return view('website.forget_otp'); // Assuming forget_otp.blade.php is your OTP form view
}
    public function reset_pass()
{
    return view('website.reset_pass'); // Assuming forget_otp.blade.php is your OTP form view
}
    public function forget_otp(Request $request)
    {
        $data = user::where("email", $request->email)->first();
        if($data){
            $email = $data->email;
            $id = $data->id;

            $otp = rand(100000, 999999);

            session()->put('ses_forget_id', $id);
            session()->put('ses_forget_otp', $otp);

            $forget_data = array("otp"=>session()->get('ses_forget_otp'));
            Mail::to($email)->send(new forgetMail($forget_data));
            return redirect('/forget_otp');
        }
        else
        {
            Alert::error('error', 'Username Not valid');
            return redirect('/forget_pass');
        }
        
    }
    public function verify_otp(Request $request)
    {
        
        if(session()->get('ses_forget_otp') == $request->otp){
            
            session()->put('ses_reset_pass', "reset");
            session()->pull('ses_forget_otp');
            
            
            return redirect('/reset_pass');
        }
        else
        {
            Alert::error('error', 'OTP is invalid');
            return redirect('/forget_otp');
        }
        
    }
    // public function update_pass($id, Request $request)
    // {
    //     $request->validate([
    //         'new_password' => 'required|min:6|confirmed', // optional validation
    //     ]);
    
    //     $data = User::findOrFail($id); // Use `findOrFail` to handle missing records gracefully
    //     // print_r($data);die;
    //     $data->password = Hash::make($request->new_password);
    //     $data->update();
    
    //     session()->forget(['ses_reset_pass', 'ses_forget_id']);
    
    //     Alert::success('Success', 'Password reset successful!');
    //     return redirect('/login');
    // }

    public function update_pass($id,Request $request)
    {
        $data=user::find($id);
        $data->password=Hash::make($request->new_password);
        $data->update();
        
        session()->pull('ses_reset_pass');
        session()->pull('ses_forget_id');

        Alert::success('Success', 'Reset Password Success');
        return redirect('/login');
    }
    
    
      
        
    



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
