<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>page1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $err)
                                <li>{{ $err }}</li>
                            @endforeach
                        </ul>

                    </div>
                    @endif
                <form method="POST" action="{{route('m5.lat2.action') }}">
                    @csrf
                    <div class='mb-3'>
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama"/>


                    </div>
                    <div class='mb-3'>
                        <label>Nilai</label>
                        <input type="text" class="form-control" name="nilai"/>
                    </div>

                    <div class="mb-3">
                        <button class="btn btn-primary">Submit</button>

                    </div>
                </form>

            </div>

        </div>
    </div>
    
  </body>
</html>
