<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="/assets/css/main.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,800&display=swap" rel="stylesheet">
        <link rel="shortcut icon" type="image/svg" href="/assets/images/logo.png" />
        <!-- Primary Meta Tags -->
        <title>Humba - Mache mehr aus deiner Pause</title>
        <meta name="title" content="Humba - Mache mehr aus deiner Pause">
        <meta name="description" content="Humba ist die App mit der du deine Freistunde oder Pause endlich sinnvoller verbringen kannst. Suche einfach Andere, die auch frei haben, lerne neue Menschen kennen, lass dir von uns Aktivitäten vorschlagen oder gehe mit günstiger bei unseren Partnern essen.">
        <meta name="theme-color" content="#151515" />
        <style media="screen">
            body {
                font-family: 'Montserrat', sans-serif;
            }
            #page{
              display: none;
            }
            #loading{
              display: block;
            }
            .animation {
              animation-name: spin;
              animation-duration: 4000ms;
              animation-iteration-count: infinite;
              animation-timing-function: linear
            }
            @keyframes spin {
                from {transform:rotate(0deg);}
                to {transform:rotate(360deg);}
            }
        </style>
        <script>
            function myFunction()
            {
              setTimeout(function(){
                document.getElementById("page").style.display = "block";
                document.getElementById("loading").style.display = "none";
              }, 3500);
            }
        </script>
    </head>
    <body  onload="myFunction()" class="bg-humba-black">
        @yield('body')
    </body>
    <script>
        (function(f, a, t, h, o, m){
        	a[h]=a[h]||function(){
        		(a[h].q=a[h].q||[]).push(arguments)
        	};
        	o=f.createElement('script'),
        	m=f.getElementsByTagName('script')[0];
        	o.async=1; o.src=t; o.id='fathom-script';
        	m.parentNode.insertBefore(o,m)
        })(document, window, '//analytics.max.berlin/tracker.js', 'fathom');
        fathom('set', 'siteId', 'GVGUD');
        fathom('trackPageview');
    </script>
</html>
