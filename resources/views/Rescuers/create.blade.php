<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {!! Form::open(['route' => 'rescuers.store', 'files' => true]) !!}
    @csrf
        
        <label for="">NAME: </label>
        <input type="text" name="rescuer_Name"><br>

        <label for="">ADDRESS: </label>
        <input type="text" name="rescuer_Address"><br>

        <label for="">CONTACT NUMBER: </label>
        <input type="text" name="rescuer_ContactNumber"><br>

        <label for="">AGE: </label>
        <input type="text" name="rescuer_Age"><br>

        <label for="">BIRTHDAY: </label>
        <input type="date" name="rescuer_Birthday"><br>

        <label for="">GENDER: </label>
        <select name="rescuer_Gender">
            <option value="">select</option>
            <option value="MALE">Male</option>
            <option value="FEMALE">Female</option>
        </select>

        <button type="submit" class="btn btn-success">Create</button><br>
        
    {!! Form::close() !!}  
</body>
</html>