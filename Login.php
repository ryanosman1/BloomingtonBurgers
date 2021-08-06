<html>

<head>
    <title>Bloom Burgers </title>
    <meta name="google-signin-client_id" content="441437457035-dlfjrmo9q2fl4i92k0bjf3c12ghokrlh.apps.googleusercontent.com">
</head>

<body>

    <div class="g-signin2" 
        data-onsuccess="onSignIn"
        <!--data-ux_mode="redirect"
        data-redirect_uri="https://cgi.luddy.indiana.edu/~ryosman/capstonesummer/AHomePage.php"-->
        >
    </div>

    <a href="#" onclick="signOut();">Sign out</a>

    <?php

    var_dump($_POST);

    var_dump($_GET);
    ?>

    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script>
        function onSignIn(googleUser) {
            // redirect page
            location.href = "https://cgi.luddy.indiana.edu/~ryosman/capstonesummer/AHomePage.php"
            var profile = googleUser.getBasicProfile();
            console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
            console.log('Name: ' + profile.getName());
            console.log('Image URL: ' + profile.getImageUrl());
            console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
        }

        function signOut() {
            var auth2 = gapi.auth2.getAuthInstance();
            auth2.signOut().then(function () {
            console.log('User signed out.');
            });
        }
    </script>
</body>
</html>
