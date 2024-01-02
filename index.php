<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LMS</title>

    <?php
    include_once './components/header.php';
    ?>
</head>

<body id="loginPage">

<div class="container-fluid">
    <div class="row">
        <div class="col-12 mt-md-5 ">
            <div class="row mt-md-5 ">
                <div class="col-12 col-lg-5 offset-lg-1 ">
                    <div class="row">
                        <div class="col-12">
                            <img src="./assets/img/login.main.svg" alt="LMS"
                                 style="width: 100%;height: 100%;background-position: center;background-size: cover">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5">
                    <div class="row">
                        <div>
                            <div class="text-center">
                                <span class="fw-bold fs-1">LMS LOGIN</span><br/>

                            </div>
                            <div class="w-100 mt-4">
                                <select data-error-name="your role" class="form-select border border-2"
                                        id="select-role">
                                    <option value="">Select your role</option>
                                    <option value="student">Student</option>
                                    <option value="teacher">Teacher</option>
                                    <option value="academic_officer">Academic officer</option>
                                    <option value="admin">Admin</option>
                                </select>
                            </div>
                            <div class="form-floating mb-3 w-100 mt-4">
                                <input data-error-name="Username" type="text" class="form-control border border-2"
                                       id="username" placeholder=" ">
                                <label for="floatingInput">Username</label>
                                <span class="field-error"></span>
                            </div>
                            <div class="form-floating mb-3 w-100">
                                <input data-error-name="Password" type="password" class="form-control border border-2"
                                       id="password" placeholder=" ">
                                <label for="floatingInput">Password</label>
                                <span class="field-error"></span>
                            </div>
                            <div class="w-100">
                                <a class="text-info cursor-pointer">Forgot password</a>
                            </div>
                            <div class="d-grid w-100 mt-3 mb-4">
                                <button class="btn btn-primary fs-5" onclick="logIn();">Login</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include_once './components/footer.php';
?>

</body>

</html>