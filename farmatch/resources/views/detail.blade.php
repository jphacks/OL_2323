@extends('layouts.app')

@section('content')
<div>
    @if ($farmer)
    <div>
        <div class="d-flex justify-content-center">
            <div>
                <img src="{{ asset("images/{$farmer->farmers->image_path}") }}" alt="Farm">
            </div>
            <div class="ms-3">
                <h3 class="fw-bold">氏名：{{$farmer->name}}</h3>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                        <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                    </svg>
                    いいね
                </div>
                <div>住所：{{$farmer->address}}</div>
                <div>年齢：{{$farmer->age}}歳</div>
                <div>農場紹介：{{$farmer->farmers->introduction}}</div>
            </div>
        </div>
    </div>

    @elseif ($seeker)
    <h3 class="fw-bold">{{$seeker->name}}</h3>
    <div>{{$seeker->address}}</div>
    <div>{{$seeker->age}}</div>
    @endif
</div>
@endsection

<script>
    // 要素を取得
    const element = document.getElementById('heart-icon');
    
    // クリックイベントのリスナーを追加
    if (element) {
        element.addEventListener('click', function() {
            // 背景色を変更
            if (element.style.color === 'lightblue') {
                element.style.color = 'lightgreen';
            } else {
                element.style.color = 'lightblue';
            }
        });
    }
</script>
