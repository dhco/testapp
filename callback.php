<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <!-- Copy and paste here the "Widget javascript" you downloaded from Developer Console as gitkit-widget.html -->

    <script type="text/javascript" src="//www.gstatic.com/authtoolkit/js/gitkit.js"></script>
    <link type="text/css" rel="stylesheet" href="//www.gstatic.com/authtoolkit/css/gitkit.css" />
    <script type="text/javascript">
      var config = {
          "apiKey": 'AIzaSyAkj3rIKSg9iJdzqvRcGHXXkoGdQYVNd84',
          "signInSuccessUrl": "http://rtime23.herokuapp.com/proclog.php",
          "signInOptions": ["google", "password"],
          oobActionUrl: 'http://rtime23.herokuapp.com/logemail.php',
          siteName: 'this site',
          "signOutUrl": "http://rtime23.herokuapp.com/signout.php"

          // Optional - URL of site ToS (linked and req. consent for signup)
          // tosUrl: 'http://example.com/terms_of_service',

          // Optional - Cookie name (default: gtoken)
          //            NOTE: Also needs to be added to config of the ‘page with
          //                  sign in button’. See above
          // cookieName: ‘example_cookie’,

           // Optional - UI configuration for accountchooser.com
           /*acUiConfig: {
               title: 'Sign in to example.com',
               favicon: 'http://example.com/favicon.ico',
               branding: 'http://example.com/account_choooser_branding'
           },
           */

           // Optional - Function to send ajax POST requests to your Recover URL
           //            Intended for CSRF protection, see Advanced Topics
           //      url - URL to send the POST request to
           //     data - Raw data to include as the body of the request
           //completed - Function to call with the object that you parse from
           //            the JSON response text. {} if no response
           /*ajaxSender: function(url, data, completed) {
                         },
           */
      };
      // The HTTP POST body should be escaped by the server to prevent XSS
      window.google.identitytoolkit.start(
          '#gitkitWidgetDiv', // accepts any CSS selector
          config,
          'JAVASCRIPT_ESCAPED_POST_BODY');
    </script>

    <!-- End modification -->

  </head>
  <body>

    <!-- Include the sign in page widget with the matching 'gitkitWidgetDiv' id -->
    <div id="gitkitWidgetDiv"></div>
    <!-- End identity toolkit widget -->

  </body>
</html>