<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title> Welcome Page</title>
  <link rel="stylesheet" href="style.css">
  <!-- Boxicons CDN Link -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

  <!-- home  -->



  <div class="sidebar">
    <div class="logo-details">
      <div class="logo_name">STUDIRCLE</div>
      <i class='bx bx-menu' id="btn"></i>
    </div>
    <ul class="nav-list">
      <li>
        <i class='bx bx-search'></i>
        <input type="text" placeholder="Search...">
        <span class="tooltip">Search</span>
      </li>
      <li>
        <a href="#Home">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name" onclick="open_home()">Home</span>
        </a>
        <span class="tooltip" onclick="open_home()">Home </span>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-user'></i>
          <span class="links_name">Profile</span>
        </a>
        <span class="tooltip">Profile</span>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-chat'></i>
          <span class="links_name">Messages</span>
        </a>
        <span class="tooltip">Messages</span>
      </li>
      <li>
        <a href="#Due dates">
          <i class='bx bx-add-to-queue'></i>
          <span class="links_name">Due Dates</span>
        </a>
        <span class="tooltip">Due Dates</span>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-folder'></i>
          <span class="links_name">Announcements</span>
        </a>
        <span class="tooltip">Announcements</span>
      </li>

      <li>
        <a href="#">
          <i class='bx bx-heart'></i>
          <span class="links_name">Saved</span>
        </a>
        <span class="tooltip">Saved</span>
      </li>
      <li>
        <a href="#contactus">
          <i class='bx bx-book-content'></i>
          <span class="links_name">Contact us</span>
        </a>
        <span class="tooltip">Contact</span>
      </li>
    </ul>
  </div>
  <section class="home-section">
    <div class="text" id="Home">College Made Social!</div>
    <div id="contactus">
      <blockquote class="blockquote text-center">
        <p class=" p-3 border border-dark"
          style="background-color: #11101D; font-size: 35px; width: 100%; color: white"><b> CONTACT US</b></p>
      </blockquote>

      <br><br>

      <form class="pb-5 pt-4">
        <div class="form-group m-auto" style="width: 40%;">
          <label for="exampleFormControlInput1" style="color:#11101D"><b> NAME</b></label>
          <input type="text" class="form-control" id="name" placeholder="Enter Your Name"
            style="background-color: #E4E9F7; border: 2px solid #11101D;">
        </div>
        <br>
        <div class="form-group m-auto" style="width: 40%; color: #11101D">
          <label for="exampleFormControlInput1"><b> Email address</b></label>
          <input type="email" class="form-control" id="email" placeholder="Enter Your E-mail"
            style="background-color: #E4E9F7; border: 2px solid #11101D;">
        </div>
        <br>
        <div class="form-group m-auto" style="width: 40%; color: #11101D">
          <label for="exampleFormControlTextarea1"><b> Please Enter Your Query Here</b></label>
          <textarea class="form-control" id="query" rows="8" placeholder="Type here...."
            style="background-color: #E4E9F7; border: 2px solid #11101D;"></textarea>
        </div>

        <div class="d-grid gap-5 col-5 mx-auto">
          <br>
  <button style="background-color: #11101D" class="btn btn-primary" name="send" id="send" type="submit">Send Message</button>
</div>
      </form>

    </div>

    <footer>
      <div class="text-center p-3" style="color: white; background-color: #11101D;">
        © 2022 Copyright:
        <a class="text-white" href="#">STUDIRCLE.com</a>
      </div>
      <!-- Copyright -->
      </footer>

      </div>
      </footer>
  </section>

  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <!-- <script src="script.js"></script> -->
  <script>
    let sidebar = document.querySelector(".sidebar");
    let closeBtn = document.querySelector("#btn");
    let searchBtn = document.querySelector(".bx-search");

    closeBtn.addEventListener("click", () => {
      sidebar.classList.toggle("open");
      menuBtnChange();//calling the function(optional)
    });

    searchBtn.addEventListener("click", () => { // Sidebar open when you click on the search iocn
      sidebar.classList.toggle("open");
      menuBtnChange(); //calling the function(optional)
    });

    // following are the code to change sidebar button(optional)
    function menuBtnChange() {
      if (sidebar.classList.contains("open")) {
        closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
      } else {
        closeBtn.classList.replace("bx-menu-alt-right", "bx-menu");//replacing the iocns class
      }
    }
  </script>
<!-- Code injected by live-server -->
<script type="text/javascript">
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script></body>

</html>