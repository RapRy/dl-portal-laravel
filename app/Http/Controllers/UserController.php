<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegsiterMobileRequest;
use App\Http\Requests\SignInRequest;
use App\Http\Requests\SignUpRequest;
use App\Models\RegisteredMobile;
use App\Models\User;

class UserController extends Controller
{
    //
    public function sign_in(SignInRequest $request){

        $fields = $request->validated();

        if(auth()->attempt(['mobile_number' => $fields['mobile_number'], 'password' => $fields['password']])){
            $request->session()->regenerate();
            return redirect(route("home"));
        }else{
            return back()->with("error_message", "Invalid Credentials")->withInput();
        }

    }

    public function register_mobile(RegsiterMobileRequest $request){
            $fields = $request->validated();

            $activated = 1;
            $registeredDate = now();
    
            $mobileModel = new RegisteredMobile();
    
            $mobileModel->mobile_number = $fields['mobile_number'];
            $mobileModel->activated = $activated;
            $mobileModel->registration_date = $registeredDate;
    
            $mobileModel->save();
    
            return redirect(route("sign_up"))->with("message", $fields['mobile_number']." registered");
        
    }

    public function sign_up(SignUpRequest $request){
        $fields = $request->validated();
        $user_model = new User();
        $registered_id = RegisteredMobile::firstWhere("mobile_number", $fields['mobile_number']);
        $account_id = mt_rand(1000000000, mt_getrandmax());
        $user_type = "USER";
        $subscription_status = "SUBSCRIBED";
        $profile_pic = null;
        
        $user_model->registration_id = $registered_id['id'];
        $user_model->name = "{$fields['first_name']} {$fields['last_name']}";
        $user_model->account_id = $account_id;
        $user_model->password = $fields['password'];
        $user_model->first_name = $fields['first_name'];
        $user_model->last_name = $fields['last_name'];
        $user_model->profile_pic = $profile_pic;
        $user_model->mobile_number = $fields['mobile_number'];
        $user_model->user_type = $user_type;
        $user_model->subscription_status = $subscription_status;
        $user_model->email = $fields['email'];
        $user_model->receive_update = 0;
        $user_model->signup_date = now();
        $user_model->last_signin = null;
        $user_model->latest_activity = null;

        $user_model->save();

        return redirect(route("sign_up"))->with("message", "Sign Up Successful.");
    }
}
