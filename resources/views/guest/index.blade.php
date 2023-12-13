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
                <th>{{$train->Azienda}}</th>
                <th>{{$train->Stazione_di_partenza}}</th>
                <th>{{$train->Stazione_di_arrivo}}</th>
                <th>{{$train->Orario_di_partenza}}</th>
                <th>{{$train->Orario_di_arrivo}}</th>
                <th>{{$train->Codice_treno}}</th>
                <th>{{$train->Numero_carrozze}}</th>
                <th>{{$train->Posto_numero}}</th>
                <th>{{$train->In_Orario}}</th>
                <th>{{$train->Cancellato}}</th>
             
            </tr>
            @empty
               Nessun treno disponibile all' orario stabilito
            @endforelse
            
        </tbody>
        </table>
       
        
    </div>
@endsection