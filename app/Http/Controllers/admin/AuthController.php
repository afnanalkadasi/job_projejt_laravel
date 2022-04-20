<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;

class AuthController extends Controller
{
    public function listAll(){
        $users=User::where('is_active',1)
        ->where('email_verified_at','!=',NULL)
        ->orWhere('name','like','%af%')
        ->orderBy('id','desc')
        ->get();
        return view('admin.users')
        ->with('users',$users);
    }
    public function create(){
        return view('auth.sign_up');
    }

    public function register(Request $request){

        Validator::validate($request->all(),[
            'full_name'=>['required','min:3','max:50'],
            'u_email'=>['required','email','unique:users,email'],
            'user_pass'=>['required','min:5'],
            'confirm_pass'=>['same:user_pass']


        ],[
            'full_name.required'=>'full_name  is required',
            'full_name.min'=>'can not be less than 3 letters', 
            'u_email.unique'=>'there is an email in the table',
            'u_email.required'=>'u_email field is required',
            'u_email.email'=>'incorrect email format',
            'user_pass.required'=>'password is required',
            'user_pass.min'=>'password should not be less than 3',
            'confirm_pass.same'=>'password dont match',


        ]);

        $u=new User();
        $u->name=$request->full_name;

        $u->password=Hash::make($request->user_pass);
        $u->email=$request->u_email;
        $token=Str::uuid();
        $u->remember_token=$token;

        if($u->save()){
            $u->attachRole('user');
            $email_data=array(
                'name'=> $request->full_name,
                'activation_url'=>URL::to('/')."/verify_email/".$token); 
            
            Mail::to($request->u_email)->send(new WelcomeEmail($email_data));
            return redirect()->route('login')
            ->with(['success'=>'user created successful']);
        }
        return back()->with(['error'=>'can not create user']);

    }

    public function showLogin(){
        if(Auth::check())
        return redirect()->route($this->checkRole());
        else 
        return view('auth.login');
    }

    public function checkRole(){
        if(Auth::user()->hasRole('admin'))
             return 'users';
        elseif(Auth::user()->hasRole('user'))
             return 'user_profile';
            else 
            return 'index';
        
    }

    public function login(Request $request){
        Validator::validate($request->all(),[
            'u_email'=>['email','required','min:3','max:50'],
            'user_pass'=>['required','min:5']


        ],[
            'u_email.required'=>'u_email field is required',
            'u_email.min'=>'can not be less than 3 letters', 
            'user_pass.required'=>'user_pass field is required',
            'user_pass.min'=>'can not be less than 5 letters', 
           
        ]);

        if(Auth::attempt(['email'=>$request->u_email,'password'=>$request->user_pass,'is_active'=>1])){

            
            if(Auth::user()->hasRole('admin'))
            return redirect()->route('users');
            elseif (Auth::user()->hasRole('user')) {
                return redirect()->route('user_profile');
            }
            else 
            return redirect()->route('home');

        
        }
        else {
            return redirect()->route('login')->with(['message'=>'incorerct username or password or your account is not active ']);
        }

        
    }
    public function logout(){

        Auth::logout();
        return redirect()->route('login');

    }
}
