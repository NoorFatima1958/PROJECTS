<!DOCTYPE html>
<html>
<head>
    <title>Dental Education Website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="sty.css">

 <style>
        
        #cookie-banner {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 10px;
            background-color: #643B9F;
            color: #ffffff;
            text-align: center;
            border-top: 1px solid #dee2e6;
            display: none;
        }

        #cookie-banner button {
            margin: 5px;
        }
    </style>
</head>
<body> 

  <div class="container my-5">
    <section>
      <div class="text-center mb-5 col-md-10 mx-auto bg-light rounded">
        <h2 class="font-weight-bold display-4 text-capitalize">Dental <span class="text-primary-color">Eduation</span></h2>
        <p class="mx-5">Welcome to our Dental Education platform, where knowledge meets a healthy smile!</p>
      </div>
      <div class="row">
        <div class="col-md-4 my-4">
          <a href="#" class="text-dark">
            <div class="px-3 py-5 bg-primary-color text-white rounded">
              <span class="text-uppercase">Services</span>
              <h3 class="text-capitalize my-2 font-italic-weight-600">Dental Insights: Expert Articles and News Updates</h3>
            </div>
            <img src="services.jpg" alt="Dental Health Image" class="img-fluid">
          </a>
        </div> 
        <div class="col-md-4 my-4">
          <a href="articles.html" class="text-dark">
            <div class="px-3 py-5 bg-light rounded">
              <div class="text-center">
                <img src="article.png" alt="Dental Health Image" class="img-fluid">
              </div>  
              <div class="px-3 text-center pb-3">
                <h5 class="text-uppercase font-weight-600">Dental Health Articles</h5>
                <p class="font-weight-light my-3">Dive into our Dental Health Articles : a curated collection of expert insights, tips, and trends to empower you on your journey to optimal oral wellness.</p>
              </div>   
            </div>
          </a>
        </div>
        <div class="col-md-4 my-4">
          <a href="news.html" class="text-dark">
            <div class="px-3 py-5 bg-light rounded">
              <div class="text-center">
                <img src="news.jpg" alt="Dental Health Image" class="img-fluid">
              </div>
              <div class="px-3 text-center pb-3">
                <h5 class="text-uppercase font-weight-600">Dental News</h5>
                <p class="font-weight-light my-3">Stay in the know with our Dental News : timely updates, breakthroughs, and industry highlights to keep you informed about the latest advancements in oral health.</p>
              </div>
            </div>
          </a>
        </div>
      </div>
    </section>
  </div>
  <footer class="bg-light rounded">
        <p class="font-weight-light my-3">&copy; 2022 Dental Education. All rights reserved.</p>
  </footer>
  <?php
if (!isset($_COOKIE['cookie_consent'])) {
    echo '<div id="cookie-banner">
            <p>This website uses cookies to ensure you get the best experience on our website.</p>
            <button onclick="acceptCookies()">Accept</button>
            <button onclick="declineCookies()">Decline</button>
          </div>';
}
?>

<script>
    // JavaScript functions to handle cookie consent
    function setCookie(name, value, days) {
        var expires = "";
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + (value || "") + expires + "; path=/";
    }

    function acceptCookies() {
        setCookie('cookie_consent', 'accepted', 365); // Set cookie for 1 year
        document.getElementById('cookie-banner').style.display = 'none';
    }

    function declineCookies() {
        setCookie('cookie_consent', 'declined', 365); // Set cookie for 1 year
        document.getElementById('cookie-banner').style.display = 'none';
    }

    // Show the cookie banner if the user hasn't made a choice yet
    if (!document.cookie.includes('cookie_consent')) {
        document.getElementById('cookie-banner').style.display = 'block';
    }
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>