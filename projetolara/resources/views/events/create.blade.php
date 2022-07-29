@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')



<div id="event-create-container" class="col-md-6 offset-md-3"
>
<h1>Crie um evento</h1>
<form action="/events" method="POST">

<div class="form-group">
    @csrf <!--Diretiva do Laravel que permite que o forms seja enviado, evitando ataques ao forms-->
    <label for="title">Evento:</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento">
</div>

<div class="form-group">
    <label for="title">Cidade:</label>
    <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento">
</div>

<div class="form-group">
    <label for="title">O Evento é privado?</label>
    <select class="form-control" name="private" id="private">
        <option value="0">Não</option>
        <option value="1">Sim</option>
    </select>
</div>

<div class="form-group">
    <label for="title">Descrição:</label>
   <textarea class="form-control" name="description" id="description" placeholder="O que vai ocorrer no evento?"></textarea>
</div>
<input type="submit" class="btn btn-primary" value="Criar Evento">
</form>


</div>


@endsection
