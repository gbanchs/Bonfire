<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="Es" >
<head>


<style>
html {
  height: 100%;
  margin-bottom: 0px;  
}

form {
  margin: 0;
  padding: 0;
}

img,table {
	border: none;
}

body {

	background: #fff;
	font-family: Tahoma, Verdana, Arial, sans-serif;
	line-height: 1.3em;
	margin: 0;
	padding: 0;
	font-size: 12px;
	color: #000;
}
	
body.contentpane {

	background: #f8f8f8;
	
}
/* a links */
a:link, a:visited {

	outline: none;
	text-decoration: underline;
	font-weight: normal;
	color: #000;
}

a:hover {
	text-decoration: none;
	font-weight: normal;
	color: #666;
	
}

table.contentpane ul li, div.nopad ul {

	list-style-image: url(../images/li.png);
}
input.button, .validate  {
	/*background: #8cccf8;
	border: solid 1px #6aaddc;
	padding: 5px 10px;*/
	font-size: 13px;
	color: #000;	
	cursor: pointer;
}

input.button:hover, .validate:hover  {
	
}
.search input.button {
	text-align: right;
}
#tabbar
{
width:100%;
height:30px;
background-color:#CC6600;
}
/********************************************************************************************************************************/


p {

	margin-top: 0;
	margin-bottom: 5px;
	text-align: justify;
}

.inputbox {
	border: 1px solid #ddd;
	padding: 2px;
}
.inputbox:hover {

}

#modlgn_remember  {
	border:0;
}

/*****************************************/
/*** Template specific layout elements ***/
/*****************************************/

.body_bg { 

background: #F3F5F6 url(../images/body_bg.jpg) top center repeat-x; 
/*   fondo background body ************************************************  */

}

#page_bg {

	padding: 0;
	margin: 0;
	background: transparent url(../images/page_bg.png) top center no-repeat;
}

div#wrapper {

	padding: 0 0px 0 0px;
	width: 100%;
	margin: 0 auto;
	
}

#header {

	height: 110px;
	margin: 0 auto;
	padding: 0 0 0 0;
	/*background: transparent url(../images/header.png) top center no-repeat;*/
	position: relative;
}

/*#header .inner_bg {
	width: 100px;
	height: 200px;
	padding: 0;
	margin: 0 auto;
	background: transparent url(../images/header_inner_.jpg) top center no-repeat;
}*/
/********************************************************************************************************************************/
#header #logo {
	width: 900px;
	height: 45px;
	overflow: hidden;
	position: absolute;
	bottom: 10px;
	left: 15px;
        
}

#header #logo { float: left; background: transparent url(../images/logo_r_bg.png) top right no-repeat; }
#header #logo  {
	float: left;
	height: 90px;
	line-height: 40px;
	padding: 0 0 0 0;
   background: transparent url(../images/logo2.png) top left no-repeat;
}


#logo a, #logo a:link, #logo a:hover {

	font-family: Verdana;
	font-size: 17px;
	padding: 0;
	margin: 0;
	letter-spacing: 1px;
	color:#FF0000;
	line-height:25px;
	text-align:justify;
	text-decoration: none;
	outline: none;



	
}/**/

#tabla_index{
border-bottom-color:#000000;}

#content {
	
	width: 100%;
	padding: 3px 0 0 0;
	
}

#wrapper_2 {

	padding: 0 0 0 0;
     
}

/*arriba del avatar donde dice hola*/
#mod_login_greeting{
margin-left:35px;}

#avatarsito{
margin-top:10px;
float:center;
}
/*mensaje en bandeja abajo de avatar dondice cuantos mensajes tienes*/
#mod_login_messagestext{
margin-left:30px;
float:right;
}
#mod_login_logoutform{
padding: none;
}
#topcol {

	background: transparent url(../images/topcol_bg.png) top center repeat-x;
}
/*espacio entre top menu y modulos o wrapper*/
#pillmenu {
height: 30px;
width:100%;

	
}

#pillmenu ul {
	margin: 0;
	padding: 0;
	list-style: none;
}

#pillmenu li {
	float: left;
	margin: 0;
	padding: 0;
	height: 32px;
	background: transparent url(../images/pillmenu_separator.png) top right no-repeat;
}

