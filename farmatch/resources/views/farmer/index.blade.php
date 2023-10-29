@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>農家リスト</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>お名前</th>
                    <th>経歴</th>
                    <th>詳細へ</th>
                </tr>
            </thead>
            <tbody>
                @foreach($farmers as $farmer)
                <tr>
                    <td>{{ $farmer->id }}</td>
                    <td>{{ $farmer->name }}</td>
                    <td>{{ $farmer->career }}</td>
                    <td>{{ $farmer->description }}</td>
                    <td>
                        <a href="{{ route('farmerindex.show', $farmer->id) }}" class="btn btn-primary">View</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
