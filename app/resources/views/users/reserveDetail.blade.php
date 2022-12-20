@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div style="width: 100%;">
      <div class="card">
        <div class="card-body">
          <h1 class="h10 my-10">予約詳細</h1>

          <form method="POST" class="border rounded bg-white form-login" action="{{ route('event.reserveDelete') }}">
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
            <input hidden name="id" class="form-control my3" value="{{ $event['reservation_id'] }}">
            <button type="submit" class="btn btn-primary">取消</button>
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