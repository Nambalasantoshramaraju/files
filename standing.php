<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<html lang="en"> 
  <header>
    <style>
  nav a {
  font-size: 1.5rem;
  color: #f9f8eb;
  text-transform: uppercase;
  
}

.container {
  width: 90%;
  max-width: 900px;
  margin: 0 auto;
}
.container-nav {
  display: flex;
  justify-content: space-between;
  align-items: center;
 
}
.hed {
background-color: #05004e;
padding: 0.8em 0;
box-shadow: 2px 2px 10px #f1f6f9;
}
nav ul {
list-style: none;
padding: 0;
display: flex;
}
 nav li {
margin-left: 7em;
}
 nav a {
  text-decoration: none;
}

nav a:hover,
nav a:focus {
  color: #fd5f00;
}
@media (max-width: 640px) {
  .container {
    text-align: center;
  }

  .container-nav {
    flex-direction: column;
  }

  nav ul {
    flex-direction: column;
  }

  nav li {
    margin: 0.8em 0;
  }
}

.animate-charcter
{
   text-transform: uppercase;
  background-image: linear-gradient(
    -225deg,
    #231557 0%,
    #44107a 29%,
    #ff1361 67%,
    #fff800 100%
  );
  background-size: auto auto;
  background-clip: border-box;
  background-size: 200% auto;
  color: #fff;
  background-clip: text;
  text-fill-color: transparent;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: textclip 2s linear infinite;
  display: inline-block;
      font-size: 90px;
}

@keyframes textclip {
  to {
    background-position: 200% center;
  }
}
  </style>
  </head>
  <div class="container">
  <div class="row">
    <div class="col-md-12 text-center">
      <h3 class="animate-charcter"> LIVE SCORE</h3>
    </div>
  </div>
</div>
<header class='hed'>
<div class="sticky-top">
  <div class="container container-nav">
    <nav>
      <ul>
        <li><a href="home.php">HOME</a></li>
        <li><a href="highlights.php">HIGHLIGHTS</a></li>
        <li><a href="standing.php">STANDINGS</a></li>
      </ul>
    </nav>
  </div>
</div>
</header>
</head>
<body>
 <!-- <div id="fs-standings"></div> <script> (function (w,d,s,o,f,js,fjs) { w['fsStandingsEmbed']=o;w[o] = w[o] || function () { (w[o].q = w[o].q || []).push(arguments) }; js = d.createElement(s), fjs = d.getElementsByTagName(s)[0]; js.id = o; js.src = f; js.async = 1; fjs.parentNode.insertBefore(js, fjs); }(window, document, 'script', 'mw', 'https://cdn.footystats.org/embeds/standings.js')); mw('params', { leagueID: 7704 }); </script>--> 
    <div id="scoreaxis-widget-6a27d" style="border-width:1px;border-color:rgba(0, 0, 0, 0.15);border-style:solid;border-radius:8px;padding:10px;background:rgb(255, 255, 255);width:100%;height:100%;
    " data-reactroot=""><iframe id="Iframe" src="https://www.scoreaxis.com/widget/standings-widget/8?&amp;inst=6a27d" style="width: 100%; height:100%;border:none;transition:all 300ms ease"></iframe><script>window.addEventListener("DOMContentLoaded",event=>{window.addEventListener("message",event=>{if(event.data.appHeight&&"6a27d"==event.data.inst){let container=document.querySelector("#scoreaxis-widget-6a27d iframe");container&&(container.style.height=parseInt(event.data.appHeight)+"px")}},!1)});</script></div>
</body>
</html>