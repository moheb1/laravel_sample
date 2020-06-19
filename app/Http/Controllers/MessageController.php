<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
             return view('admin.message.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $validatedData = $request->validate([
        
        'body' => 'required|max:500|min:100',
    ]);
    return $validatedData;
        $user=\Auth::user();
                
    $message=Message::create([
// 'title'=>$request->name,
'body'=>$validatedData->body,
'owner_id'=>$user->id
       ]);
$message->save();
       
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
       $message=Message::find($message->id);
       return view('admin.message.show',compact('message'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
         $message=Message::find($message->id);
        return view('admin.message.edit',compact('message'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
       $message=Message::find($message->id);
       $message->update([
            'body'=>$request->body,
            


       ]);
       return redirect('/admin/messages');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
       $message= Message::find($message->id);
       $message->delete();
        return redirect('admin/messages');
    }


          public function messagesmanagement()
    {
        
        $user=\Auth::user();
        // return $user;
        // return  $messages = \App\Message::where('owner_id',$user->id)->get();
;
        if($user->hasRole('admin')){
             $messages = \App\Message::all();
        }
        else if($user->hasRole('user')){
            $messages = \App\Message::where('owner_id',$user->id)->get();
        }
          else if($user->hasRole('writer')){
            $messages = \App\Message::where('owner_id',$user->id)->get();
        }

       

        return view('admin.message.messagesmanagement', compact('messages','user'));

    }
}