#pillmenu li:hover {

}

#pillmenu li a#active_menu-nav {
	color: #78C0F2;
}

#pillmenu li a {
	float: left;
	font-family: Tahoma, Verdana, Arial, sans-serif;
	font-size: 12px;
	line-height: 32px;
	padding: 0 12px 0 10px;
	color: #022B4D;
	text-decoration: none;
	font-weight: 700;
}

#pillmenu li a:hover, #pillmenu li.current a {
	color: #fff;
	text-decoration: none
}

#search {
	float: right;
	width: 180px;
	height: 32px;
	padding: 0px;
	overflow: hidden;	
}
#search .search {
	height: 32px;
	background: transparent url(../images/search_bg.png) center left no-repeat;
	
}
#search .search .inputbox {
	float: left;
	line-height: 16px;
	font-size: 11px;
	color: #999999;
	background: none;
	margin:	0;
	width: 148px;
	height: 17px;	
	padding: 8px 6px 0 6px;
	border: none;
	text-transform: capitalize;
}

#search .search .button {
	float: left;
	background: transparent url(../images/search_btn.png) top center no-repeat;
	border: 0;
	font-size: 11px;
	color: #999999;
	margin: 0 0 0 5px;
	padding: 7px 0;
	width: 40px;
	text-align: left;
	cursor: pointer;
}

#holder { background: transparent url(../images/holder_bg.png) top center repeat-x; }

#leftcolumn {
	margin: 0;
	width: 150px;
	float: left;
	padding: 0 0px 10px 5px;
	text-align: left;
}


/*modulo cblogin de ingreso*/
#mod_login_pmsimg{
margin-left:0px;	
}

div#maincolumn {

	width: 100%;
	min-width:10%;
	padding: 30px 0 0 0 ;

	
}

/**/div#maincolumn_full {
	
    width: 100%;
	min-width:620px;
	padding: 2px 0 0 0 ;
	       
}



#rightcolumn {
	margin: 0;
	width: 150px;
	float: right;
	padding: 0 5px 10px 0px;
	text-align: left;
}

div#pro-comp-container{

		padding:0px 0px 0px 20px;
		/*border-top:solid 1px #99cce6;*/
		/*background:transparent url(../images/pro-box-bg.png) repeat-x left top;*/
		clear:both;
		/*border-bottom:solid 1px #cccccc;*/
}
*/


/*style for process bar cover*/
/* casilla negra donde esta metido el porcentaje lo negro q lo rodea*/

div#box{
	width:100%;
	height:16px;
	color:#fff;
	text-align:right;
	padding:0px; 
	border:solid 1px #000;
	
	
}



div#bar{		
	background:transparent url(../images/pro-comp.png) repeat-x left top;
	line-height:8px;
	border:#000000
	border-right:solid 1px #000;
	color:#000;
	font-size:12px;
}

#pro-comp-container #box #bar{
	width:100%;
}

div#bar a{		
	color:#000;
	font-size:9px;
	line-height:12px;
}

div#bar a:hover{		
	color:#000;
	font-size:9px;
	line-height:12px;
}



div.pro-uname{
		float:left;
		margin-left:10px;
}



div.pro-comp-ness{
		padding:5px 0px 10px 0px;
		
}


/*los mas visitados*/
#foto_mod_adsmanager_ads {

		margin-left:25px;
		
}

#letras_mod_adsmanager_ads {
float:center;
margin-left:0px;
color: #022B4D;
font-weight:bold;
}

#nuevo_o_hot_mod_adsmanager_ads {
float:center;
margin-left:0px;
}

#categoria_mod_adsmanager_ads {
float:center;
margin-left:0px;
}



div.nopad {
	overflow: hidden;
	padding: 0;
	
}
div.nopad form#jForm p, div.nopad form#jForm  div#navigation {
	padding: 5px 0 0 10px;
}
div.nopad ul {
	clear: both;
}

td.middle_pad {
	width: 20px;
}

#banner_l {
	text-align: left;
	padding: 0 0 0 24px;
}

#footer {
	margin: 0 auto;
	margin-top: 50px;
	text-align: center;
	height: 50px;
	line-height: 50px;
	color: #fff;
	font-size: bold 12px Arial, Helvetica, sans-serif;
