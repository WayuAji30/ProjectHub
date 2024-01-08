<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\DB;

use App\Models\UserProfileModel;

class HomeController extends Controller
{
    public function index()
    {  
        $id = session('id_user');
        $id_google_user = session('id_google_user');

        $user = DB::table('tbl_user_profile')
                ->join('tbl_user','tbl_user_profile.id_user_login','=','tbl_user.id')
                ->select('tbl_user.*', 'tbl_user_profile.*')
                ->where('tbl_user.id','=',$id)
                ->orWhere('tbl_user.google_id','=',$id_google_user)
                ->first();
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
        $id = session('id_user');
        $id_google_user = session('id_google_user');

        $user = UserProfileModel::where('id',$id)->orWhere('google_id',$id_google_user)->firstOrFail();

        if($user){
            if($user->id_status !== 1 || $user->id_status !== 4){
                view()->share(['user' => $user]);
                return view('profile.profile',['user' => $user]);
            }else{
                return redirect()->to('/login')->with(['failed' => 'You cannot enter the main page, your account is offline or inactive!!']);
            }
        }else{
            return redirect()->to('/login')->with(['failed' => 'You cannot enter the main page, please check your account!!']);
        }       

        
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
