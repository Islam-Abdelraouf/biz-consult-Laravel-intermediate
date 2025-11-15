<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use App\Models\Member;
use App\Models\Company;
use App\Models\Feature;
use App\Models\Service;
use App\Models\Subscriber;
use App\Models\Testimonial;
use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSubscriberRequest;
use App\Http\Requests\StoreMessageRequest;


class FrontController extends Controller
{

    public function index()
    {

        $hero = Hero::findOrfail(1);
        $features = Feature::all();
        $companies = Company::all();
        $testimonials = Testimonial::all();
        $members = Member::all();

        return view('front.index', get_defined_vars());
    }

    public function about()
    {
        return view('front.about');
    }

    public function service()
    {
        return view('front.service');
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function subscriberStore(StoreSubscriberRequest $request)
    {
        // dd($request->all());
        $data = $request->validated();
        Subscriber::create($data);
        return back()->with('subscribtion_success', 'Thanks for subscription, welcome to our website!');
    }


    public function messageStore(StoreMessageRequest $request)
    {
        ($request->all());
        $data = $request->validated();
        Message::create($data);
        return back()->with('success', 'Thanks for reaching out to us!');
    }
}