background: url(../images/bg_footer.jpg);
	background-repeat:repeat-x;
}

#footer p {
	text-align: right;
	padding: 10px 30px 0 0;
}

#footer a {
	color: #fff;
	text-decoration: none;
}

/*****************************************/
/*** Joomla! specific content elements ***/
/*****************************************/

div.offline {
	background: #fffebb;
	width: 100%;
	position: absolute;
	top: 0;
	left: 0;
	font-size: 1.2em;
	padding: 5px;
}

/* headers */
div.componentheading {
	height: 22px;
	padding: 8px 0 0 10px;
}
table.blog {
	
}
h1 {
	padding: 0;
	font-family: Tahoma, Arial, sans-serif;
	font-size: 1.3em;
	font-weight: bold;
	vertical-align: bottom;
	color: #333;
	text-align: left;
	width: 100%;
}

h2, .contentheading {
	padding: 0;
	font-family: Tahoma, Arial, sans-serif;
	font-size: 12px;
	vertical-align: middle;
	color: #000;
	text-align: left;
	font-weight: bold;
}

table.contentpaneopen h3 {
	margin-top: 25px;
}

h4 {
	font-family: Tahoma, Arial, sans-serif;
	color: #333;
}

h3, .componentheading, table.moduletable th, legend {
	margin: 0;
	font-family: Tahoma, Arial, sans-serif;
	font-size: 14px;
	text-align: left;
	color: #6aaddc;
	padding: 0;
}
/* small text */
.small {
	font-size: 10px;
	color: #C0C0C0;
	font-weight: normal;
	text-align: left;
}

.modifydate {
	height: 20px;
	vertical-align: bottom;
	font-size: 10px;
	color: #C0C0C0;
	font-weight: normal;
	text-align: right;
}

.createdate {
	height: 20px;
	vertical-align: top;
	font-size: 10px;
	color: #C0C0C0;
	font-weight: normal;
	vertical-align: top;
	padding-top: 0px;
}

a.readon {
	display: block;
	float: right;
	text-decoration: none;
	line-height: 14px;
	font-size: 10px;
	text-decoration: underline;
	color: #666;
}

a.readon:hover {
	color: #999999;
	text-decoration: none;
}

