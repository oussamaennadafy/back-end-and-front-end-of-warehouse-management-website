
<?php header("Content-type: text/css"); ?>

@media (max-width: 1200px) {
  html {
    font-size: 60%;
  }
}
@media (max-width: 1100px) {
  html {
    font-size: 57%;
  }
}
@media (max-width: 1000px) {
  html {
    font-size: 55%;
  }
}
@media (max-width: 900px) {
  html {
    font-size: 53%;
  }
}
@media (max-width: 800px) {
  html {
    font-size: 51%;
  }
}
@media (max-width: 500px) {
  .cnt_of_form {
    flex-direction: column;
  }
  .label {
    margin-bottom: 1.6rem;
    font-weight: 500;
  }
  main {
    text-align: center;
    background-image: url(../images/background-mobile.jpg);
  }
}
@media (max-width: 700px) {
  html {
    font-size: 51%;
  }
  .cnt_of_main {
    width: 80%;
  }
  .btn_icons {
    display: block;
  }
  .close_icon {
    display: none;
  }
  .nav_open .btn_icons {
    display: block;
    z-index: 9;
  }
  .nav_open .menu_icon {
    display: none;
  }
  .nav_open .close_icon {
    display: block;
  }
  .ul_of_nav {
    display: none;
  }
  .ul_of_nav {
    display: flex;
    position: absolute;
    top: 0;
    left: 0;
    width: 100vw;
    height: 100vh;
    background-color: var(--main-color);
    flex-direction: column;
    justify-content: center;
    gap: 3rem;
    padding: 0;
    transition: 600ms all;
    /* ///////////////// */
    opacity: 0;
    visibility: hidden;
    pointer-events: none;
  }
  .nav_open .ul_of_nav {
    display: flex;
    position: absolute;
    top: 0;
    left: 0;
    width: 100vw;
    height: 100vh;
    background-color: var(--main-color);
    flex-direction: column;
    justify-content: center;
    gap: 3rem;
    padding: 0;
    transition: 600ms all;
    /* ///////////////// */
    opacity: 1;
    visibility: visible;
    pointer-events: auto;
    z-index: 1;
  }
}
@media (max-width: 500px) {
  .cnt_of_main {
    width: 85%;
  }
}
@media (max-width: 400px) {
  html {
    font-size: 45%;
  }
  .cnt_of_main {
    width: 90%;
    text-align: center;
  }
  .input {
    width: 17rem;
  }
}
