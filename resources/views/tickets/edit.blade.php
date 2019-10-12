@extends('../master')

@section("title","tickets")
@section("content")
    <div class="container col-md-8 mt-5">
        <div class="well">
            <fieldset  >
                <legend>Editar ticket</legend>
                
                <form  method="post" class="form-horizontal">
                    @foreach($errors->all() as $error)
                        <p class="alert alert-danger">{{ $error }}</p>
                    @endforeach
                    @if(session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <input type="hidden" name="_token" value="{!! csrf_token()!!}">
                    <div class="form-group">
                        <div class="form-group">
                            <label for="title" class="col-lg-2 col-lg-offset-2">Titulo</label>
                            <div class="col-lg-10">
                                <input  type="text" name="title" id="title" class="form-control" value="{!! $ticket->content !!}" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="content"  class="col-lg-2 col-lg-offset-2">Conteudo</label>
                            <div class="col-lg-10">
                                <textarea type="text" name="content" id="content" class="form-control">
                                    {!! $ticket->content !!}
                                </textarea>
                                <span class="help-block">Feel free to ask us any question</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">
                                <input type="checkbox" name="status" {!! $ticket->status ?'':'checked' !!}>
                                    Fechar esse ticket?
                            </label>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-10">
                            <a href="{!! action('TicketsController@show',$ticket->slug) !!}" class="btn btn-secondary">Voltar</a>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </div>
                </form>
            </fieldset>
        </div>
    </div>
@endsection()