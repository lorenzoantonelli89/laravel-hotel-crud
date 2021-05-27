@extends('layouts.main-layout')
@section('pageTitle')
    Aggiungi Ospite
@endsection
@section('content')

    <main>
        <h1>
            add new employee
        </h1>
        
        <form method="POST" action="{{route('store')}}">

            @csrf
            @method('POST')
            <div>
                <div class="container-label">
                    <label for="firstname">
                        Nome
                    </label>
                </div>
                <input type="text" name="firstname">
            </div>
            <div>
                <div class="container-label">
                    <label for="lastname">
                        Cognome
                    </label>
                </div>
                <input type="text" name="lastname">
            </div>
            <div>
                <div class="container-label">
                     <label for="role">
                        Ruolo
                    </label>
                </div>
                <input type="text" name="role">
            </div>
            <div>
                <div class="container-label">
                    <label for="ral">
                        RAL
                    </label>
                </div>
                <input type="text" name="ral">
            </div>
            <div id="submit">
                <input type="submit">
            </div>
        </form>
    </main>
    
@endsection