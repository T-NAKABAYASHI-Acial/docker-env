@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div style="width: 100%;">
      <div class="card">
        <div class="card-body">
          <h1 class="h10 my-10">募集中の大会一覧</h1>
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
                <td scope="col">{{ $event['game_name'] }}</td>
                <td scope="col">{{ $event['event_name'] }}</td>
                <td scope="col">{{ $event['place'] }}</td>
                <td scope="col">{{ $event['event_start'] }} 〜 {{ $event['event_end'] }}</td>
                <td scope="col">{{ $event['maximum'] }}</td>
                <td scope="col">{{ $event['recruit_start'] }} 〜 {{ $event['recruit_end'] }}</td>
                <td scope="col"><a type="button" href="{{ route('event.detail', ['event_id'=>$event['id']]) }}"
                    class="btn btn-primary">詳細</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
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