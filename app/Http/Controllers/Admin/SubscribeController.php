<?php

namespace App\Http\Controllers\admin;

use App\Subscription;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubscribeController extends Controller
{
    public function index()
    {
        $subs = Subscription::orderBy('id', 'desc')->get();

        return view('admin.subscribers.index', compact('subs'));
    }

    public function destroy($id)
    {
        Subscription::find($id)->remove();

        return redirect()->back();
    }
}
