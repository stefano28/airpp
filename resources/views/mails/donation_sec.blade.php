@extends('templates.mail', [
    'title' => "Nuova donazione"
])
@section('content')
<div>
<b>Nome: </b>{{$request->name}}
</div>
<div>
<b>Cognome: </b>{{$request->surname}}
</div>
<div>
<b>Codice fiscale: </b>{{$request->cf}}
</div>
<div>
<b>Via: </b>{{$request->via}}
</div>
<div>
<b>Civico: </b>{{$request->civico}}
</div>
<div>
<b>Cap: </b>{{$request->cap}}
</div>
<div>
<b>Comune: </b>{{$request->comune}}
</div>
<div>
<b>Provincia: </b>{{$request->provincia}}
</div>
<div>
<b>Email: </b>{{$request->email}}
</div>
<div>
<b>Tipo</b>@if($request->dim) Donazione in memoria @else Donazione standard @endif
</div>
@if($request->dim)
<div>
<b>Nome defunto</b>{{$request->name}}
<b>Cognome defunto</b>{{$request->dsurname}}
</div>
@endif
<div>
<b>Importo: </b>{{$request->amount}} &euro;
</div>
<div>
<b>Data e ora: </b>{{date('d-m-Y H:i:s', strtotime($request->date))}}
</div>
@endsection