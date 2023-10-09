<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a type="button" href="{{route('adoptors.create')}}">Add</a>
    <table>
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Contact Number</th>
            <th>Address</th>
            <th>Age</th>
            <th>Birthday</th>
            <th>Gender</th>
            
        </thead>
        <tbody>

        @foreach($adoptors as $adoptor)
        <tr>
            <td>{{$adoptor -> adoptor_ID}}</td>
            <td>{{$adoptor -> adoptor_Name}}</td>
            <td>{{$adoptor -> adoptor_Contactnumber}}</td>
            <td>{{$adoptor -> adoptor_Address}}</td>
            <td>{{$adoptor -> adoptor_Age}}</td>
            <td>{{$adoptor -> adoptor_Birthday}}</td>
            <td>{{$adoptor -> adoptor_Gender}}</td>

            <td>
                <a href="{{ route('adoptors.edit',$adoptor->adoptor_ID) }}"><i class='fa fa-edit'></i> Edit</a>

                {!! Form::open(['method' => 'DELETE', 'route' => ['adoptors.delete', $adoptor->adoptor_ID]]) !!}
                
                    <button type="submit">Delete</button>
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>