/* form validation */
.invalid { border-color: #ff0000; }
label.invalid { color: #ff0000; }


/** overlib **/

.ol-foreground {
	background-color: #f1f1f1;
	color: #333;
}

.ol-background {
	background-color: #f1f1f1;
	color: #333;
}

.ol-textfont {
	font-family: Tahoma, Arial, sans-serif;
	font-size: 10px;
}

.ol-captionfont {
	font-family: Tahoma, Arial, sans-serif;
	font-size: 12px;
	color: #f6f6f6;
	font-weight: bold;
}
.ol-captionfont a {
	background-color: #f1f1f1;
	color: #333;
	text-decoration: none;
	font-size: 12px;
}

.ol-closefont {}

/* menu links */
a.mainlevel:link, a.mainlevel:visited {
	padding-left: 5px;
	margin: 0;
	line-height: 18px;
	text-decoration: none;
	color: #6AADDC;
	font-weight: bold;
	font-size: 11px;
}

a.mainlevel:hover {

}

/* spacers */
span.article_separator {
	display: block;
	height: 20px;
}

.article_column {

}

.column_separator {
	
}

td.buttonheading {
	text-align: right;
	width: 0;
}

.clr {
	clear: both;
}

table.blog span.article_separator {
	display: block;
	height: 20px;
}



/* table of contents */
table.contenttoc {
  margin: 5px;
  border: 1px solid #ccc;
  padding: 5px;
}

table.contenttoc td {
  padding: 0 5px;
}


/* content tables */
td.sectiontableheader {
  color: #333;
  font-weight: bold;
  padding: 4px;
  border-bottom: 1px solid #666;
}

tr.sectiontableentry0 td,
tr.sectiontableentry1 td,
tr.sectiontableentry2 td {
  padding: 4px;
}

td.sectiontableentry0,
td.sectiontableentry1,
td.sectiontableentry2 {
  padding: 3px;
  color: #333;
  font-size: 10px;
}


/* content styles */
.contentpaneopen, table.contentpane {
	margin: 0;
	padding: 0;
}

table.contentpane td{
	text-align: left;
}

table.contentpane td.contentdescription {
	width: 100%;
}

table.contentpane  {
	text-align: left;
	float: left;
	width: 100%;
	margin: 8px;
}

table.contentpane ul li a .category {
	color: #FF8800;
}

table.contentpane ul li {
	color: #333;
}

table.contentpaneopen {
	margin: 2px 8px;
}

table.contentpaneopen li {
	margin-bottom: 5px;
}

table.contentpaneopen fieldset {
	border: 0;
	border-top: 1px solid #669933;
}

table.contentpaneopen h3 {
	margin-top: 25px;
}

table.contentpaneopen h4 {
	font-family: Tahoma, Arial, sans-serif;
	color: #669933;
}

.highlight {
	background-color: #fffebb;
}

/* module control elements */
table.user1user2 div.moduletable {
	margin-bottom: 0px;
}

div.moduletable, div.module {
  margin-bottom: 0px;
}

div.module_menu, div.module {
	margin: 0;
	padding: 0;
}

div.module_menu div, div.module {
	
}
/*sepracaion entre modulos de login y menu de usuario en el paddding*/
div.module_menu div div, div.module div div, div.module_text div div {
	margin: 0 0 -2px 0;
	padding: 1px;
	background: #dddddd;
}

div.module_menu div div div, div.module div div div, div.module_text div div div {
	margin: 0;
	background: #fff;
	padding: 1px;
	text-align: center;
}

div.module_menu div div div, div.module div div div{
	margin: 0;
	background: #fff;
	padding: 1px;
}

#rightcolumn div.module table.poll div {
	background: none;
}

div.module_menu div div div div, div.module div div div div {
	background: none;
	padding: 4px 0px;
	text-align: center;
}

div.module div div div form {
	padding: 4px 0 0 4px;
	width: 100%;
	margin: 0 auto;
	text-align: left;
}

#rightcolumn div.module div div div form {
	padding: 4px 0;
	width: 170px;
	margin: 0 auto;
	text-align: left;
}

div.module div div div form table td {
	text-align: left;
}

div.module div div div form ul{
	margin: 10px 0 0;
	padding: 0; 
	list-style: none;
}

div.module_menu ul {
	list-style: none;
	text-align: left;
	padding: 0;
}

div.module_menu ul li{
	margin: 0;
	padding: 0;
}

div.module_menu ul li a:link, div.module_menu ul li a:visited {
	/*background: transparent url(../images/blue/bullet2.jpg) top left no-repeat;*/
	padding: 2px 0 2px 20px;
	line-height: 50px;
	text-decoration: none;
	color: #999;
	font-size: 11px;
}

div.module_text div div div {
	text-align: left;
}

div.module_text div div div div  {
	margin:0 auto;
	
}

div.bannergroup_text {
	display:block;
	background: #fff;
	padding: 1px;
}
.bannerheader {
padding: 0 0 0 6px;
}

#maincol_news .latest, #maincol_news .popular {
	float: left;
	width: 255px;
	overflow: hidden;
	margin: 0 0 0 10px;
}

#maincol_news .latest { margin: 0; }

#maincol_news ul { margin: 0; padding: 0; list-style: none; }

#maincol_news ul li { margin: 0; padding: 0 10px; }

#maincol_news ul li a {
	line-height: 16px;
	padding: 0 0 0 10px;
	text-decoration: underline;
	font-size: 11px;
	background: url(../images/latest_row.png) center left no-repeat;
	margin: 0;
	height: 16px;
	color: #6aaddc;
}

#maincol_news ul li a:hover { text-decoration: none; }

#maincolumn_full #maincol_news { padding: 0 0 0 10px;}

#maincolumn_full #maincol_news .latest, #maincolumn_full #maincol_news .popular {
	width: 340px;
}

#leftcolumn div.module table ,#rightcolumn div.module table {
	
}

#leftcolumn div.module table.poll {

}

#leftcolumn div.module table.poll td {
	text-align: left;
}

