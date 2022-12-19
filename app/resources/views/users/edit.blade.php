    @extends('layouts.app') @section('content')
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">ユーザー編集</div>
            <div class="card-body">
              <!-- 重要な箇所ここから -->
              <form action="" method="post">
                @csrf
                <p>名前</p>
                <input type="text" name="name" value="{{ $user['name'] }}" />
                <p>メール</p>
                <input type="text" name="email" value="{{ $user['email'] }}" /><br />
                <input type="submit" value="更新" />
              </form>
              <!-- 重要な箇所ここまで -->
            </div>
          </div>
        </div>
      </div>
    </div>
    @endsection
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    </body>

    </html>