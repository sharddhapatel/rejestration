<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <h1>Rejestration From</h1>
    </center>
    @if(Session::has('message'))
    <div class="alert alert-success">
        <i class="fa-lg fa fa-warning"></i>
        {!! session('message') !!}
    </div>
    @elseif(Session::has('error'))
    <div class="alert alert-danger">
        <i class="fa-lg fa fa-warning"></i>
        {!! session('error') !!}
    </div>
    @endif
    <form action="{{url('insertrej')}}" method="post" enctype=multipart/form-data>
        {{csrf_field()}}
        <center>
            <div class="col-12 col-md-6 col-lg-12 ">

                <label class="form__label" for="subscription">State</label>
                <select class="form__input js-example-basic-single" id="state" name="state">
                    <option selected="">State...</option>
                    @foreach ($stats as $key => $value)
                    <option value="{{$value->id}}"> {{$value->name}}</option>
                    @endforeach
                </select>

            </div>
            <br><br>
            <div class="form__group">
                <label class="form__label" for="subscription">Districts</label>
                <select class="form__input js-example-basic-single" id="district" name="district">
                    <option selected="">Districts...</option>
                </select>
            </div>
            <br><br>
            <div class="form__group">
                <label class="form__label" for="subscription">City</label>
                <select class="form__input js-example-basic-single" id="city" name="city">
                    <option selected="">City...</option>
                </select>
            </div>
        </center>
    </form>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script>
        $('#state').change(function() {
            var sid = $(this).val();
            // alert(sid);
            if (sid) {
                $.ajax({
                    type: "get",
                    url: "{{url('/getdis')}}/" + sid,
                    success: function(res) {
                        if (res) {
                            $("#district").empty();
                            $("#district").append('<option>Select district</option>');
                            $.each(res, function(key, value) {
                                $("#district").append('<option value="' + key + '">' + value + '</option>');
                            });
                        }
                    }
                });
            } else {
                alert('hello');
            }
        });
        $('#district').change(function() {
            var did = $(this).val();
            // alert(did);
            if (did) {
                $.ajax({
                    type: "get",
                    url: "{{url('/getcity')}}/" + did,
                    success: function(res) {
                        if (res) {
                            $("#city").empty();
                            $("#city").append('<option>Select city</option>');
                            $.each(res, function(key, value) {
                                $("#city").append('<option value="' + key + '">' + value + '</option>');
                            });
                        }
                    }
                });
            } else {
                alert('hello');
            }
        });
    </script>
</body>

</html>
