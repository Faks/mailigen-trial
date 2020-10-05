@section('head_navigation')
    <div class="FullscreenLayout-headerTitle">
        <a href="/create" role="button" class="Button Button--medium">Crate new list</a>
    </div>

    <div class="FullscreenLayout-headerActions">
        <a href="https://bitbucket.org/Faks/mailigen-trial/src/master/"
           role="button"
           class="Button Button--medium"
           style="margin-left: 15px;">Bitbucket</a>

        <a href="https://www.linkedin.com/in/oskars-germovs-a94b3318a/"
           role="button"
           class="Button Button--medium"
           style="margin-left: 15px; margin-right: 15px;">LinkedIn</a>
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
