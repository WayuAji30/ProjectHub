<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

use App\Models\UserProfileModel;
use App\Models\CategoryProjectModel;

class HomeController extends Controller
{
    public function index()
    {  
        $id = session('id_user');
        //$id_google_user = session('id_google_user');
        
        /* QUERY FOR USER  */
        $user = DB::table('tbl_user_profile')
                ->join('tbl_user','tbl_user_profile.id_user_login','=','tbl_user.id')
                ->join('tbl_status','tbl_user_profile.id_status','=','tbl_status.id')
                ->select('tbl_user.*', 'tbl_user_profile.*', 
                         'tbl_status.status' , 
                         'tbl_user_profile.id_status as id_status_profile',
                         'tbl_user.id_status as id_status_login',
                         'tbl_user.id as id_user_login', 
                         'tbl_user_profile.id as id_user_profile')
                ->where('tbl_user.id','=',$id)
                ->first();
        if($user){
            if($user->id_status_login !== 1 && $user->id_status_login !== 4){
                /* QUERY FOR CATEGORIES PROJECT */
                    $categories = CategoryProjectModel::all();
                /* QUERY FOR CATEGORIES PROJECT END */

                /* QUERY FOR PROJECTS */
                    $projects = DB::table('tbl_projects')
                    ->join('tbl_user_profile','tbl_projects.id_project_owner','=','tbl_user_profile.id')
                    ->join('tbl_user','tbl_user_profile.id_user_login','=','tbl_user.id')
                    ->join('tbl_project_categories','tbl_projects.id_category','=','tbl_project_categories.id')
                    ->join('tbl_status','tbl_projects.id_status','=','tbl_status.id')
                    ->select('tbl_projects.*', 
                             'tbl_user_profile.*',
                             'tbl_user.*',
                             'tbl_project_categories.*', 
                             'tbl_status.status', 
                             'tbl_projects.id as id_projects', 
                             'tbl_user_profile.id as id_user_profile',
                             'tbl_user.id as id_user_login',
                             'tbl_project_categories.id as id_pc',
                             'tbl_status.id as $id_status')
                    ->get();
                /* QUERY FOR PROJECTS END*/

                view()->share(['user' => $user,'categories' => $categories]);
                return view('home.index',['user' => $user, 'projects' => $projects]);
            }else{
                return redirect()->to('/login')->with(['failed' => 'You cannot enter the main page, your account is offline or inactive!!']);
            }
        }else{
            return redirect()->to('/login')->with(['failed' => 'You cannot enter the main page, please login or check your account!!']);
        }
         /* QUERY FOR USER END */
        

    }

    public function search()
    {
        $id = session('id_user');
        //$id_google_user = session('id_google_user');
        
        /* QUERY FOR USER  */
        $user = DB::table('tbl_user_profile')
                ->join('tbl_user','tbl_user_profile.id_user_login','=','tbl_user.id')
                ->join('tbl_status','tbl_user_profile.id_status','=','tbl_status.id')
                ->select('tbl_user.*', 'tbl_user_profile.*', 
                         'tbl_status.status' , 
                         'tbl_user_profile.id_status as id_status_profile',
                         'tbl_user.id_status as id_status_login',
                         'tbl_user.id as id_user_login', 
                         'tbl_user_profile.id as id_user_profile')
                ->where('tbl_user.id','=',$id)
                ->first();
        if($user){
            if($user->id_status_login !== 1 && $user->id_status_login !== 4){
                /* QUERY FOR CATEGORIES PROJECT */
                    $categories = CategoryProjectModel::all();
                /* QUERY FOR CATEGORIES PROJECT END */

                /* QUERY FOR PROJECTS */
                    $projects = DB::table('tbl_projects')
                    ->join('tbl_user_profile','tbl_projects.id_project_owner','=','tbl_user_profile.id')
                    ->join('tbl_user','tbl_user_profile.id_user_login','=','tbl_user.id')
                    ->join('tbl_project_categories','tbl_projects.id_category','=','tbl_project_categories.id')
                    ->join('tbl_status','tbl_projects.id_status','=','tbl_status.id')
                    ->select('tbl_projects.*', 
                             'tbl_user_profile.*',
                             'tbl_user.*',
                             'tbl_project_categories.*', 
                             'tbl_status.status', 

                             'tbl_projects.id as id_projects', 
                             'tbl_user_profile.id as id_user_profile',
                             'tbl_user.id as id_user_login',
                             'tbl_project_categories.id as id_pc',
                             'tbl_status.id as $id_status')
                    ->get();
                /* QUERY FOR PROJECTS END*/

                view()->share(['user' => $user,'categories' => $categories]);
                return view('home.index',['user' => $user, 'projects' => $projects]);
            }else{
                return redirect()->to('/login')->with(['failed' => 'You cannot enter the main page, your account is offline or inactive!!']);
            }
        }else{
            return redirect()->to('/login')->with(['failed' => 'You cannot enter the main page, please login or check your account!!']);
        }
         /* QUERY FOR USER END */
    }       
    

