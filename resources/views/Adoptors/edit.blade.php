<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{ Form::model($adoptor,['method'=>'PATCH','route' => ['adoptors.update', $adoptor->adoptor_ID]]) }}
        <label for="">Name</label>
        {{ Form::text('adoptor_Name',null,array('id'=>'adoptor_Name')) }}
        <br>
        <label for="">Address</label>
        {{ Form::text('adoptor_Address',null,array('id'=>'adoptor_Address')) }}
        <br>
        <label for="">Contact Number</label>
        {{ Form::text('adoptor_Contactnumber',null,array('id'=>'adoptor_Contactnumber')) }}
        <br>
        <label for="">Age</label>
        {{ Form::number('adoptor_Age',null,array('id'=>'adoptor_Age')) }}
        <br>
        <label for="">Birthday</label>
        {{ Form::date('adoptor_Birthday',null,array('id'=>'adoptor_Birthday')) }}
        <br>    
        <label for="">Gender</label>
        {!! Form::select('adoptor_Gender', ['FEMALE' => 'FEMALE', 'MALE' => 'MALE'], null,['placeholder' => 'Select the appropriate information']) !!}
        <br>
    
        <button type="submit">Update</button>
        {!! Form::close() !!}
</body>
</html>