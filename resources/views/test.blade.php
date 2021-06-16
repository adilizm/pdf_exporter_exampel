<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 7 PDF Example</title>
<!--     <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
 -->
 <link rel="stylesheet" href="{{public_path('css/app.css')}}">
</head>

<body style="font-size:13px;margin:0px">
<div class="mx-1 mt-5">
        <h2 class="text-center mb-3" >Laravel HTML to PDF Example</h2>

        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-danger">
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">DOB</th>
                </tr>
            </thead>
            <tbody>
               
            @foreach($data ?? '' as $datae)
                <tr>
                    <th scope="row">{{ $datae->id }}</th>
                    <td>{{ $datae->name }}</td>
                    <td>{{ $datae->email }}</td>
                    <td>{{ $datae->phone_number }}</td>
                    <td>{{ $datae->dob }} </td>
                </tr>
                @endforeach
             
              
            </tbody>
        </table>

    </div>
</body>

</html>