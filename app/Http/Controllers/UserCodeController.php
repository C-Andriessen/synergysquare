<?php

namespace App\Http\Controllers;

use App\Mail\CodeEmail;
use App\Models\UserCode;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserCodeController extends Controller
{
    public function index()
    {
        return view('auth.verification-code');
    }

    public function verify(Request $request)
    {
        if (Hash::check($request->code, $request->user()->code->code))
        {
            if (strtotime("+30 minutes", strtotime($request->user()->code->created_at)) <= strtotime(now('Europe/Amsterdam')))
            {
                $code = rand(100000, 999999);
                $request->user()->code->delete();
                $userCode = new UserCode;
                $userCode->code = Hash::make($code);
                $userCode->user_id = $request->user()->id;
                Mail::to($request->user())->send(new CodeEmail($code));
                $userCode->save();
                return redirect(route('code.index'))->with('errormessage', 'Code is verlopen, nieuwe code is verzonden');
            }
            else
            {
                $request->user()->code->delete();
                return redirect()->intended(RouteServiceProvider::HOME);
            }
        }
        else
        {
            return redirect(route('code.index'))->with('errormessage', 'Code is onjuist');
        }
    }

    public function request()
    {
        request()->user()->code->delete();
        $code = rand(100000, 999999);
        $userCode = new UserCode;
        $userCode->code = Hash::make($code);
        $userCode->user_id = request()->user()->id;
        $userCode->save();
        Mail::to(request()->user())->send(new CodeEmail($code));
        return redirect(route('code.index'))->with('message', 'Nieuwe code verzonden');
    }
}