/* LEFT COL H3  menu de usuario pestaña */
#leftcolumn h3, #rightcolumn h3, #content .module h3 {
font-family: Tahoma, Verdana, Arial, sans-serif;
	width: 126px;
	letter-spacing:1px;
	color: #F7F7F7;
	font-size: 11px;
	height: 20px;
	
	
	text-decoration: none;
	text-align: center;
	padding: 0 10px;
	background: url(../images/h3.png) top left repeat-x;
	
	line-height: 20px;
	margin: 0;
	
}
#content .module h3 {
	width: auto;
}

#content div.module div div div {
	text-align: left;	
}

#leftcolumn .moduletable_menu, #leftcolumn .moduletable, #leftcolumn .moduletable_text, #leftcolumn .c, 
#rightcolumn .moduletable_menu, #rightcolumn .moduletable, #rightcolumn .moduletable_text, #rightcolumn .c {
	margin: 0 0 16px 0;
	padding: 0 0 8px 0;
}

#leftcolumn ul.menu, #rightcolumn ul.menu {
	margin: 0 auto;
	padding: 5px 0 0 4px;
	list-style: none;
	width: 180px;
}

#leftcolumn ul.menu li, #rightcolumn ul.menu li {
	margin: 0;
	padding: 0;
}

#leftcolumn ul.menu li:hover, #rightcolumn ul.menu li:hover {

}

/*LEFT COL LINK*/
#leftcolumn ul.menu li a, #leftcolumn ul.menu li a:link,
#rightcolumn ul.menu li a, #rightcolumn ul.menu li a:link {
	line-height: 18px;
	padding: 0 0 0 10px;
	text-decoration: none;
	font-size: 11px;
	background: url(../images/menu_row.png) center left no-repeat;
	margin: 0;
	height: 28px;
	color: #999999;
}

#leftcolumn ul.menu li a:hover, #rightcolumn ul.menu li a:hover {
	color: #6aaddc;
	text-decoration: underline;
}

/*LEFT COL CURRENT LINK*/
#leftcolumn ul.menu li#current a, #leftcolumn ul.menu li#current a:link, 
#rightcolumn ul.menu li#current a, #rightcolumn ul.menu li#current a:link {
	line-height: 18px;
	padding: 0 0 0 10px;
	text-decoration: underline;
	color: #6aaddc;
	font-size: 11px;
	background: url(../images/menu_row.png) center left no-repeat;
	margin: 0;
	height: 18px;
}

#leftcolumn ul.menu li#current a:hover, #rightcolumn ul.menu li#current a:hover {
	color: #6aaddc;
	text-decoration: underline;
}

/*LEFT COL SUB LINK*/
#leftcolumn ul.menu li#current ul li a, #leftcolumn ul.menu li#current ul li a:link {
	text-decoration: none;
	color: #666;
	margin: 0 0 0 6px;
	font-size: 11px;
	background: url(../images/submenu_row.png) center left no-repeat;
	font-weight: normal;
	display: block;
	line-height: 18px;
	padding: 0 0 0 18px;
	border: none;
	height: 18px;
}

#leftcolumn ul.menu li ul li#current a, #leftcolumn ul.menu li ul li#current a:link, #leftcolumn ul.menu li ul li#current a:visited, #leftcolumn ul.menu li ul li#current a:hover {
	font-size: 11px;
	margin: 0 0 0 6px;
	padding: 0 0 0 18px;
	text-decoration: none;
	border: none;
	color: #333;
	background: url(../images/submenu_row.png) center left no-repeat;
	height: 18px;
	line-height: 18px;
}
/*SUBMENU POSITION*/
#leftcolumn ul.menu li#current ul {
	margin: 0;
	padding: 0;
}

#leftcolumn ul.menu li#current ul li {
	margin-top: 0;
	padding: 0;
}

/*CURRENT SUBMENU POSITION*/
#leftcolumn ul.menu li ul {
	margin: 0;
	padding: 0;
}

#leftcolumn ul.menu li#current ul li a:hover {
	color: #333;
}

#leftcolumn ul.menu li ul, #rightcolumn ul.menu li ul {
	list-style: none;
}

/* forms */
#leftcolumn .moduletable ul, #rightcolumn .moduletable ul {
	margin: 6px 0;
	padding: 0;
	list-style: none;
}

#leftcolumn .moduletable ul li, #rightcolumn .moduletable ul li {
	margin: 0;
	padding: 0 2px;
}

