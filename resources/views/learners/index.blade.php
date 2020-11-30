@extends('base')

@section('content')

<h1 style="text-align:center;">Learners</h1>

<table class="table table-striped table-hover table-inverse shadow" style="background-color:rgb(236, 232, 232); "><br>
    <thead>
        <th>ID#</th>
        <th>Last Name</th>
        <th>First Name</th>
        <th>Status</th>
    </thead>
    <tbody>
        @foreach($learners as $ln)

        <tr>
            <td>{{$ln->id}}</td>
            <td>{{$ln->user->lname}}</td>
            <td>{{$ln->user->fname}}</td>
            <td>{{$ln->status}}</td>
        </tr>

        @endforeach
    </tbody>
</table>

@endsection
