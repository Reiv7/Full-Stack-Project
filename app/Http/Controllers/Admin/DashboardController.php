<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class DashboardController extends Controller
{
    public function users()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }


    public function addsuser()
    {
        return view('admin.users.add');
    }





    public function adduser(Request $request)

    {
        $request->validate(
            [
                'name'              =>      'required|string|max:20',
                'email'             =>      'required|email|unique:users,email',
                'phone'             =>      'required|numeric|min:10',
                'password'          =>      'required|alpha_num|min:8',
                'address'           =>      'required|string'
            ]
        );

        $dataArray      =       array(
            "name"          =>          $request->name,
            "email"         =>          $request->email,
            "phone"         =>          $request->phone,
            "address"       =>          $request->address,
            "password"      =>          Hash::make($request->password),
        );

        $user           =       User::create($dataArray);
        if(!is_null($user)) {
            return redirect('users')->with('status','User Added successfully ☑️');
        }
        else
        {
            return redirect('users')->with('status','Something went wrong ❌');
        }
    }




    public function showuser($id)
    {
        $users = User::find($id);
        return view('admin.users.show', compact('users'));
    }

    public function edituser($id)
    {
        $users = User::find($id);
        return view('admin.users.edit', compact('users'));
    }
    public function updateuser(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'phone'=>$request->phone,
            'address'=>$request->address
        ]);
        return redirect('users')->with('status','User details updated successfully ☑️');
    }

    public function deleteuser($id)
    {

        $user = User::findOrFail($id);
        $path = '/uploads/avatar/'.$user->img;
            if(File::exists($path))
            {
                File::delete($path);
            }
        $user->delete();
        return redirect('users')->with('status','User has been deleted successfully ☑️');
    }
}
