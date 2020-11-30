@extends('base')

@section('content')
    <h1>Courses</h1>
    <table class="table table-striped table-hover table-inverse shadow" style="background-color:rgb(236, 232, 232); "><br>
        <thead>
            <th>Name</th>
            <th>Description</th>
            <th>Start</th>
            <th>End</th>
            <th>Instructor</th>
        </thead>
        <tbody>
            @foreach($courses as $c)

            <tr>
                <td>{{$c->name}}</td>
                <td>{{$c->description}}</td>
                <td>{{$c->start}}</td>
                <td>{{$c->end}}</td>
                <td>{{$c->instructor->user->lname}}</td>
            </tr>

            @endforeach
        </tbody>
    </table>
@endsection