table.adminform textarea {
  width: 540px;
  height: 400px;
  font-size: 1em;
  color: #000099;
}

form#form-login fieldset { 
	border: 0 none; 
	margin: 0; 
	padding: 0;
}
form#form-login ul li{ 
	padding: 0; 
}

form#form-login ul li a {
	text-align: center;
	padding: 0;
	font-size: 10px;
}

/* thumbnails */
div.mosimage         {  margin: 5px; }
div.mosimage_caption {  font-size: .90em; color: #333; }

div.caption       { padding: 0 10px 0 10px; }
div.caption img   { border: 1px solid #CCC; }
div.caption p     { font-size: .90em; color: #333; text-align: center; }

/* Parameter Table */
table.paramlist {
	margin-top: 5px;
}

table.paramlist td.paramlist_key {
	width: 128px;
	text-align: left;
	height: 30px;
}

table.paramlist td.paramlist_value {
}

div.message {
	font-family: Tahoma, Arial, sans-serif;
	font-weight: bold;
	font-size : 14px;
	color : #c30;
	text-align: center;
	width: auto;
	background-color: #f9f9f9;
	border: solid 1px #d5d5d5;
	margin: 3px 0px 10px;
	padding: 3px 20px;
}

/* Banners module */

/* Default skyscraper style */
.bannergroup {
}

.banneritem {
}

/* Text advert style */

.banneritem_text {
	padding: 4px 8px;
	font-size: 11px;
}

.bannerfooter_text {
	padding: 8px 20px;
	font-size: 11px;
	text-align: right;
}

/* System Messages */


/* see system general.css */

.pagination span { padding: 2px; }
.pagination a    { padding: 2px; }

/* Polls */
.pollstableborder td {
	text-align: left;
}

/* Frontend Editing*/
fieldset {
	border: 1px solid #ccc;
	margin-top: 15px;
	padding: 15px;
}

legend {
	margin: 0;
	padding: 0 10px;
}

td.key {
	border-bottom:1px solid #eee;
	color: #333;
}

/* Tooltips */
.tool-tip {
	float: left;
	background: #ffc;
	border: 1px solid #D4D5AA;
	padding: 5px;
	max-width: 200px;
}

.tool-title {
	padding: 0;
	margin: 0;
	font-size: 100%;
	font-weight: bold;
	margin-top: -15px;
	padding-top: 15px;
	padding-bottom: 5px;
	background: url(../../system/images/selector-arrow.png) no-repeat;
}

.tool-text {
	font-size: 100%;
	margin: 0;
}

/* System Standard Messages */
#system-message dd.message ul { 
     background: transparent;
     padding: 3px;
     margin: 0;
}

/* System Error Messages */
#system-message dd.error ul { 
     color: #999; 
     background: none; 
     border-top: 1px solid #829300; 
     border-bottom: 1px solid #829300;
     padding: 0;
     margin: 0;
}

/* System Notice Messages */
#system-message dd.notice ul { 
     color: #ECA5A7; 
     background: none; 
     border-top: 1px solid #829300; 
     border-bottom: 1px solid #829300;
     padding: 3px;
     margin: 0 0 5px 0;
}

#system-message dd {
     text-indent: 0;
}

#system-message dd ul {
    list-style-type: none;
    color: #444; 
    background: #F2FBEC; 
	border: solid 1px #9CDD6C;
}

#system-message {
     margin: 5px auto;
	 text-align: center;
	 width: 98%;
}



/* ****************************************************************************** */
/* blue */
input, button {
	font-family: Tahoma, Verdana, Arial, sans-serif;	
}
/* blue */
input[type="checkbox"], input[type="radio"]{
   background: transparent;
   border: none;
}

/* -------------------------- */
a.footer123:link, a.footer123:visited {
	color: #fefefe;
	font-family: Tahoma, Arial, sans-serif;
	text-decoration: none;
}
a.footer123:hover {
	color: #fefefe;
	font-family: Tahoma, Arial, sans-serif;
	text-decoration: none;
}
#f123 {
	text-align: right;
	width: 100%;
	margin: 0 auto;
	font-family: Tahoma, Arial, sans-serif;
}
.f123 {
	text-align: right;
	font-family: Tahoma, Arial, sans-serif;
	text-decoration: none;
}
.f123_bg {
	background:url(../images/123_bg.png);
	width:134px;
	height:30px;
	text-align:center;
	padding: 0 3px;
}
.f123_1 {
	display: block;
	font-size: 10px;
	font-family: Tahoma, Arial, sans-serif;
	color: #666;
	text-align: left;
	padding: 0 0 2px 4px;
	
}


