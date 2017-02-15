<!DOCTYPE html>
<html lang="en">
<head>
    <title>URL Shortener</title>
    <link rel="stylesheet" href="/assets/css/styles.css" />
</head>
<body>
<div id="container">
    <h2>Uber-Shortener</h2>

    @if(Session::has('errors'))
    <h3 class="error">
        {{$errors->first('link')}}
    </h3>
    @endif

    @if(Session::has('hash'))
        <h3 class="success">
            {{Html::link(Session::get('hash'),'Shortened! Test URL >> ')}}
            {{Session::get('hash')}}
        </h3>
    @endif

    @if(Session::has('message'))
        <h3 class="error">
            {{Session::get('message')}}
        </h3>
    @endif

    @if(Session::has('shorter'))
        <h3 class="success">
            {{Html::link(Session::get('shorter'))}}
        </h3>
    @endif

    {{Form::open(array('url'=>'/','method'=>'post'))}}

    {{Form::text('link',Input::old('link'),array('placeholder'=>'Insert your URL here and press enter!'))}}

    {{Form::close()}}
</div>
</body>
</html>