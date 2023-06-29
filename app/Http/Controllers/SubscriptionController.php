<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    

    public function store(Request $request)
{
    $request->validate([
        'email' => 'required|email|unique:subscriptions,email',
    ]);

    $subscription = Subscription::firstOrCreate(['email' => $request->email]);

    // Send notification here if needed

    return redirect()->back()->with('success', 'Subscription created successfully.');
}

}
