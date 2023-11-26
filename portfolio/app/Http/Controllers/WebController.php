<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Educations;
use App\Models\Profile;
use App\Models\Project;
use App\Models\Skills;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class WebController extends Controller
{
    public function index(Request $request){

        $user = User::find(1);
        return view('Web.index',compact('user'));
    }

    public function contactme(Request $request){

        $contacts = Contact::where('user_id', 1)->get();
        $sentMessage = false;
        if($request->isMethod('post')){
            $request->validate([
                'email' => 'required|email|max:255',
                'name' => 'required',
                'subject' => 'required',
                'message' => 'required',
            ]);

            $validator = Validator::make($request->all(), [
                'email' => 'required|email',
                'name' => 'required|max:255',
                'subject' => 'required|max:255',
                'message' => 'required',
            ]);

            if ($validator->fails()) {
                return back(423)
                    ->withErrors($validator)
                    ->withInput();
            }

            $sentMessage = true;
        }
        return view('Web.contact', compact('contacts', 'sentMessage'));
    }


    public function aboutme(Request $request){

        $profile = Profile::where('user_id', 1)->first();
        $educations = Educations::where('user_id', 1)->get();
        $skills = Skills::where('user_id', 1)->get();
        return view('Web.about', compact('profile', 'educations', 'skills'));
    }


    public function projects(Request $request){

        $projects = Project::where('user_id', 1)->get();
        return view('Web.projects', compact('projects'));
    }
}
