<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {!! Form::open(['route' => 'animals.store', 'files' => true]) !!}
    @csrf
        
        <label for="">NAME: </label>
        <input type="text" name="animal_Name"><br>

        <label for="">BREED: </label>
        <input type="text" name="animal_Breed"><br>

        <label for="">AGE: </label>
        <input type="text" name="animal_Age"><br>

        <label for="">BIRTHDAY: </label>
        <input type="date" name="animal_Birthday"><br>

        <label for="">GENDER: </label>
        <select name="animal_Gender">
            <option value="">select</option>
            <option value="MALE">MALE</option>
            <option value="FEMALE">FEMALE</option>
        </select>
        <br>
        <label for="">CATEGORY: </label>
        <select name="animal_Category">
            <option value="">select</option>
            <option value="DOG">DOG</option>
            <option value="CAT">CAT</option>
        </select>

        <div class="from-group pt-3">
                  <label for="image"  class="control-label">Choose image</label>
                  <input type="file" class="form-control" id="image" name="img_path"/>
                  @if ($errors->has('img_path'))
                        <div class="alert alert-danger">
                            {{ $errors->first('img_path') }}
                        </div>
                    @endif
              </div>

        <button type="submit" class="btn btn-success">Create</button><br>
        
    {!! Form::close() !!}  

</body>
</html>