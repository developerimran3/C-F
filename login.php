<?php include_once __DIR__ . '/templates/header.php'; ?>

<body class="inner_page login">
    <div class="full_container">
        <div class="container">
            <div class="center verticle_center full_height">
                <div class="login_section">
                    <div class="logo_login">
                        <div class="center">
                            <img width="210" src="images/logo/logo.png" alt="#" />
                        </div>
                    </div>
                    <div class="login_form">
                        <form>
                            <fieldset>
                                <div class="field">
                                    <label class="label_field">Email Address</label>
                                    <input type="email" name="email" placeholder="E-mail" />
                                </div>
                                <div class="field">
                                    <label class="label_field">Password</label>
                                    <input type="password" name="password" placeholder="Password" />
                                </div>
                                <div class="field">
                                    <label class="label_field hidden">hidden label</label>
                                    <label class="form-check-label"><input type="checkbox" class="form-check-input"> Remember Me</label>
                                    <a class="forgot" href="">Forgotten Password?</a>
                                </div>
                                <div class="field margin_0">
                                    <label class="label_field hidden">hidden label</label>
                                    <button class="main_bt">Sing In</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- wow animation -->
    <script src="js/animate.js"></script>
    <!-- select country -->
    <script src="js/bootstrap-select.js"></script>
    <!-- nice scrollbar -->
    <script src="js/perfect-scrollbar.min.js"></script>
    <script>
        var ps = new PerfectScrollbar('#sidebar');
    </script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
</body>

</html>