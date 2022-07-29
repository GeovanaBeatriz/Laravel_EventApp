
    @extends('layouts.main')

    @section('title', 'HDC Events')

    @section('content')

    @foreach($events a $event)

    <div id="search-container" class="col-md-12">
        <h1>Busque um evento</h1>
        <form action="">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
        </form>
    </div>

    <div id="events-container" class="col-md-12">
        <h2>Próximos eventos</h2>
        <p class="subtitle">Veja os eventos dos próximos dias</p>
        <div id="cards-container" class="row">
            @foreach($events as $event)
            <div class="card col-md-3">
                <img src="" alt="{{$event ->title}}">
            <div class="class-body">
                <p class="card-date">10/09/2020</p>
                <h5 class="card-title">{{$event->title}}</h5>
                <p class="card-participants">X Participantes</p>
                <a href="" class="btn btn-primary"> Saber mais</a>
            </div>
            </div>
            @endforeach
        </div>
    </div>

    @endforeach

    @endsection
