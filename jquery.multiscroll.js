/**
 * multiscroll 0.0.6 Beta
 * https://github.com/alvarotrigo/multiscroll.js
 * MIT licensed
 *
 * Copyright (C) 2013 alvarotrigo.com - A project by Alvaro Trigo
 */
html, body {
    margin: 0;
    padding: 0;
	overflow:hidden;
	-webkit-tap-highlight-color: rgba(0,0,0,0);
}
.ms-section {
    position: relative;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.ms-section.ms-table{
    display: table;
    width: 100%;
}
.ms-tableCell {
    display: table-cell;
    vertical-align: middle;
    width: 100%;
    height: 100%;
}
.ms-easing {
    -webkit-transition: all 0.7s ease-out;
    -moz-transition: all 0.7s ease-out;
    -o-transition: all 0.7s ease-out;
    transition: all 0.7s ease-out;
}
#multiscroll-nav {
    position: fixed;
    z-index: 100;
    margin-top: -32px;
    top: 50%;
    opacity: 1;
}
#multiscroll-nav.right {
    right: 17px;
}
#multiscroll-nav.left {
    left: 17px;
}
#multiscroll-nav ul{
  margin: 0;
  padding: 0;
}
#multiscroll-nav li{
    display: block;
    width: 14px;
    height: 13px;
    margin: 7px;
    position:relative;
}
#multiscroll-nav li a{
    display: block;
    position: relative;
    z-index: 1;
    width: 100%;
    height: 100%;
    cursor: pointer;
    text-decoration: none;
}
#multiscroll-nav li .active span{
    background: #333;
}
#multiscroll-nav span{
    top: 2px;
    left: 2px;
    width: 8px;
    height: 8px;
    border: 1px solid #000;
    background: rgba(0, 0, 0, 0);
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    position: absolute;
    z-index: 1;
}
.multiscroll-tooltip {
    position: absolute;
    color: #fff;
    font-size: 14px;
    font-family: arial, helvetica, sans-serif;
    top: -2px;
    white-space: nowrap;
    max-width: 220px;
}
.multiscroll-tooltip.right {
    right: 20px;
}
.multiscroll-tooltip.left {
    left: 20px;
}
