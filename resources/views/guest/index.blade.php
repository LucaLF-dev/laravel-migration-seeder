@extends('welcome')

@section('content')
    <div>
        
        <table>
            <thead>
            <tr>
                <th>Aienda</th>
                <th>Stazione di partenza</th>
                <th>Stazione di arrivo</th>
                <th>Orario di partenza</th>
                <th>Orario di arrivo</th>
                <th>Codice Treno</th>
                <th>Numero carrozza</th>
                <th>Posto</th>
                <th>In orario</th>
                <th>Cancellato</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($trains as $train)
            <tr>
                <th>{{$train->azienda}}</th>
                <th>{{$train->stazione_di_partenza}}</th>
                <th>{{$train->stazione_di_arrivo}}</th>
                <th>{{$train->orario_di_partenza}}</th>
                <th>{{$train->orario_di_arrivo}}</th>
                <th>{{$train->codice_treno}}</th>
                <th>{{$train->numero_carrozze}}</th>
                <th>{{$train->posto_numero}}</th>
                <th>{{$train->in_orario}}</th>           
                <th>{{$train->cancellato}}</th>
            </tr>
            @empty
               Nessun treno disponibile all' orario stabilito
            @endforelse
            
        </tbody>
        </table>
       
        
    </div>
@endsection