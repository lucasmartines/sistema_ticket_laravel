@extends("../master")
@section("title","mostrar tickets")
@section("content")
    
        <div class="container col-md-8 col-md-offset-2 mt-5">
        <fieldset >
            <legend> </legend>   
            <div class="well">
                <div class="content">
                    <h2 class="header">
                        {!! $ticket->title !!}
                    </h2>
                    <p><strong>Status</strong>
                        {!! $ticket->status ? 'Pendente' : 'Respondido' !!}
                    </p>
                    <p>
                        {!! $ticket->content !!}
                    </p>
                    <form method="post" action="{!! action('TicketsController@destroy',$ticket->slug) !!}">
                        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                        <a href="{!! action('TicketsController@index') !!}" class="btn btn-secondary">Voltar</a>
                        <a href="{!! action('TicketsController@edit',$ticket->slug) !!}" class="btn btn-primary">Edit</a>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
                
            </div>
        </fieldset>

        </div>
@endsection