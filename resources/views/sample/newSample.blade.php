<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
 table, th, td {
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;    
}
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                </div>

                    <form action="{{ isset($user) ? url('/users/' . $user->id . '/update') : url('/users') }}" method="POST">
                        <fieldset>
                            <legend>Personal Information</legend>
                        Name:
                            <input type="text" name="name" value="{{ isset($user) ? $user->name : '' }}">
                            <br><br>
                        Age:
                            <input type="text" name="age" value="{{ isset($user) ? $user->age : '' }}">
                            <br><br>
                        Email:
                            <input type="text" name="email" value="{{ isset($user) ? $user->email : '' }}">
                            <br><br>
                        <input type="submit" value="{{ isset($user) ? 'Update' : 'Add' }}">
                        </fieldset>
                    </form>

                    <br><br>
                    <table style="width:100%">
                      <tr>
                        <th>Name</th>
                        <th>Age</th> 
                        <th>Email</th>
                        <td></td>
                      </tr>
                      @foreach($users as $user)
                      <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->age }}</td>
                        <td>{{ $user->email }}</td> 
                        <td>
                            <a href="{{  url('/users/' . $user->id . '/edit') }}">Edit</a>
                            <a href="{{  url('/users/' . $user->id . '/delete') }}">
                            <input type="button" value="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                            </a>
                        </td>
                      </tr>
                    @endforeach
                    </table>

            </div>
        </div>
    </body>
</html>
