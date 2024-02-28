<style>
* {
  box-sizing: border-box;
}

body {
  font-size: 12px;
  font-family: Arial, Verdana, "Helvetica Neue", "Lucida Grande", "Segoe UI", Arial, Helvetica, sans-serif;
  margin: 0px;
  
}

.nav {
  height: 35px;
  width: 100%;
  background-color: #1f5897;
  position: relative;
}

.nav > .nav-header {
  display: inline;
}

.nav > .nav-header > .nav-title {
  display: inline-block;
  font-size: 14px;
  color: #fff;
  padding: 10px 10px 10px 10px;
}

.nav > .nav-btn {
  display: none;
}

.nav > .nav-links {
  display: inline;
  /* float: left; */
  font-size: 14px;
}

.nav > .nav-links > a {
  display: inline-block;
  padding: 13px 10px 13px 10px;
  text-decoration: none;
  color: #efefef;
}

/* .nav > .nav-links > a:hover {
    text-decoration: underline;
} */


/* test  */
    .nav > .nav-links > a:hover {
        border-bottom: 3px solid transparent; /* Adjust the thickness as needed */
        position: relative; /* Necessary for positioning the border */
        padding-bottom: 5px; /* Adjust this value to control the distance between text and underline */
    }

    .nav > .nav-links > a:hover::after {
        content: ""; 
        position: absolute; 
        left: 0; 
        bottom: 0; 
        width: 100%; 
        border-bottom: 3px solid white; /* Adjust color and thickness as needed */
    }

/* test  */

.nav > #nav-check {
  display: none;
}

@media (max-width:600px) {
  .nav > .nav-btn {
    display: inline-block;
    position: absolute;
    right: 0px;
    top: 0px;
  }
  .nav > .nav-btn > label {
    display: inline-block;
    width: 50px;
    height: 50px;
    padding: 13px;
  }
  .nav > .nav-btn > label:hover,.nav  #nav-check:checked ~ .nav-btn > label {
    background-color: rgba(0, 0, 0, 0.3);
  }
  .nav > .nav-btn > label > span {
    display: block;
    width: 25px;
    height: 10px;
    border-top: 2px solid white;
  }
  .nav > .nav-links {
    position: absolute;
    display: block;
    width: 100%;
    background-color: #1f5897;
    height: 0px;
    transition: all 0.3s ease-in;
    overflow-y: hidden;
    top: 50px;
    left: 0px;
  }
  .nav > .nav-links > a {
    display: block;
    width: 100%;
  }
  .nav > #nav-check:not(:checked) ~ .nav-links {
    height: 0px;
  }
  .nav > #nav-check:checked ~ .nav-links {
    height: calc(100vh - 50px);
    overflow-y: auto;
  }
}
</style>

<div class="nav">
  <input type="checkbox" id="nav-check">
  
  <div class="nav-btn">
    <label for="nav-check">
      <span></span>
      <span></span>
      <span></span>
    </label>
  </div>
  
  <div class="nav-links">
    <a href="//github.io/jo_geek" target="_blank">DASHBOARD</a>
    <a href="http://stackoverflow.com/users/4084003/" target="_blank">DIAGRAMS</a>
    <a href="https://in.linkedin.com/in/jonesvinothjoseph" target="_blank">TRENDS</a>
    <a href="https://codepen.io/jo_Geek/" target="_blank">ALARMS</a>
    <a href="https://jsfiddle.net/user/jo_Geek/" target="_blank">REPORTS</a>
  </div>
</div>