a.link_123:link, a.link_123:visited {
	font-size: 15px;
	font-family: Tahoma, Verdana,Arial,Helvetica,sans-serif;
	color: #797979;
	text-decoration:none;
	font-weight: 700;
}
a.link_123:hover {
	font-size: 15px;
	font-family: Tahoma, Verdana,Arial,Helvetica,sans-serif;
	color: #797979;
	text-decoration:none;
	font-weight: 700;
}


/*#user8}
{
height:0px;
width:100%;;
margin:3px 0 3px 0px;

padding-top:3px;

background-color: #339966;
background:url(../images/buscar.jpg) repeat-x;
color:#000;
width:100%;
background:#6f6f6f url(../images/banner_ejem.png);
*/

#banner
{

width:100%;


height:200px;
margin-left:420px;
margin-top:-7px;
/*padding: 2px 2px 2px 2px;
border:groove;*/
}
#topmenu
{
height:30px;	
width:100px;
position: absolute;
}
#user3
{
background-color:#666699;
margin-left:2000px;
height:30px;

}
#tope
{

width:100%;
height:40px;
margin-bottom:0;

}
#lismenu
{

margin:0;
width:900px;
height:40px;
}

#buscar
{

margin-left:500px;
margin-top:-40px;
width:100%;
} 
#cuad_1, div.cuad_2, .cuad_3, .cuad_4
{
width:300px;
height:200px;
}

/*   el estilo que estaba jodiendo en el módulo adsmanager search ************************/
.Estilo1 {
	color: #000;
	font-weight: bold;
	margin-left:10px;
}


</style>


<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-18338300-1']);
  _gaq.push(['_setDomainName', '.tucurso.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body class="body_bg">
	<div id="page_bg">
		<div id="wrapper">
			
			<div id="header">
			
					<div id="logo">
						 <div id="banner">
				
                    		</div>
					</div>
				
			</div>
			
			<div id="wrapper_2">
				
				<div id="topcol">
					<!-- Pillmenu -->
					<div id="pillmenu">
						<!-- User Help: Center menu replace float: left; or float: right; with : margin: 0 auto;  -->
						<div id="tope" align="center">
                              <table valign="top" width="850px"  cellspacing="0" cellpadding="0"  style="float: center;">
                            <tr >						
                              <td valign="top">  </td>
                              <td valign="middle">  </td>
                              <td valign="middle"></td>
           				    </tr>                        
                            </table>
						
					</div>
                    </div>
					<!-- /Pillmenu -->
				
					<div class="clr"></div>
				</div>				
				<div id="holder">
                <div id="content">
				<table cellspacing="0" cellpadding="0" width="100%" border="0">
<tr>  
<td valign="top" width="15%">
			
							<div id="leftcolumn">	
							
					
					  </div>
										
            </td><td align="center" valign="top">
            <div align="right">
                   
                    	  </div>
		
						
							<div id="maincolumn_full">
					
							<div id="maincol_news">
								<div class="latest">
									<jdoc:include type="modules" name="user1" style="rounded" />
								</div>
								<div class="popular">
									<jdoc:include type="modules" name="user2" style="rounded" />
								</div>
								<div class="clr"></div>
							</div>
								<div class="nopad">			
								
								
								</div>
							</div></td>
							 <td valign="top" width="15%" align="right">
						
							<div id="rightcolumn">
														
							</div>
				
						<div class="clr"></div>
                      </td> 
					           
</tr>
                  
</table>		 	   
					<div class="clr"></div>
		</div>
			</div>
			
			<!--footer start-->
		<div id="footer">
			<div id="f123">
				<div>
					<div style="text-align: center; padding: 0 0 0 0;">
						
						
						
	
					
					</div> 
					
				</div>
				
				
			</div>
		</div>
		<!--footer end-->	
			
		</div>	
	</div>
	<jdoc:include type="modules" name="debug" />
</body>
</html>