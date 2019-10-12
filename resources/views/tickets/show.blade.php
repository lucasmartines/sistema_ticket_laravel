@extends("../master")
@section("title","mostrar tickets")
@section("content")
    
        <div class="container col-md-8 col-md-offset-2 mt-5">
            <!-- ver detalhes-->
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

        <!-- comentarios -->
        @foreach($comments as $comment)
        <form class="well mt-3" method="post" action="{!! action('CommentsController@destroy',$comment->id) !!}">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
            <div class="content">
            <span  class="ml-auto"> 
                <button class="btn btn-danger" type="submit">
                    x
                </button>
                </span>
            <span> {!! $comment->content !!} </span>
                
            </div>
        </form>
        @endforeach

        <!-- comentar -->
        <div class="well my-3 ">
                     @foreach($errors->all() as $error)
                        <p class="alert alert-danger">{{ $error }}</p>
                    @endforeach
                    @if(session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
           
            <form action="/comment" method="post" class="form-horizontal">
              <input type="hidden" name="_token" value="{!! csrf_token() !!}">
              <input type="hidden" name="post_id" value="{!! $ticket->id !!}">
              <fieldset>
                <legend>Reply</legend>
                <div class="form-group">
                    <div class="col-lg-12">
                        <textarea name="content" 
                                  rows="3" 
                                  class="form-control">
                        
                        </textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        <button type="reset" class="btn btn-secondary">
                            Cancel
                        </button>
                        <button type="submit" class="btn btn-primary">
                            Enviar
                        </button>
                    </div>
                </div>
              </fieldset>
            </form>
        </div>
    </div>
@endsection