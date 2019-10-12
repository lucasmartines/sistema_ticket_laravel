@extends('../master')

@section('title',"tickets")
@section('content')

<div class="container col-md-8 col-md-offset-2 mt-5">
    <div class="well bs-component">
        <form  class="form-horizontal" method="post">
            @foreach($errors->all() as $error)
                <p class="alert alert-danger">{{ $error }}</p>
            @endforeach
            @if(session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <input type="hidden" name="_token" value="{!! csrf_token()!!}">
            <fieldset>
                <legend> Submit a new ticket </legend>
                <div class="form-group">
                    <label for="title" class="col-lg-2 col-lg-offset-2">Title</label>
                    <div class="col-lg-10">
                        <input type="text" name="title" id="title" class="form-control" placeholder="title">
                    </div>
                </div>
                <div class="form-group">
                    <label for="content"  class="col-lg-2 col-lg-offset-2">Content</label>
                    <div class="col-lg-10">
                        <textarea type="text" name="content" id="content" class="form-control" placeholder="Content">
                        </textarea>
                        <span class="help-block">Feel free to ask us any question</span>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                    <a class="btn btn-secondary" href="{!! action('TicketsController@index') !!}">
                        Cancel
                    </a>
                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>
                    </div>
                </div>
                
            </fieldset>
        </form>
    </div>
</div>


@endsection()