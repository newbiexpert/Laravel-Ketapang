
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="{{url('img/icon.png')}}" rel="icon" type="image/png">
    <link rel="stylesheet" href="{{url('assets/styles/bootstrap/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{url('assets/styles/styles.css')}}" />
    <title>Ketapang</title>
</head>

<body style="background-color: #f5f5f5;">
    <div class="limiter">
		<div class="container-login">
			<div class="wrap-login">
        @if ($errors->any())
            <div class="col-sm-12">
              <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </div>
            </div>
            @endif
            @if (Session::has('message'))
              <div class="col-sm-12">
                <div class="alert alert-success">
                    {{ Session::get('message') }}
                </div>
              </div>
            @endif
            @if (Session::has('message_gagal'))
              <div class="col-sm-12">
                <div class="alert alert-danger">
                    {{ Session::get('message_gagal') }}
                </div>
              </div>
            @endif
				<div class="login-pic js-tilt" data-tilt>
          <center>
            <img src="{{url('assets/images/gedung_sate.png')}}" width="250px" alt="">
          </center>
				</div>
				<form action="/register" method="post">
          @csrf
				<span class="login-form-title">
					<img src="{{url('assets/images/logo/KetapangLogo-Color.png')}}" width="220px" alt="Logo">
				</span>

					<div class="input-container">
						<input id="name" name="name" class="input font-segoe" type="text" required placeholder="Nama"/>
					</div>
					<div class="input-container">
						<input id="email" name="email" class="input font-segoe" type="email" required placeholder="Email"/>
					</div>
					<div class="input-container">
						<input id="password" name="password" class="input font-segoe" type="password" required placeholder="Password"/>
					</div>

					<div class="container-login-form-btn">
						<input class="login-form-btn" type="submit" name="submit" id="submit" value="Daftar" class="btn">
					</div>
          <div class="text-center p-t-136">
            <a class="txt2"  href="/login">
              <font size="3px">Sudah Punya Akun ?</font>
              <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
            </a>
          </div>
				</form>
			</div>
		</div>
	</div>
</body>
<script src="{{url('assets/scripts/jquery.min.js')}}"></script>
<script src="{{url('assets/scripts/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{url('assets/scripts/bootstrap/bootstrap.bundle.min.js')}}"></script>
<script src="{{url('assets/scripts/masonry.pkgd.min.js')}}"></script>
<script src="{{url('assets/scripts/index.js')}}"></script>

</html>
