<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{ Form::model($animal,['method'=>'PATCH','route' => ['animals.update', $animal->animal_ID]]) }}
        <label for="">Name</label>
        {{ Form::text('animal_Name',null,array('id'=>'animal_Name')) }}
        <br>
        <label for="">Breed</label>
        {{ Form::text('animal_Breed',null,array('id'=>'animal_Breed')) }}
        <br>
        <label for="">Age</label>
        {{ Form::number('animal_Age',null,array('id'=>'animal_Age')) }}
        <br>
        <label for="">Birthday</label>
        {{ Form::date('animal_Birthday',null,array('id'=>'animal_Birthday')) }}
        <br>    
        <label for="">Gender</label>
        {!! Form::select('animal_Gender', ['FEMALE' => 'FEMALE', 'MALE' => 'MALE'], null,['placeholder' => 'Select the appropriate information']) !!}
        <br>

        <label for="">Gender</label>
        {!! Form::select('animal_Category', ['DOG' => 'DOG', 'CAT' => 'CAT'], null,['placeholder' => 'Select the appropriate information']) !!}
        <br>
    
        <button type="submit">Update</button>
        {!! Form::close() !!}
</body>
</html>