    public function detail_project(Request $request)
    {
        $id = session('id_user');
        $id_google_user = session('id_google_user');
        $id_project = htmlspecialchars($request->input('id_project'));

        /* QUERY FOR USER  */
        $user = DB::table('tbl_user_profile')
                ->join('tbl_user','tbl_user_profile.id_user_login','=','tbl_user.id')
                ->join('tbl_status','tbl_user_profile.id_status','=','tbl_status.id')
                ->select('tbl_user.*', 'tbl_user_profile.*', 'tbl_status.status' , 'tbl_user.id as id_user_login', 'tbl_user_profile.id as id_user_profile')
                ->where('tbl_user.id','=',$id)
                ->orWhere('tbl_user.google_id','=',$id_google_user)
                ->first();
        if($user){
            if($user->id_status !== 1 || $user->id_status !== 4){
                 /* QUERY FOR CATEGORIES PROJECT */
                 $categories = CategoryProjectModel::all();
                 /* QUERY FOR CATEGORIES PROJECT END */

                /* QUERY FOR PROJECTS */
                $projects = DB::table('tbl_projects')
                ->join('tbl_user_profile','tbl_projects.id_project_owner','=','tbl_user_profile.id')
                ->join('tbl_project_categories','tbl_projects.id_category','=','tbl_project_categories.id')
                ->join('tbl_status','tbl_projects.id_status','=','tbl_status.id')
                ->select('tbl_projects.*', 
                            'tbl_user_profile.*',
                            'tbl_project_categories.*', 
                            'tbl_status.status', 
                            'tbl_projects.id as id_projects', 
                            'tbl_user_profile.id as id_user_profile',
                            'tbl_project_categories.id as id_pc',
                            'tbl_status.id as $id_status')
                ->where('tbl_projects.id','=',$id_project)
                ->first();

                /* QUERY FOR PROJECTS END*/


                view()->share(['user' => $user, 'categories' => $categories]);
                return view('home.detail_project',['user' => $user, 'projects' => $projects]);
            }else{
                return redirect()->to('/login')->with(['failed' => 'You cannot enter the main page, your account is offline or inactive!!']);
            }
        }else{
            return redirect()->to('/login')->with(['failed' => 'You cannot enter the main page, please login or check your account!!']);
        }  
    }

    public function profile()
    {
        $id = session('id_user');
        $id_google_user = session('id_google_user');

       /* QUERY FOR USER  */
        $user = DB::table('tbl_user_profile')
        ->join('tbl_user','tbl_user_profile.id_user_login','=','tbl_user.id')
        ->join('tbl_status','tbl_user_profile.id_status','=','tbl_status.id')
        ->select('tbl_user.*', 'tbl_user_profile.*', 'tbl_status.status' , 'tbl_user.id as id_user_login', 'tbl_user_profile.id as id_user_profile')
        ->where('tbl_user.id','=',$id)
        ->orWhere('tbl_user.google_id','=',$id_google_user)
        ->first();

        if($user){
            if($user->id_status !== 1 || $user->id_status !== 4){
                view()->share(['user' => $user]);
                return view('profile.profile',['user' => $user]);
            }else{
                return redirect()->to('/login')->with(['failed' => 'You cannot enter the main page, your account is offline or inactive!!']);
            }
            }else{
                return redirect()->to('/login')->with(['failed' => 'You cannot enter the main page, please login or check your account!!']);
        }
        /* QUERY FOR USER END */
    }

    public function profiles()
    {
        $id = session('id_user');
        $id_google_user = session('id_google_user');

        /* QUERY FOR USER  */
        $user = DB::table('tbl_user_profile')
                ->join('tbl_user','tbl_user_profile.id_user_login','=','tbl_user.id')
                ->join('tbl_status','tbl_user_profile.id_status','=','tbl_status.id')
                ->select('tbl_user.*', 'tbl_user_profile.*', 'tbl_status.status' , 'tbl_user.id as id_user_login', 'tbl_user_profile.id as id_user_profile')
                ->where('tbl_user.id','=',$id)
                ->orWhere('tbl_user.google_id','=',$id_google_user)
                ->first();
        if($user){
            if($user->id_status !== 1 || $user->id_status !== 4){
                view()->share(['user' => $user]);
                return view('stalker.profiles',['user' => $user]);
            }else{
                return redirect()->to('/login')->with(['failed' => 'You cannot enter the main page, your account is offline or inactive!!']);
            }
        }else{
            return redirect()->to('/login')->with(['failed' => 'You cannot enter the main page, please login or check your account!!']);
        }
         /* QUERY FOR USER END */       
    }

    public function setting()
    {
        $id = session('id_user');
        $id_google_user = session('id_google_user');

        /* QUERY FOR USER  */
        $user = DB::table('tbl_user_profile')
                ->join('tbl_user','tbl_user_profile.id_user_login','=','tbl_user.id')
                ->join('tbl_status','tbl_user_profile.id_status','=','tbl_status.id')
                ->select('tbl_user.*', 'tbl_user_profile.*', 'tbl_status.status' , 'tbl_user.id as id_user_login', 'tbl_user_profile.id as id_user_profile')
                ->where('tbl_user.id','=',$id)
                ->orWhere('tbl_user.google_id','=',$id_google_user)
                ->first();
        if($user){
            if($user->id_status !== 1 || $user->id_status !== 4){
                view()->share(['user' => $user]);
                return view('profile.setting',['user' => $user]);
            }else{
                return redirect()->to('/login')->with(['failed' => 'You cannot enter the main page, your account is offline or inactive!!']);
            }
        }else{
            return redirect()->to('/login')->with(['failed' => 'You cannot enter the main page, please login or check your account!!']);
        }
         /* QUERY FOR USER END */       
    }

    public function change_status_profile(Request $request){
        $this->validate($request,[
            'status_profile'=>['required',Rule::in([5,6])]
        ], [
            'status_profile.in' => 'Error to change status',
        ]);

        $id = htmlspecialchars($request->input('id_user_profile'));
        $status = $request->input('status_profile');
        
        UserProfileModel::where('id',$id)->update(['id_status' => $status]);

        return back();
    }
}
