<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // public function create(Request $request){
    //     $name=$request->input('name');
    //     $age=$request->input('age');
    //     $phone=$request->input('phone');

    //     $student= new User();
    //     $student-> name = $name;
    //     $student-> age = $age;
    //     $student-> phone = $phone;

    //     $student->save();
    // }

    public function list(){
        $users=User::all();
        // dd($users); 
        return view('user',['users'=>$users]);
    }

    public function edit($id)
{
    $user = User::findOrFail($id);
    return view('useredit', compact('user'));
}

public function update(Request $request, $id)
{
    $user = User::findOrFail($id);
    $user->name = $request->name;
    $user->email = $request->email;
    $user->role = $request->role;
    $user->save();

    return redirect()->route('user');
}
public function destroy($id)
{
    $user = User::findOrFail($id);
    $user->delete();
    
    return redirect()->route('user');
}


}
