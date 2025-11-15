<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;
use App\Models\Message;
use App\Models\Testimonial;
use App\Models\Member;
use App\Models\Company;
use App\Models\Service;

class DashboardController extends Controller
{

    public function index(){

        $subscribers = Subscriber::all()->count();
        $messages = Message::all()->count();
        $testimonials = Testimonial::all()->count();
        $members = Member::all()->count();
        $clients = Company::all()->count();
        $services = Service::all()->count();

        return view('admin.dashboard.index',get_defined_vars());
    }
}
