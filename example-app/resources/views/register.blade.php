<!doctype html>
<html lang="en">

<head>
    <title>Randmu | Register</title>

    <!-- Favicons -->
	<link rel="icon" href="img/favicon_randmu.png" type="image">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/login.css">

    <!--sweetalert-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- Trix -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js" integrity="sha512-/1nVu72YEESEbcmhE/EvjH/RxTg62EKvYWLG3NdeZibTCuEtW5M4z3aypcvsoZw03FAopi94y04GhuqRU9p+CQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css" integrity="sha512-CWdvnJD7uGtuypLLe5rLU3eUAkbzBR3Bm1SFPEaRfvXXI2v2H5Y0057EMTzNuGGRIznt8+128QIDQ8RqmHbAdg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix-core.js" integrity="sha512-H8CbNdhcOBCt62S6eVGAUSiyNx5OGVEVrYIIVs0iIgurgD1+oTA9THTZ1tqxSE9yw9vzfilg83xgyxD467a28g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix-core.min.js" integrity="sha512-lyT4F0/BxdpY5Rn1EcTA/4OTTGjvJT9SxWGxC1boH9p8TI6MzNexLxEuIe+K/pYoMMcLZTSICA/d3y0ColgiKg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.css" integrity="sha512-5m1IeUDKtuFGvfgz32VVD0Jd/ySGX7xdLxhqemTmThxHdgqlgPdupWoSN8ThtUSLpAGBvA8DY2oO7jJCrGdxoA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.js" integrity="sha512-2RLMQRNr+D47nbLnsbEqtEmgKy67OSCpWJjJM394czt99xj3jJJJBQ43K7lJpfYAYtvekeyzqfZTx2mqoDh7vg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <!--CKEditor-->
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

</head>

<body class="begron">
    @if(session()->has('pesan'))
        <script>swal("Register gagal!", "{{ session('pesan') }}", "error");</script>
    @endif
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-12">
                    <div class="wrap d-md-flex">
                        <div class="login-wrap p-4 p-lg-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4" style="color: #fff;">Register</h3>
                                </div>
                            </div>
                            <form action="/register" method="POST" class="signin-form">
                                <div class="form-group mb-1">
                                    <label class="label" for="first_name" style="color: #fff;">First Name</label>
                                    <input type="text" name="first_name" id="first_name" style="color: #fff; background-color: gray" class="form-control @error('first_name') is-invalid @enderror" value="{{ old('first_name') }}" placeholder="First Name" required>
                                    <small style="color:red;" >@error('first_name') {{ $message }} @enderror</small>
                                </div>
                                <div class="form-group mb-1">
                                    <label class="label" for="last_name" style="color: #fff;">Last Name</label>
                                    <input type="text" name="last_name" id="last_name" style="color: #fff; background-color: gray" class="form-control @error('last_name') is-invalid @enderror" value="{{ old('last_name') }}" placeholder="Last Name" required>
                                    <small style="color:red;" >@error('last_name') {{ $message }} @enderror</small>
                                </div>
                                <div class="form-group mb-1">
                                    <label class="label" for="birth_place" style="color: #fff;">Birth Place</label>
                                    <input type="text" name="birth_place" id="birth_place" style="color: #fff; background-color: gray" class="form-control @error('birth_place') is-invalid @enderror" value="{{ old('birth_place') }}" placeholder="Birth Place" required>
                                    <small style="color: red;" >@error('birth_place') {{ $message }} @enderror</small>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="birth_date" style="color: #fff;">Birth Date</label>
                                    <input type="date" name="birth_date" id="birth_date" style="color: #fff; background-color: gray" class="form-control @error('birth_date') is-invalid @enderror" value="{{ old('birth_date') }}" placeholder="dd/mm/yyyy" required>
                                    <small style="color: red;" >@error('birth_date') {{ $message }} @enderror</small>
                                </div>
                            </form>
                        </div>
                        <div class="login-wrap p-4 p-lg-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <p class="social-media d-flex justify-content-end mb-4">
                                        <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span
                                                class="fa fa-facebook"></span></a>
                                        <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span
                                                class="fa fa-instagram"></span></a>
                                        <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span
                                                class="fa fa-whatsapp"></span></a>
                                    </p>
                                </div>
                            </div>
                            <form action="#" class="signin-form">
                                <div class="form-group mb-1">
                                    <label class="label" for="email" style="color: #fff;">E-Mail</label>
                                    <input type="email" name="email" id="email" style="color: #fff; background-color: gray" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="E-Mail" required>
                                    <small style="color:red;" >@error('email') {{ $message }} @enderror</small>
                                </div>
                                <div class="form-group mb-1">
                                    <label class="label" for="username" style="color: #fff;">Username</label>
                                    <input type="text" name="username" id="username" style="color: #fff; background-color: gray" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}" placeholder="Username" required>
                                    <small style="color:red;" >@error('username') {{ $message }} @enderror</small>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password" style="color: #fff;">Password</label>
                                    <input type="password" name="password" id="password" style="color: #fff; background-color: gray" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required>
                                    <small style="color:red;" >@error('password') {{ $message }} @enderror</small>
                                </div>
                                <br>
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary submit px-3"><b>SIGN UP</b></button>
                                </div>
                                <div class="form-group d-md-flex">
                                    <div class="w-50 text-left">
                                        <label class="checkbox-wrap checkbox-primary mb-0">Remember Me
                                            <input type="checkbox" checked>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="w-50 text-right">
                                        <a href="/login">Back to Login Page</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="footer" style="color: #fff; text-align: center; text-transform: uppercase;">
        <p>Copyright © 2022 PT. RANDMU INDONESIA CONSULT, All Rights Reserved.</p>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>