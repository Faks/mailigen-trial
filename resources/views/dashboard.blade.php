@section('head_navigation')
    <div class="FullscreenLayout-headerTitle">
        <a href="/create" role="button" class="Button Button--medium">Crate new list</a>
    </div>
@stop

@extends('layout')

@section('content')
    <h2>Dashboard</h2>
    
    <table>
        <thead>
        <tr>
            <th>Campaign title</th>
            <th>Public list name</th>
            <th>Manage</th>
        </tr>
        </thead>
        <tbody>
        @foreach($newsletters as $newsletter)
            <tr>
                <td>{{ $newsletter->public_name }}</td>
                <td>{{ (!empty($newsletter->public_list_name)) ? $newsletter->public_list_name : 'Not Set' }}</td>
                <td>
                    <a href="{{ route('edit', $newsletter->id ) }}" role="button" class="Button
                    Button--medium">Update</a>
                    <a href="{{ route('destroy', $newsletter->id ) }}" role="button" class="Button
                    Button--medium">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    
    {{ $newsletters->links()  }}
@stop