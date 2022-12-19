@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-body">
          <h1 class="h10 my-10">大会日程登録</h1>

          <form method="POST" class="border rounded bg-white form-login" action="{{ route('complete.event') }}">
            @csrf
            <table class="table">
              <tbody>
                <tr>
                  <th scope="row" style="width: 40%">ゲーム名:</th>
                  <td>{{ $event['game_name'] }}</td>
                </tr>
                <tr>
                  <th class=" pr-3" style="width: 40%">大会名:</th>
                  <td>{{ $event['event_name'] }}</td>
                </tr>
                <tr>
                  <th class="pr-3" style="width: 40%">開催場所:</th>
                  <td>{{ $event['place'] }}</td>
                </tr>
                <tr>
                  <th class="pr-3" style="width: 40%">募集期間:</th>
                  <td>{{ $event['event_start'] }} 〜 {{ $event['event_end'] }}</td>
                </tr>
                <tr>
                  <th class="pr-3" style="width: 40%">上限人数:</th>
                  <td>{{ $event['maximum'] }}</td>
                </tr>
                <tr>
                  <th class="pr-3" style="width: 40%">大会日時:</th>
                  <td>{{ $event['recruit_start'] }} 〜 {{ $event['recruit_end'] }}</td>
                </tr>
              </tbody>
            </table>
            <input hidden type="text" name="game_name" class="form-control my3" placeholder="ゲーム名"
              value="{{ $event['game_name'] }}">
            <input hidden type="text" name="event_name" class="form-control my3" placeholder="大会名"
              value="{{ $event['event_name'] }}">
            <input hidden type="text" name="place" class=" form-control my3" placeholder="開催場所"
              value="{{ $event['place'] }}">
            <input hidden type="text" name="event_start" class="form-control my3 col-md-4 mr-3" placeholder="募集開始"
              value="{{ $event['event_start'] }}">
            <input hidden type="text" name="event_end" class="form-control my3 col-md-4 ml-3" placeholder="募集終了"
              value="{{ $event['event_end'] }}">
            <input hidden type="text" name="maximum" class="form-control my3" placeholder="上限人数"
              value="{{ $event['maximum'] }}">
            <input hidden type="text" name="recruit_start" class="form-control my3 col-md-4 mr-3" placeholder="大会開始"
              value="{{ $event['recruit_start'] }}">
            <input hidden type="text" name="recruit_end" class="form-control my3 col-md-4 ml-3" placeholder="大会終了"
              value="{{ $event['recruit_end'] }}">
            <button type="submit" class="btn btn-primary">登録</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</body>

</html>
@endsection