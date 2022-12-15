@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <body class="text-center bg-light">
                        <form class="border rounded bg-white form-login">
                            <table class="table table-bordered">
                                <h1 class="h10 my-10">トップページ</h1>
                                <div class="h10 my-10">予約済み大会一覧</div>
                                <thead>
                                    <tr>
                                        <th scope="col">ゲーム名</th>
                                        <th scope="col">大会名</th>
                                        <th scope="col">募集期間</th>
                                        <th scope="col">上限人数</th>
                                        <th scope="col">大会日時</th>
                                        <th scope="col">募集要項</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        <th scope="col" href="">削除</th>
                                        </th>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="my-3 form-check">
                                <button type="button" class="btn btn-primary">大会一覧</button>
                            </div>
                            <div class="my-3 form-check">
                                <a class="btn btn-primary" href="{{ route('user.postEdit',['id'=>$id]) }}">プロフィール編集</a>
                            </div>

                        </form>

                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
                        </script>
                    </body>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection