@extends('template.layout')

@section('title', 'Listing of Trains')

@section('content')
    <h1>Trains Listing</h1>
    <div class="card">

            <ol>
                @foreach ($trains as $train)
                <li>
                    <ul>
                        <li>Train From/ Station: {{$train['stazione_partenza']}}</li>
                        <li>Train Number: {{$train['codice_treno']}}</li>
                        <li>Departure Time: {{$train['orario_partenza']}}</li>
                        <li>Arrival Time: {{$train['orario_arrivo']}}</li>
                        <li>Train Delay?
                            @if ($train[!'in_orario'])
                                Yes
                            @else
                                No
                            @endif
                        </li>
                    </ul>
                </li>
                <br>
                @endforeach

            </ol>
            {{ $trains->links() }}

    </div>
@endsection
