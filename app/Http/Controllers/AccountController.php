<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Cookie;

class AccountController extends Controller
{

    static function userAuthChecker()
    {
        $id = Users::select('userId', 'nickname', 'about', 'avatar')->where('login', '=', request()->cookie('USER'))->first();
        return $id;
    }

    static function listAccounts()
    {
        $accounts = Users::select('userId', 'nickname', 'about', 'avatar')->get();
        return json_encode($accounts);
        // return $accounts;
    }

    public function GenerateUserId()
    {
        $userId = rand(0, 999999);
        while (Users::where('userId', '=', $userId)->count() > 0) {
            $userId = rand(0, 999999);
        }
        return $userId;
    }

    public function setCookie($username)
    {
        $minutes = 60;
        Cookie::queue('USER', $username, $minutes);
    }

    public function getCookie(Request $request)
    {
        return request()->cookie('USER');
    }

    public function delCookie()
    {
        Cookie::queue(Cookie::forget('USER'));
    }

    public function register(Request $request)
    {

        $login = $_REQUEST['login'];
        $password = $_REQUEST['password'];
        $confirm_password = $_REQUEST['password_confirm'];

        if ($login != '' && $password != '' && $confirm_password != '') {
            $user = new Users();

            $haveUser = Users::where('login', '=', $login)->first();

            if ($haveUser) {
                return redirect('login');
            } else {
                $user->userId = $this->GenerateUserId();
                $user->login = $login;
//                $user->password = bcrypt($password);
                $user->password = $password;
                $user->nickname = 'user' . $user->userId;
                $user->about = '';
                $user->avatar = 'images/user_avatar_default.png';
                $user->save();

                AccountController::setCookie($user->login);
                // return dd($request->cookie('user'));
                return redirect('profile');
            }
        } else {
            return view('index');
        }
    }

    public function login(Request $request)
    {
        $login = $_REQUEST['login'];
        $password = $_REQUEST['password'];

        if (!empty($login) && !empty($password)) {
            $haveUser = Users::where('login', '=', $login)->first();
            if ($haveUser) {
                AccountController::setCookie($login);
                return redirect('profile/' . $haveUser->userId);
            } else {
                return redirect('register');
            }
        } else {
            return redirect('index');
        }
    }

    public function settings(Request $request)
    {
        $user = Users::select()->where('login', '=', request()->cookie('USER'))->first();

        if (!empty($request['avatar'])) {
            $file = $request->file("avatar");
            $file->move("images", $file->getClientOriginalName());
            $user->avatar = 'images/' . $file->getClientOriginalName();
        }
        if (!empty($request['url'])) {
            $user->userId = $request['url'];
        }
        if (!empty($request['nickname'])) {
            $user->nickname = $request['nickname'];
        }
        if (!empty($request['about'])) {
            $user->about = $request['about'];
        }
        $user->save();
        return redirect('profile/' . $user->userId);
    }
    public function logout(Request $request)
    {
        AccountController::delCookie();
        return redirect('/');
    }
}
