<!DOCTYPE html>
<html>

<head>
    <title>Registration and Login</title>
    <!-- Include necessary CSS and JavaScript libraries -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
            border-color: #f5c6cb;
        }

        .form-control {
            border: 1px solid #ced4da;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .text-center {
            text-align: center;
        }

        /* Style for the buttons at the top of the card */
        .top-buttons {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        /* Responsive styles using media queries */
        @media (max-width: 768px) {
            .container {
                padding: 10px;
            }

            .card {
                width: 100%;
            }
        }
    </style>
</head>

<body>

<div class="container">
    <div class="card p-4">
        <div class="text-center mb-4">
            <img src="https://elsolutions.in/public/images/ellogo%20(1).jpg">
        </div>


        <div class="mt-0">
            <!-- Display errors and messages for both forms here -->
            @if($errors->any())
                <div class="col-12">
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                </div>
            @endif
            @if(session()->has('error'))
                <div class="alert alert-danger">{{session('error')}}</div>
            @endif
            @if(session()->has('success'))
                <div class="alert alert-success">{{session('success')}}</div>
            @endif
        </div>





        <!-- Buttons at the top to toggle between forms -->
        <div class="top-buttons">
            <button id="loginButton" class="btn btn-primary">Login</button>
            <button id="registerButton" class="btn btn-primary">Register</button>
        </div>






        <div id="registrationForm" style="display: none;">
            <form action="{{route('registration.post')}}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" id="name" class="form-control" name="name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" id="email" class="form-control" name="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" class="form-control" name="password">
                </div>
                <div class="mb-3">
                    <label for="mode" class="form-label">Mode</label>
                    <select id="mode" class="form-control" name="mode">
                        <option value="" selected disabled>Select mode</option>
                        <option value="administrator">Administrator</option>
                        <option value="employee">Employee</option>
                        <option value="customer">Customer</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </form>
        </div>




        <div id="loginForm">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-3">
                    <label for="loginEmail" class="form-label">Email</label>
                    <input type="email" id="loginEmail" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="loginPassword" class="form-label">Password</label>
                    <input type="password" id="loginPassword" name="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Login</button>
            </form>
        </div>
    </div>

</div>

<script>
   $(document).ready(function() {
        // Function to check the URL and display the registration form
        function checkCurrentRoute() {
            if (window.location.pathname.includes('registration')) {
                $("#loginForm").hide();
                $("#registrationForm").show();
            } else {
                $("#loginForm").show();
                $("#registrationForm").hide();
            }
        }

        // Call the function on page load
        checkCurrentRoute();

        // Toggle between registration and login forms
        $("#loginButton").click(function() {
            $("#registrationForm").hide();
            $("#loginForm").show();
        });

        $("#registerButton").click(function() {
            $("#loginForm").hide();
            $("#registrationForm").show();
        });
    });





</script>

</body>

</html>



