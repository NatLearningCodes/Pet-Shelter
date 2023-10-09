
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    


                <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a type="button" href="{{route('animals.create')}}">Add</a>
    <table>
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Breed</th>
            <th>Age</th>
            <th>Birthday</th>
            <th>Gender</th>

            <th>Action</th>
        </thead>
        <tbody>

        @foreach($animals as $animal)
        <tr>
            <td>{{$animal -> animal_ID}}</td>
            <td>{{$animal -> animal_Name}}</td>
            <td>{{$animal -> animal_Breed}}</td>
            <td>{{$animal -> animal_Age}}</td>
            <td>{{$animal -> animal_Birthday}}</td>
            <td>{{$animal -> animal_Gender}}</td>

            <td>
                <a href="{{ route('animals.edit',$animal->animal_ID) }}"><i class='fa fa-edit'></i> Edit</a>

                {!! Form::open(['method' => 'DELETE', 'route' => ['animals.delete', $animal->animal_ID]]) !!}
                
                    <button type="submit">Delete</button>
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</body>











                
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

