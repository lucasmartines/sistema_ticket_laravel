<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TicketFormRequest;
use App\Ticket;


class PagesController extends Controller
{
    //

    public function home(){
        return view('welcome');
    }
    public function contact(){
        return view("contact");
    }
    public function store(TicketFormRequest $request){
       // return "teste";

       $slug = uniqid();
       $ticket = new Ticket(
           array(
               'title'    => $request->get('title'),
               'content'  => $request->get('content'),
               'slug'     => $slug
           )
       );

       $ticket->save();

       return redirect("/contact")->with("status","Seu ticket foi criado com sucesso! id: " . $slug);
        
    }
    public function create(){
        return view("tickets.create");
    }
    public function about(){
        return view("about");
    }
}
