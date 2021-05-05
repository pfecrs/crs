<!doctype html>
<html lang="en">
  <head>
    <title>Centrale Risque Cectorielle</title>
    <link rel="shortcut icon" href="https://companies.mybroadband.co.za/crs/wp-content/themes/crs/images/crs_logo.png?v=1.1" type="image/x-icon">  
   
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<style>
    .darkmode-layer, .darkmode-toggle {
  z-index: 1000;
}
.darkmode--activated img {
    isolation: isolate;
}

</style>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css"
  rel="stylesheet"
/>
{{-- <style>
  body {
  --text-color: #222;
  --bkg-color: #fff;
}
body.dark-theme {
  --text-color: #eee;
  --bkg-color: #121212;
}

@media (prefers-color-scheme: dark) {
  /* defaults to dark theme */
  body {
    --text-color: #eee;
    --bkg-color: #121212;
  }
  body.light-theme {
    --text-color: #222;
    --bkg-color: #fff;
  }
}

* {
  font-family: Arial, Helvetica, sans-serif;
}

body {
  background: var(--bkg-color);
}

h1,
p {
  color: var(--text-color);
}
</style> --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body id="moon" class="bg-light">
    
      @yield('content')
      <div class="" style="height: 450px"></div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    {{-- <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
<script>

const options = {
  bottom: '64px', // default: '32px'
  right: 'unset', // default: '32px'
  left: '32px', // default: 'unset'
  time: '3s', // default: '0.3s'
  mixColor: '#fff', // default: '#fff'
  backgroundColor: '#fff',  // default: '#fff'
  buttonColorDark: '#100f2c',  // default: '#100f2c'
  buttonColorLight: '#fff', // default: '#fff'
  saveInCookies: false, // default: true,
  label: '🌓', // default: ''
  autoMatchOsTheme: true // default: true
}

const darkmode = new Darkmode(options);
darkmode.showWidget();
</script> --}}
<footer class="footer">
    <div class="container text-right">
      <span class="text-muted">&copy; Thor System 2021</span>
    </div>
  </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/608623ef62662a09efc2093f/1f45vonv1';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
<script
type="text/javascript"
src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js">
</script>
    {{-- <script>
      const btn = document.querySelector(".btn-toggle");
const prefersDarkScheme = window.matchMedia("(prefers-color-scheme: dark)");

const currentTheme = localStorage.getItem("theme");
if (currentTheme == "dark") {
  document.body.classList.toggle("dark-theme");
} else if (currentTheme == "light") {
  document.body.classList.toggle("light-theme");
}

btn.addEventListener("click", function () {
  if (prefersDarkScheme.matches) {
    document.body.classList.toggle("light-theme");
    var theme = document.body.classList.contains("light-theme")
      ? "light"
      : "dark";
  } else {
    document.body.classList.toggle("dark-theme");
    var theme = document.body.classList.contains("dark-theme")
      ? "dark"
      : "light";
  }
  localStorage.setItem("theme", theme);
});
    </script> --}}
    <!--End of Tawk.to Script-->




    <script>

function myMoon() {
  var element = document.getElementById("moon");
  var text=document.getElementById("textmoon")
  var text2=document.getElementById("textmoon2")
  var text3=document.getElementById("textmoon3")
  if(element.classList.contains("bg-light")){
  element.classList.remove("bg-light");
  element.classList.add("bg-dark");
  text.classList.add("text-light");
  text2.classList.add("text-light");
  text3.classList.add("text-light");
  }
  else if(element.classList.contains("bg-dark")){
  element.classList.remove("bg-dark");
  element.classList.add("bg-light");
  text.classList.remove("text-light");
  text2.classList.remove("text-light");
  text3.classList.remove("text-light");
  }
  
}
    </script>
</body>
</html>