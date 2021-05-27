@extends('layouts.main-layout')
@section('pageTitle')
    Update Employee
@endsection
@section('content')

    <main>
        <h1>
            Update Employee
        </h1>
        
        <form method="POST" action="{{route('update', $employee -> id)}}">

            @csrf
            @method('POST')
            <div>
                <div class="container-label">
                    <label for="firstname">
                        Nome
                    </label>
                </div>
                <input type="text" name="firstname" value="{{$employee -> firstname}}">
            </div>
            <div>
                <div class="container-label">
                    <label for="lastname">
                        Cognome
                    </label>
                </div>
                <input type="text" name="lastname" value="{{$employee -> lastname}}">
            </div>
            <div>
                <div class="container-label">
                     <label for="role">
                        Ruolo
                    </label>
                </div>
                <input type="text" name="role" value="{{$employee -> role}}">
            </div>
            <div>
                <div class="container-label">
                    <label for="ral">
                        RAL
                    </label>
                </div>
                <input type="number" name="ral" value="{{$employee -> ral}}">
            </div>
            <div id="submit">
                <input type="submit">
            </div>
        </form>
    </main>
    
@endsection

