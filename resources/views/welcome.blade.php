<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Event Registration Form</h2>
                </div>
                <div class="card-body">
                                @if (count($errors) > 0)
                                    <div class="alert" style="color: red">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                @if (session()->has('pesan'))
                                    <div class="alert" style="color: green; font-size:20px; margin-bottom: 10px;">
                                        {{ session()->get('pesan') }}
                                    </div>
                                @endif
                    <form action="{{ route('store') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-row">
                            <div class="name">Full Name</div>
                            <div class="value">
                                <input class="input--style-5 form-control @error('full_name') is-invalid @enderror" type="text" id="full_name" name="full_name" value="{{ old('full_name') }}">
                                {{-- @error('full_name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror --}}
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">Age</div>
                            <div class="value">
                                <div class="row row-refine">
                                    <div class="col-3">
                                        <div class="input-group-desc">
                                            <input class="input--style-5 form-control @error('age') is-invalid @enderror" type="text" id="age" name="age" value="{{ old('age') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5 form-control @error('email') is-invalid @enderror" type="email" id="email" name="email" value="{{ old('email') }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">Phone</div>
                            <div class="value">
                                <input class="input--style-5 form-control @error('phone_number') is-invalid @enderror" type="text" id="phone_number" name="phone_number" value="{{ old('phone_number') }}">
                                {{-- @error('full_name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror --}}
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Profesion</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5 form-control @error('profesion') is-invalid @enderror" type="text" id="profesion" name="profesion" value="{{ old('profesion') }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Event</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="events_id" id="event_name" class="form-control">
                                            @foreach ($event as $item)
                                                <option value="{{  $item->id  }}" {{ old('events_id') == "$item->event_name" ? 'selected' : '' }}>
                                                    {{  $item->event_name  }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->