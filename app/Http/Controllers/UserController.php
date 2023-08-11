<?php

namespace App\Http\Controllers;
use App\Models\UserModel;


use Illuminate\Http\Request;

class UserController extends Controller
{
   public function index()
   {
    $data['users'] = UserModel::orderby('id','desc')->paginate(5);
     return view('users.index', $data);
   }

   public function create()
   {

    return view('users.create');
   }
   public function store(Request $request)
   {
    $request->validate([
        'name' => 'required',
        'email' => 'required',
        'address'=> 'required'

    ]);
    $usermodel = new UserModel;
    $usermodel->name = $request->name;
    $usermodel->email = $request->email;
    $usermodel->address = $request->address;
    $usermodel->save();
    //dd('data saved');
    return redirect()->route('users.index')
    ->with('success', 'User has been Created');

   }

   public function destroy($id)
    {
        //$usermodel->delete();
        //softDelete
        UserModel::find($id)->delete();

          UserModel::destroy($id);

        return redirect()->route('users.index')
                        ->with('success','User has been deleted successfully');
    }

}

