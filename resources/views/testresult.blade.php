<!DOCTYPE html>
<html>
    <head>
        <title>Test</title>
    </head>
    <body>
    <h1>Test Result</h1>
    Test Name = {!! $result['name'] !!} <br/>
    Test Email = {!! $result['email'] !!} <br/>
    Test Type = {!! $result['test_type'] !!} <br/><br/>
    {!! Form::button('Back',array('onclick'=>'window.location=\'/test\'')) !!}
    </body>
</html>
