<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TicketFormRequest;

use App\Ticket;


class TicketsController extends Controller
{
    //
    public function index(){
        $tickets = Ticket::all();
        return view('tickets.index',compact('tickets'));
    }
    public function show($slug){
        $ticket = Ticket::whereSlug($slug)->firstOrFail();
        return view('tickets.show',compact('ticket'));
    }
    public function edit($slug){
        $ticket = Ticket::whereSlug($slug)->firstOrFail();
        return view('tickets.edit',compact('ticket'));
    }
    public function update($slug,TicketFormRequest $request){

        
        $ticket = Ticket::whereSlug($slug)->firstOrFail();
        $ticket->title = $request->get('title');
        $ticket->content = $request->get('content');

        if($request->get('status')  != null){
            $ticket->status = 0;
        }else{
            $ticket->status = 1;
        }

        $ticket->save();

        return redirect( action('TicketsController@edit',$ticket->slug) )
            ->with('status','O ticket ' . $slug . ' foi atualizado!' );

    }
    public function destroy($slug){
        $ticket = Ticket::whereSlug($slug)->firstOrFail();
        $ticket->delete();
        return redirect( action('TicketsController@index',$ticket->slug) )
            ->with('status','O ticket ' . $slug . ' foi deletado!' );
    }

}
