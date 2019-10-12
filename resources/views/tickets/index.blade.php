@extends('../master')

@section("title","tickets")
@section("content")
<div class="container cl-md-8 col-md-offset-2">
        <div class="well mt-5">
        <h3 class="py-2"> Tickets</h3>
        @if($tickets->isEmpty())
            <p> Não existe nenhum ticket </p>
        @else
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tickets as $ticket)
                    <tr>
                        <td>{!! $ticket->id !!}</td>
                        <td>
                            <a href="{!! action('TicketsController@show',$ticket->slug) !!}">
                            {!! $ticket->title !!}
                            </a>
                        </td>
                        <td>{!! $ticket->status ? 'Pendente':'Respondido' !!} </td>
                    </tr>    
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
</div>
@endsection()