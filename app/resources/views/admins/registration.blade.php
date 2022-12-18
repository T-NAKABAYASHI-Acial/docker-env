@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form class="border rounded bg-white form-login">
                        <h1 class="h10 my-10">大会日程登録</h1>

                        <form method="POST" class="border rounded bg-white form-login" action="/events">
                            @csrf
                            <div class="form-group">
                                <p>ゲーム名</p>
                                <input type="text" name="game_name" class="form-control my3" placeholder="ゲーム名">
                            </div>
                            <div class="form-group">
                                <p>大会名</p>
                                <input type="text" name="event_name" class="form-control my3" placeholder="大会名">
                            </div>
                            <div class="form-group">
                                <p>大会名</p>
                                <input type="text" name="place" class=" form-control my3" placeholder="開催場所">
                            </div>
                            <div class="form-group">
                                <p>募集期間</p>
                                <div class="d-flex">
                                    <input type="text" name="event_start" class="form-control my3 col-md-4 mr-3" placeholder="募集開始">
                                    〜
                                    <input type="text" name="event_end" class="form-control my3 col-md-4 ml-3" placeholder="募集終了">
                                </div>
                            </div>
                            <div class="form-group">
                                <p>上限人数</p>
                                <input type="text" name="maximum" class="form-control my3" placeholder="上限人数">
                            </div>
                            <div class="form-group">
                                <p>大会日時</p>
                                <div class="form-group">
                                    <div class="d-flex">
                                        <input type="text" name="recruit_start" class="form-control my3 col-md-4 mr-3" placeholder="大会開始">
                                        〜
                                        <input type="text" name="recruit_end" class="form-control my3 col-md-4 ml-3" placeholder="大会終了">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">確認</button>
                            </div>
                        </form>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</body>

</html>
@endsection