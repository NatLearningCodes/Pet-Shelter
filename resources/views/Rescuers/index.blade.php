<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a type="button" href="{{route('rescuers.create')}}">Add</a>
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

        @foreach($rescuers as $rescuer)
        <tr>
            <td>{{$rescuer -> rescuer_ID}}</td>
            <td>{{$rescuer -> rescuer_Name}}</td>
            <td>{{$rescuer -> rescuer_ContactNumber}}</td>
            <td>{{$rescuer -> rescuer_Address}}</td>
            <td>{{$rescuer -> rescuer_Age}}</td>
            <td>{{$rescuer -> rescuer_Birthday}}</td>
            <td>{{$rescuer -> rescuer_Gender}}</td>

            <td>
                <a href="{{ route('rescuers.edit',$rescuer->rescuer_ID) }}"><i class='fa fa-edit'></i> Edit</a>

                {!! Form::open(['method' => 'DELETE', 'route' => ['rescuers.delete', $rescuer->rescuer_ID]]) !!}
                
                    <button type="submit">Delete</button>
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>