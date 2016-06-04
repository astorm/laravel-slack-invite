<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Jobs\SendInvite;
use Request;

class InviteController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function invite()
    {
        $email = Request::get('email');
        $this->dispatch(new SendInvite($email));        
        return view('done',[
            'support_url'=>config('pulsestorm.slack.contact')
        ]);
    }
}