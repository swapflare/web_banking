<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="1GxDEoVCk3c3B0iWiMb6u7M8g1y2LRT5e3OTScDC">
    <link rel="shortcut icon" href="https://skytrust.online/public/uploads/media/file_1643068552.png">

    <title>STLBANK</title>

    <!-- Scripts -->
    <script src="https://skytrust.online/public/auth/js/app.js" defer></script>

    <!-- Google font -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="https://skytrust.online/public/auth/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://skytrust.online/public/auth/css/app.css" rel="stylesheet">
</head>
<body>
    <div id="app">
        <main class="py-4">
            <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card card-signin my-5">
                <div class="login-form-head">
					<h4>Reset Password</h4>
				</div>

                <div class="card-body">
                    
                    <form method="POST" class="form-signin" action="https://skytrust.online/password/email" autocomplete="off">
                        <input type="hidden" name="_token" value="1GxDEoVCk3c3B0iWiMb6u7M8g1y2LRT5e3OTScDC">
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" placeholder="Enter your Email" value="" required>

                                                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
        </main>
    </div>

	</body>
</html>
