@extends('layouts.main-layout')
@section('pageTitle')
    Dettagli Ospite
@endsection
@section('content')

    <main>
        <h1>
            dettagli ospite
        </h1>
        <table>
            <tr>
                <th>
                    id
                </th>
                <th>
                    firstname
                </th>
                <th>
                    lastname
                </th>
                <th>
                    role
                </th>
                <th>
                    ral
                </th>
            </tr>
            <tr>
                <td>
                    {{$employee -> id}}
                </td>
                <td>
                    {{$employee -> firstname}}
                </td>
                <td>
                    {{$employee -> lastname}}
                </td>
                <td>
                    {{$employee -> role}}
                </td>
                <td>
                    {{$employee -> ral}}
                </td>
            </tr>
        </table>
        <a id="backHome" href="{{route('home')}}">
            back to home
        </a>
    </main>
    
@endsection