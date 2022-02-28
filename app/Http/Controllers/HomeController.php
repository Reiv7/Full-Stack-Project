<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;




class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    //-----Home Page -----\\

    public function index()
    {
        return view('home');
    }

    //-----Profile Page -----\\

    public function userProfile()
    {
        return view('profile');
    }
    //-----Update User Img -----\\
    public function updateImg(Request $request){

        //Handling request of updating profile pic
        if($request->hasFile('avatar')){
            $request->validate([
                'avatar' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|',],['image.required'=>'Image extentions must be " Jpg , Png , Jpeg , Gif , Svg "']);
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,300)->save(public_path('/uploads/avatars/' . $filename) );
            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();


        }
        return view('profile' , array('user'=> Auth::user()) );

    }

    //-----Update User Info -----\\

    public function updateInfo(Request $request)
    {
        $validator = \Validator::make($request->all(),[
            'email' => 'required|string|max:40|email|unique:users,email,'.Auth::user()->id,
            'password' => ['required', 'string', 'min:8'],
            'phone' => ['string', 'min:11'],
            'address' => ['string', 'max:40'],

        ]);
        if(!$validator->passes()){
            return redirect('/profile')->with(['status'=>'Check your input,Something went wrong.']);

        }else{
            $query = User::find(Auth::user()->id)->update([
                'email'=>$request->email,
                'password'=>Hash::make($request->password),
                'phone'=>$request->phone,
                'address'=>$request->address,
            ]);
            if(!$query){
                return redirect('/profile')->with(['status'=>'Check your input,Something went wrong.']);
            }else{
                return redirect('/profile')->with(['status'=>'Your info updated successfully.']);

            }

        }
        // return view('profile');
        // return redirect('profile')->with('status','Info changed successfully');

    }


}
