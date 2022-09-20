@extends('layouts.main')

@section('main')

@dump($trains);
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-5">
        
        <a class="navbar-brand me-5" href="#">Home</a>
       
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item mx-5 active">
              <a class="nav-link" href="#">Chi siamo</a>
            </li>
            <li class="nav-item mx-5">
              <a class="nav-link" href="#">Cerca biglietto</a>
            </li>
            <li class="nav-item mx-5">
              <a class="nav-link" href="#">Supporto</a>
            </li>
           
          </ul>
        </div>
      </nav>
</header>
<div class="container">
    <main>
        <table class="table table-striped mt-5">
            <thead>
              <tr>
                <th scope="col">Azienda</th>
                <th scope="col">Partenza da</th>
                <th scope="col">Arrivo a</th>
                <th scope="col">Partenza</th>
                <th scope="col">Arrivo</th>
                <th scope="col">Codice treno</th>
                <th scope="col">Carrozze</th>
                <th scope="col">In orario</th>
                <th scope="col">Cancellato</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                    
                <tr>
                  <td scope="row">{{$train->Azienda}}</td>
                  <td scope="row">{{$train->Stazione_di_partenza}}</td>
                  <td scope="row">{{$train->Stazione_di_arrivo}}</td>
                  <td scope="row">{{$train->Orario_di_partenza}}</td>
                  <td scope="row">{{$train->Orario_di_arrivo}}</td>
                  <td scope="row">{{$train->Codice_Treno}}</td>
                  <td scope="row">{{$train->Numero_Carrozze}}</td>
                  <td scope="row">{{$train->onTime()}}</td>
                  <td scope="row">{{$train->trainDeleted()}}</td>
                 
                </tr>
                @endforeach
              
            </tbody>
          </table>
    </main>
</div>

@endsection