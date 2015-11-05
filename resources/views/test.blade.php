<!DOCTYPE html>
<html>
    <head>
        <title>Test</title>
    </head>
    <body>
    <h1>Create a Test</h1>

    <!-- if there are creation errors, they will show here -->
        {!! HTML::ul($errors->all()) !!}

    {!! Form::open(array('url'=>'test')) !!}

    <div class="form-group">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', Input::old('name'), array('class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'Email') !!}
        {!! Form::email('email', Input::old('email'), array('class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Test Type', 'Test Type') !!}
        {!! Form::select('test_type', array('0' => 'Select a Test Type', 'Test-1' => 'Test 1', 'Test-2' => 'Test 2', 'Test-3' => 'Test 3'), Input::old('test_type'), array('class' => 'form-control')) !!}
    </div>

    {!! Form::submit('Create the Test!', array('class' => 'btn btn-primary')) !!}

    {!! Form::close() !!}
    </body>
</html>
