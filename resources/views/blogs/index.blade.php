@extends('layouts.app')

@section('content')
    <h1>Blogs | index </h1>
    <br>
    {!! link_to(route('blogs.create'), 'create') !!}
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Content</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tieu de</td>
                <td>Noi dung</td>
            </tr>
        </tbody>
    </table>
@endsection