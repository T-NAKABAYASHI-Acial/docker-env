@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-body">
          <form class="border rounded bg-white form-login">
            <h1 class="h10 my-10">募集中の大会一覧</h1>
            @csrf
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">ゲーム名</th>
                  <th scope="col">大会名</th>
                  <th scope="col">開催場所</th>
                  <th scope="col">募集期間</th>
                  <th scope="col">上限人数</th>
                  <th scope="col">大会日時</th>
                </tr>
              </thead>
              <tbody>
                @foreach($events as $event)
                <tr>
                  <th scope="col">{{ $event['game_name'] }}</th>
                  <th scope="col">{{ $event['event_name'] }}</th>
                  <th scope="col">{{ $event['place'] }}</th>
                  <th scope="col">{{ $event['event_start'] }} 〜 {{ $event['event_end'] }}</th>
                  <th scope="col">{{ $event['maximum'] }}</th>
                  <th scope="col">{{ $event['recruit_start'] }} 〜 {{ $event['recruit_end'] }}</th>
                  <th scope="col"></th>
                  <th scope="col"></th>
                  <th scope="col"></th>

                </tr>
                @endforeach
              </tbody>
            </table>

            <div class="my-3 form-check">
              <a class="btn btn-primary" href="{{ route('admins.createForm') }}">新規大会作成</a>
            </div>
            <div class="my-3 form-check">
              <a class="btn btn-primary" href="{{ route('users.postEdit', ['id'=>$id]) }}">プロフィール編集</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</body>

</html>
@endsection