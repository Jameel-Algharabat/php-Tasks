<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet" />
<title>log in</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="Form-sty.css" />
</head>

<body>
    
            <div class="col">
                <div class="row align-items-center">
                    <div class="container w-50 ">
                        <h1 class="h1 mb-4">Sign in</h1>
                        <div class="border-Register2">
                        <form action="#" class="mt-0" id="log-in" onsubmit="loginfunction()">
                            <div>
                                
                            </div>
                            <div>
                                <label for="email" class="form-label"><b>Email:</b></label>
                                <input name="email" id="login-email" class="form-control mb-1" />
                            </div>
                            <small id="email-error" class="md-4"></small><br />
                            <label for="pass" class="form-label"><b>Password:</b></label>
                            <div class="input-group col-12">
                                <input type="password" class="form-control" aria-describedby="button-addon2"
                                    id="login-pass" />
                                </button>
                            </div>
                            <small id="pass-error" class="md-4"> </small>
                            <br/>
                            <div id="message"></div>
                            <div class="d-grid gap-2">
                                <input class="btn btn-primary sign-up btn-lg mt-2" id="signup" type="submit"  value="Log in"/>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <script src="js.js"></script>
</body>

</html>