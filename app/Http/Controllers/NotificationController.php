<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;

class NotificationController extends Controller
{
    public function getIndex()
    {
        return view('notification');
    }

    public function postNotify(Request $request)
    {
        $notifyText = e($request->input('notify_text'));

        // TODO: Get Pusher instance from service container

        // TODO: The notification event data should have a property named 'text'

        // TODO: On the 'notifications' channel trigger a 'new-notification' event
         $pusher = App::make('pusher');

    	$pusher->trigger( 'notifications',
                      'new-notification', 
                      array('text' => $notifyText));
    }
    //flash notification using toaster.js
    public function notification()
    {
            $notification = array(
                'message' => 'Thanks! We shall get back to you soon.', 
                'alert-type' => 'success'
            );
            session()->flash('notification',$notification);
            return view('demo');
        
    }
}
