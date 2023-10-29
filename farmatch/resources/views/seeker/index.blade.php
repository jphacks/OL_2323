@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>後継者リスト</h2>
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
                @foreach($seekers as $seeker)
                <tr>
                    <td>{{ $seeker->id }}</td>
                    <td>{{ $seeker->name }}</td>
                    <td>{{ $seeker->career }}</td>
                    <td>{{ $seeker->description }}</td>
                    <td>
                        <a href="{{ route('seekerindex.show', $seeker->id) }}" class="btn btn-primary">View</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
