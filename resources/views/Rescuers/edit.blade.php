<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{ Form::model($rescuer,['method'=>'PATCH','route' => ['rescuers.update', $rescuer->rescuer_ID]]) }}
        <label for="">Name</label>
        {{ Form::text('rescuer_Name',null,array('id'=>'rescuer_Name')) }}
        <br>
        <label for="">Address</label>
        {{ Form::text('rescuer_Address',null,array('id'=>'rescuer_Address')) }}
        <br>
        <label for="">Contact Number</label>
        {{ Form::text('rescuer_ContactNumber',null,array('id'=>'rescuer_ContactNumber')) }}
        <br>
        <label for="">Age</label>
        {{ Form::number('rescuer_Age',null,array('id'=>'rescuer_Age')) }}
        <br>
        <label for="">Birthday</label>
        {{ Form::date('rescuer_Birthday',null,array('id'=>'rescuer_Birthday')) }}
        <br>    
        <label for="">Gender</label>
        {!! Form::select('rescuer_Gender', ['FEMALE' => 'FEMALE', 'MALE' => 'MALE'], null,['placeholder' => 'Select the appropriate information']) !!}
        <br>
    
        <button type="submit">Update</button>
        {!! Form::close() !!}
</body>
</html>