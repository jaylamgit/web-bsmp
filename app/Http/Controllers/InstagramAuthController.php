<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dymantic\InstagramFeed\Profile;

class InstagramAuthController extends Controller
{
    //
	public function show() {
		$profile = \Dymantic\InstagramFeed\Profile::where('username', 'blade.smp')->first();
		return view('instagram-auth-page', ['instagram_auth_url' => $profile->getInstagramAuthUrl()]);
	}

	public function complete() {
		$was_successful = request('result') === 'success';
		return view('instagram-auth-response-page', ['was_successful' => $was_successful]);
	}


        public function test() {
		//$feed = \Dymantic\InstagramFeed\Profile::where('username', 'blade.smp')->first()->feed();
		$feed = Profile::where('username', 'blade.smp')->first()->feed(50);
		//return view('insta-test', ['instagram' => $feed]);
		//$feed = \Dymantic\InstagramFeed\InstagramFeed::for('blade.smp',1000);
		//return view('new-about', ['instagram' => $feed]);
		dd($feed);
        }

        public function getFeed() {
		//$feed = \Dymantic\InstagramFeed\Profile::where('username', 'blade.smp')->first()->feed();
		//$feed = Profile::where('username', 'blade.smp')->first()->feed(50);
		//return view('insta-test', ['instagram' => $feed]);
		//return view('new-about', ['instagram' => $feed]);
		$feed = \Dymantic\InstagramFeed\InstagramFeed::for('blade.smp',50);
		dd($feed);
        }

        public function showFeed() {
		$feed = \Dymantic\InstagramFeed\InstagramFeed::for('blade.smp',50);
		dd($feed);
        }






}
