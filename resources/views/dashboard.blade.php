@section('head_navigation')
    <div class="FullscreenLayout-headerTitle">
        <a href="/create" role="button" class="Button Button--medium">Crate new list</a>
    </div>
@stop

@extends('layout')

@section('content')
    Dashboard
    
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Instrument</th>
                <th>Manage</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>John Lennon</td>
                <td>Rhythm Guitar</td>
                <td>
                    <a href="#" role="button" class="Button Button--medium">Update</a>
                    <a href="#" role="button" class="Button Button--medium">Delete</a>
                </td>
            </tr>
        </tbody>
    </table>
@stop