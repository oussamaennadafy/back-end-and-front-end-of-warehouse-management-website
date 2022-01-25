<?php header("Content-type: text/css"); ?>

* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}
html {
  font-size: 62.5%;
  scroll-behavior: smooth;
}
body {
  font-family: "Roboto", sans-serif;
  overflow-x: hidden;
}
:root {
  --main-color: #323a45;
  --button-color: rgba(196, 196, 196, 0.8);
}
main {
  width: 100vw;
  min-height:calc(100vh - 9.6rem - 3rem);
  background-image: url(../images/background-desktop.jpg);
  background-size: cover;
  background-attachment: fixed;
  padding: 4rem 0;
}
.header {
  width: 100vw;
  height: 9.6rem;
  background-color: var(--main-color);
  display: flex;
  align-items: center;
  position: relative;
}
.container {
  padding: 0 4rem;
  display: flex;
  align-items: center;
  justify-content: space-between;
  width: 100%;
}
.anchor_of_logo {
  text-decoration: none;
}
.logo_img {
  width: 15rem;
}
.ul_of_nav {
  width: 54rem;
  list-style: none;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding-right: 2rem;
  transition: 500ms all;
}
.nav {
  display: flex;
}
.anchor_of_navigation {
    font-size: 1.8rem;
    text-decoration: none;
    color: #fff;
    position:relative;
}
.anchor_four::after {
  content: "";
  position: absolute;
  top: 24px;
  left: 0;
  width: 100%;
  height: 2px;
  background-color: #fff;
}
.btn_icons {
  color:#fff;
  background: none;
  border: none;
  display: flex;
  cursor: pointer;
  /* ///////////// */
  display: none;
}
.close_icon,
.menu_icon {
  background-color: transparent;
  width: 4rem;
  height: 4rem;
}
/* //////////////////////////// */
.cnt_of_main {
  margin: 0 auto;
  background-color: var(--button-color);
  width: 50%;
  padding: 2.2rem 0;
  border-radius: 3px;
  margin-bottom: 3.2rem;
}
.head_one {
  text-align: center;
  margin-bottom: 2.2rem;
}
.cnt_of_form {
  display: flex;
  align-items: center;
  justify-content: space-around;
  margin-bottom: 3.2rem;
  width: 80%;
  margin: 0 auto 2.2rem auto;
}
.cnt_of_form.spaecial_margin_bottom {
  margin-bottom: 0;
}
.input {
  padding: 1.4rem 1.6rem;
  font-size: 1.8rem;
  border-radius: 3px;
  background: none;
  border: none;
  background-color: #fff;
  outline: none;
}
.label {
  font-size: 2rem;
  width: 17rem;
}
.input {
  padding: 1.4rem 1.6rem;
  font-size: 1.8rem;
  border-radius: 3px;
  background: none;
  border: none;
  background-color: #fff;
  outline: none;
}
.search_button {
  border-radius: 6px;
  font-size: 1.8rem;
  background-color: var(--main-color);
  color: var(--button-color);
  border: none;
  cursor: pointer;
  width: 12.6rem;
  height: 4.8rem;
}
.anchor_search {
    background-color: var(--main-color);
    height: 4.6rem;
    width: 12rem;
    font-size: 1.8rem;
    color: var(--button-color);
    border: none;
    border-radius: 3px;
    cursor: pointer;
    text-decoration: none;
    text-align: center;
}
.form {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
.no_product_found {
  text-align: center;
  color: #fff;
  font-size:2rem;
}
.home_anchor {
  text-decoration: none;
  color: #f14141;
}
/* //////////////////////////// */
.footer {
  width: 100vw;
  height: 3rem;
  background-color: var(--main-color);
  display: flex;
  align-items: center;
  justify-content: center;
}
.paragraph_of_footer {
  font-size: 1.8rem;
  color: #fff;
}
