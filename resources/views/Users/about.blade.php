<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body, html {height: 100%}
body,h1,h2,h3,h4,h5,h6 {font-family: "Amatic SC", sans-serif}
.menu {display: none}

.w3-bar .w3-button {
  padding: 16px;
}

}
iframe {
  width: 100%;
  height: auto;
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="#home" class="w3-bar-item w3-button w3-wide">LOGO</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="{{route('home')}}" class="w3-bar-item w3-button" target="_blank">HOME</a>
      <a href="{{route('about')}}" class="w3-bar-item w3-button" target="_blank">ABOUT</a>
      <a href="{{route('films')}}" class="w3-bar-item w3-button" target="_blank">FILMS</a>
      <a href="{{route('contact')}}" class="w3-bar-item w3-button" target="_blank"> CONTACT</a>
      <a href="{{route('blog')}}" class="w3-bar-item w3-button" target="_blank">BLOGS</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
  <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">TEAM</a>
  <a href="#work" onclick="w3_close()" class="w3-bar-item w3-button">WORK</a>
  <a href="#pricing" onclick="w3_close()" class="w3-bar-item w3-button">PRICING</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
</nav>

<!-- Header with full-height image -->


<!-- About Section -->
<div class="w3-content" style="max-width:1100px;margin-top:60px" id="about">
  <h3 class="w3-center" style="padding-top: 25px">ABOUT</h3>
  <p class="w3-center"><em>I love photography</em></p>
  <div class="w3-row w3-padding-64" id="about">
    <div class="w3-col m6 w3-padding-large ">
     <img src="../img/about.jpeg" class="w3-round w3-image w3-opacity-min" alt="Table Setting" width="600" height="750">
    </div>

    <div class="w3-col m6 w3-padding-large">
      <h1 class="w3-center">About Catering</h1><br>
      <h5 class="w3-center">Tradition since 1889</h5>
      @foreach ($about as $item )

      <p class="w3-large" style="font-family: {{$item['font']}}">  
        {{$item['content_image']}}
      </p>
      @endforeach

    </div>
  </div>
</div>


<!-- Work Sectionasdasdasdasdasdsd -->



<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

<!-- Skills Section -->
<div class="w3-center">
  <a href="#home" class="w3-button w3-light-grey">PORTFOLIO</a>
  <a href="#home" class="w3-button w3-light-grey">KIND WORDS</a>
</div>

<!-- Section -->
<div class="w3-content" style="max-width:1100px" id="about">
  <div class="w3-row w3-padding-64" id="about">
    <h3 class="w3-center">FUN FACTS</h3>
    <div class="w3-col m6 w3-padding-large ">
      <ul>
        <li>The Catering was founded in blabla by</li>
        <li>Mr. Smith in lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur</li>
        <li> Mr. Smith in lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur </li>
        <li>Mr. Smith in lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur adipiscing elit, sed do eiusmod tempor incididunt</li>
        <li>Mr. Smith in lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
      </ul>
    </div>

    <div class="w3-col m6 w3-padding-large">
      <ul>
        <li>The Catering was founded in blabla by</li>
        <li>Mr. Smith in lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur</li>
        <li> Mr. Smith in lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur </li>
        <li>Mr. Smith in lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur adipiscing elit, sed do eiusmod tempor incididunt</li>
        <li>Mr. Smith in lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
      </ul>
    </div>
  </div>
</div>
<!-- Section -->


<!-- Footer -->
<footer class="w3-center w3-light-grey" style="padding-top: 7px;padding-bottom:7px">
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
</footer>
 
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>

</body>
</html>
