<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use App\Direccion;
use App\Carddetail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Validation\Validator;


class UserController extends Controller
{
    public function userprofile(){
      $user = Auth::user();
      return view('userprofile', compact('user', $user));
    }

    public function updateAvatar(Request $request){
      if($request->hasfile('avatar')){
      $request->validate([
        'avatar'=> 'required|image|mimes:jpeg,png,jpg,giv,svg|max:2048',
      ]);

      $user = Auth::user();
      $avatarName = $user->id. '_avatar' . time() . '.' . request()->avatar->getClientOriginalExtension();
      $destinationpath = public_path('/uploads/avatars/');
      $request->avatar->move($destinationpath, $avatarName);
      $user->avatar = $avatarName;
      $user->save();

        return view('userprofile', compact('user', $user));
    }
      elseif($request->has('updateDetails')){

        $user = Auth::user();
        $userId = Auth::user()->id;
        $direccion = Direccion::updateOrCreate(
          ['id_user' => $userId],
          ['street' => $request->calle,
          'apartment' => $request->apartment,
          'postcode' => $request->postcode
        ]
      );
      $card = Carddetail::updateOrCreate(
        ['id_user' => $userId],
        ['number' => $request->card_number,
        'bank' => $request->bank,
        'owner' => $request->owner
      ]
    );
      //  $direccion = Direccion::where("id_user", $userId)->first();
      //  if($direccion === null){
      //    $direccion = new Direccion;
    //    }
    //    $direccion->street = $request->calle;
    //    $direccion->apartment = $request->apartment;
      //  $direccion->postcode = $request->postcode;
      //  $direccion->id_user = $userId;
        $direccion->save();
        $card->save();



        return view('userprofile', compact('direccion', 'card', 'user'));
      }

      elseif($request->has('changepassword')){

        $user = Auth::user();

          $this->validate($request, [
            'old_password' => 'different:new_password|required|string|min:8',
            'new_password' => 'required|string|min:8|confirmed',
            'new_password_confirmation' => 'required|string|min:8'
          ],
        [
          'different' => 'The old password must be different from the new one',
          'required' => 'The field :attribute must be filled',
          'string' => 'The field :attribute must be text',
          'min' => ':attribute must be at least 8 characters long',
          'confirmed' => 'The new password does not match'
        ]);

      if(Hash::check($request->old_password, $user->password)){
          $user->password = Hash::make($request->new_password);
          $user->save();
        return redirect()->back()->with('success', 'Your password was changed successfully');

      } else {
        return redirect()->back()->with('status', 'The password did not match the one in our records!');
      }
      }
       else{
          return redirect()->back();
        }

    }

    }
