@extends('base')

@section('content')
@include('info')
<div class="float-right">
    <a href="{{url('/courses/create')}}" class="btn btn-primary">
    &#10133;  New 
    </a>
</div>

    <h1 style="text-align:center;">Courses</h1><br>
    <table class="table table-striped table-hover table-inverse shadow" style="background-color:rgb(236, 232, 232); "><br>
    <thead>
            <th>Name</th>
            <th>Description</th>
            <th>Start</th>
            <th>End</th>
            <th>Instructor</th>
            <th>&nbsp;</th>
        </thead>
        <tbody>
            @foreach($courses as $c)

            <tr>
                <td>{{$c->name}}</td>
                <td>{{$c->description}}</td>
                <td>{{$c->start}}</td>
                <td>{{$c->end}}</td>
                <td>{{$c->instructor->user->lname}}</td>
                <td><a href="{{url('/courses/edit', ['id'=> $c])}}" class="btn btn-info btn-sm">&#x270E;</a></td>
            </tr>

            @endforeach
        </tbody>
    </table>
@endsection