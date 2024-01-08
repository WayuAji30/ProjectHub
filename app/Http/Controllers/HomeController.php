<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

use App\Models\UserModel;

class HomeController extends Controller
{
    public function index()
    {
        $id = session('id_user');
        $id_google_user = session('id_google_user');

        $user = UserModel::where('id',$id)->orWhere('google_id',$id_google_user)->firstOrFail();

        if($user){
            if($user->id_status !== 1 || $user->id_status !== 4){
                view()->share(['user' => $user]);
                return view('home.index',['user' => $user]);
            }else{
                return redirect()->to('/login')->with(['failed' => 'You cannot enter the main page, your account is offline or inactive!!']);
            }
        }else{
            return redirect()->to('/login')->with(['failed' => 'You cannot enter the main page, please check your account!!']);
        }       
    }

    public function search()
    {
        view()->share(['user' => $user]);
        return view('home.search');
    }

    public function detail_project()
    {
        view()->share(['user' => $user]);
        return view('home.detail_project');
    }

    public function profile()
    {
       // view()->share(['user' => $user]);
        return view('profile.profile');
    }

    public function profiles()
    {
        view()->share(['user' => $user]);
        return view('stalker.profiles');
    }

    public function setting()
    {
        view()->share(['user' => $user]);
        return view('profile.setting');
    }
}
