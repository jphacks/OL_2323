@extends('layouts.app')

@section('content')
<div class="container">
    <h3>ユーザー情報編集（農家）</h3>
    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <th scope="row">氏名</th>
                    <td>
                        <input name="name" type="text" class="form-control" value="{{ $user-> }}" required>
                    </td>
                </tr>
                <tr>
                    <th scope="row">年齢</th>
                    <td>
                        <input name="age" type="number" class="form-control" value="{{ $user-> }}" required>
                    </td>
                </tr>
                <tr>
                    <th scope="row">在住都道府県</th>
                    <td>
                        <input name="address" type="text" class="form-control" value="{{ $user-> }}" required>
                    </td>
                </tr>
                <tr>
                    <th scope="row">メールアドレス</th>
                    <td>
                        <input name="email" type="email" class="form-control" value="{{ $user-> }}" required>
                    </td>
                </tr>
                <tr>
                    <th scope="row">電話番号</th>
                    <td>
                        <input name="phone" type="text" class="form-control" value="{{ $user-> }}" required>
                    </td>
                </tr>
                <tr>
                    <th scope="row">経歴</th>
                    <td>
                        <input name="career" type="text" class="form-control" value="{{ $user-> }}">
                    </td>
                </tr>
                <tr>
                    <th scope="row">紹介文</th>
                    <td>
                        <input name="text" type="text" class="form-control" value="{{ $user-> }}">
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="submit" class="btn btn-primary btn-lg">登録</button>
        </div>
    </form>
</div>
