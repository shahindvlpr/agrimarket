<?php
	if(isset($_SESSION['logged_in']) AND $_SESSION['logged_in'] == 1)
	{
		$loginProfile = "My Profile: ". $_SESSION['Username'];
		$logo = "glyphicon glyphicon-user";
		if($_SESSION['Category']!= 1)
		{
			$link = "profile.php";
		}
		else {
				$link = "../profileView.php";
		}
	}
	else
	{
		$loginProfile = "Login";
		$link = "../index.php";
		$logo = "glyphicon glyphicon-log-in";
	}
?>

<!DOCTYPE html>
<head>
<meta charset="UTF-8">
		<title>AgriMarket</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap\js\bootstrap.min.js"></script>
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="login.css"/>
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
		</noscript>
		<link rel="stylesheet" href="indexfooter.css" />
<style>
.dropbtn {
  background-color: transparent;
  color: #000;
  /* padding: 16px; */
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #02020270;
    min-width: 220px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
	margin-top: -1px;
}

.dropdown-content a {
  color: black;
  /* padding: 12px 16px; */
  text-decoration: none;
  display: inline-block;
  width: 100%;
  margin-left: 30px;
}

.dropdown-content a:hover {background-color: transparent}

.dropdown:hover .dropdown-content {
  display: block;
  float: left;
}

.dropdown:hover .dropbtn {
  background-color: transparent;
}







@charset "UTF-8";
@import url(font-awesome.min.css);
@import url("http://fonts.googleapis.com/css?family=Lato:300,400");


/* Basic */

body {
	background: #fff;
}

body, input, select, textarea {
	color: #444;
	font-family: "Lato", Helvetica, sans-serif;
	font-size: 15pt;
	font-weight: 300;
	line-height: 1.65em;
}

a {
	color: #4dac71;
	text-decoration: underline;
}

	a:hover {
		text-decoration: none;
	}

strong, b {
	color: #666;
	font-weight: 400;
}

em, i {
	font-style: italic;
}

p {
	margin: 0 0 2em 0;
}

h1, h2, h3, h4, h5, h6 {
	color: #666;
	font-weight: 300;
	line-height: 1em;
	margin: 0 0 1em 0;
}

	h1 a, h2 a, h3 a, h4 a, h5 a, h6 a {
		color: inherit;
		text-decoration: none;
	}

h2 {
	font-size: 1.75em;
	line-height: 1.5em;
}

h3 {
	font-size: 1.35em;
	line-height: 1.5em;
}

h4 {
	font-size: 1.1em;
	line-height: 1.5em;
}

h5 {
	font-size: 0.9em;
	line-height: 1.5em;
}

h6 {
	font-size: 0.7em;
	line-height: 1.5em;
}

sub {
	font-size: 0.8em;
	position: relative;
	top: 0.5em;
}

sup {
	font-size: 0.8em;
	position: relative;
	top: -0.5em;
}

hr {
	border: 0;
	border-bottom: medium 1px rgba(144, 144, 144, 0.25);
	margin: 2em 0;
}

	hr.major {
		margin: 3em 0;
	}

	blockquote {
		border-left: solid 4px rgba(144, 144, 144, 0.25);
		font-style: italic;
	}

code {
	background: rgba(144, 144, 144, 0.075);
	border-radius: 4px;
	border: solid 1px rgba(144, 144, 144, 0.25);
	font-family: "Courier New", monospace;
	font-size: 0.9em;
	margin: 0 0.25em;
	padding: 0.25em 0.65em;
}

pre {
	-webkit-overflow-scrolling: touch;
	font-family: "Courier New", monospace;
	font-size: 0.9em;
	margin: 0 0 2em 0;
}

	pre code {
		display: block;
		line-height: 1.75em;
		padding: 1em 1.5em;
		overflow-x: auto;
	}

.align-left {
	text-align: left;
}

.align-center {
	text-align: center;
}

.align-right {
	text-align: right;
}

/* Section/Article */

section.special, article.special {
	text-align: center;
}

header p {
	position: relative;
	margin: 0 0 1.5em 0;
}

header h2 + p {
	font-size: 1.25em;
	margin-top: -1em;
	line-height: 1.5em;
}

header h3 + p {
	font-size: 1.1em;
	margin-top: -0.8em;
	line-height: 1.5em;
}

header h4 + p,
header h5 + p,
header h6 + p {
	font-size: 0.9em;
	margin-top: -0.6em;
	line-height: 1.5em;
}

header.major {
	text-align: center;
	margin-bottom: 3em;
}

	header.major h2 {
		font-size: 3em;
	}

	header.major p {
		border-top: medium double rgba(144, 144, 144, 0.25);
		display: inline-block;
		padding: 2em 2em 0 2em;
	}

/* Form */

form {
	margin: 0 0 2em 0;
}

label {
	color: #666;
	display: block;
	font-size: 0.9em;
	font-weight: 400;
	margin: 0 0 1em 0;
}

input[type="text"],
input[type="password"],
input[type="email"],
select,
textarea {
	-moz-appearance: none;
	-webkit-appearance: none;
	-o-appearance: none;
	-ms-appearance: none;
	appearance: none;
	background: rgba(144, 144, 144, 0.075);
	border-radius: 4px;
	border: none;
	border: solid 1px rgba(144, 144, 144, 0.25);
	color: inherit;
	display: block;
	outline: 0;
	padding: 0 1em;
	text-decoration: none;
	width: 100%;
}

input[type="text"]:invalid,
input[type="password"]:invalid,
input[type="email"]:invalid,
select:invalid,
textarea:invalid {
	box-shadow: none;
}

input[type="text"]:focus,
input[type="password"]:focus,
input[type="email"]:focus,
select:focus,
textarea:focus {
	border-color: #4dac71;
	box-shadow: 0 0 0 1px #4dac71;
}

.select-wrapper {
	text-decoration: none;
	display: block;
	position: relative;
}

.select-wrapper:before {
	content: "";
	-moz-osx-font-smoothing: grayscale;
	-webkit-font-smoothing: antialiased;
	font-family: FontAwesome;
	font-style: normal;
	font-weight: normal;
	text-transform: none !important;
}

.select-wrapper:before {
	color: rgba(144, 144, 144, 0.25);
	display: block;
	height: 2.75em;
	line-height: 2.75em;
	pointer-events: none;
	position: absolute;
	right: 0;
	text-align: center;
	top: 0;
	width: 2.75em;
}

.select-wrapper select::-ms-expand {
	display: none;
}

input[type="text"],
input[type="password"],
input[type="email"],
select {
	height: 2.75em;
}

textarea {
	padding: 0.75em 1em;
}

input[type="checkbox"],
input[type="radio"] {
	-moz-appearance: none;
	-webkit-appearance: none;
	-o-appearance: none;
	-ms-appearance: none;
	appearance: none;
	display: block;
	float: left;
	margin-right: -2em;
	opacity: 0;
	width: 1em;
	z-index: -1;
}

input[type="checkbox"] + label,
input[type="radio"] + label {
	text-decoration: none;
	color: #444;
	cursor: pointer;
	display: inline-block;
	font-size: 1em;
	font-weight: 300;
	padding-left: 2.4em;
	padding-right: 0.75em;
	position: relative;
}

input[type="checkbox"] + label:before,
input[type="radio"] + label:before {
	-moz-osx-font-smoothing: grayscale;
	-webkit-font-smoothing: antialiased;
	font-family: FontAwesome;
	font-style: normal;
	font-weight: normal;
	text-transform: none !important;
}

input[type="checkbox"] + label:before,
input[type="radio"] + label:before {
	background: rgba(144, 144, 144, 0.075);
	border-radius: 4px;
	border: solid 1px rgba(144, 144, 144, 0.25);
	content: '';
	display: inline-block;
	height: 1.65em;
	left: 0;
	line-height: 1.58125em;
	position: absolute;
	text-align: center;
	top: 0;
	width: 1.65em;
}

input[type="checkbox"]:checked + label:before,
input[type="radio"]:checked + label:before {
	background: #3ba666;
	border-color: #3ba666;
	color: #ffffff;
	content: '\f00c';
}

input[type="checkbox"]:focus + label:before,
input[type="radio"]:focus + label:before {
	border-color: #4dac71;
	box-shadow: 0 0 0 1px #4dac71;
}

input[type="checkbox"] + label:before {
	border-radius: 4px;
}

input[type="radio"] + label:before {
	border-radius: 100%;
}

::-webkit-input-placeholder {
	color: #888 !important;
	opacity: 1.0;
}

:-moz-placeholder {
	color: #888 !important;
	opacity: 1.0;
}

::-moz-placeholder {
	color: #888 !important;
	opacity: 1.0;
}

:-ms-input-placeholder {
	color: #888 !important;
	opacity: 1.0;
}

.formerize-placeholder {
	color: #888 !important;
	opacity: 1.0;
}

/* Box */

.box {
	border-radius: 4px;
	border: solid 1px rgba(144, 144, 144, 0.25);
	margin-bottom: 2em;
	padding: 1.5em;
}

	.box > :last-child,
	.box > :last-child > :last-child,
	.box > :last-child > :last-child > :last-child {
		margin-bottom: 0;
	}

	.box.alt {
		border: 0;
		border-radius: 0;
		padding: 0;
	}

/* Icon */

.icon {
	text-decoration: none;
	border-bottom: none;
	position: relative;
}

.icon:before {
	-moz-osx-font-smoothing: grayscale;
	-webkit-font-smoothing: antialiased;
	font-family: FontAwesome;
	font-style: normal;
	font-weight: normal;
	text-transform: none !important;
}

.icon > .label {
	display: none;
}

.icon.rounded {
	border-radius: 100%;
	border: 1px solid #4dac71;
	display: inline-block;
	height: 2em;
	line-height: 2em;
	text-align: center;
	width: 2em;
}

.icon.rounded.big {
	font-size: 3.5em;
}

/* Image */

.image {
	border-radius: 4px;
	border: 0;
	display: inline-block;
	position: relative;
}

.image img {
	border-radius: 4px;
	display: block;
}

.image.left {
	float: left;
	padding: 0 1.5em 1em 0;
	top: 0.25em;
}

.image.right {
	float: right;
	padding: 0 0 1em 1.5em;
	top: 0.25em;
}

.image.left, .image.right {
	max-width: 40%;
}

.image.left img, .image.right img {
	width: 100%;
}

.image.fit {
    display: block;
    margin: 0 0 2em 0;
    width: 90%;
    border-radius: 0;
    margin: 0 auto;
    height: 310px;
    margin-bottom: 30px;
}
.image.fit img {
	width: 100%;
}

/* List */

ol {
	list-style: decimal;
	margin: 0 0 2em 0;
	padding-left: 1.25em;
}

ol li {
	padding-left: 0.25em;
}

ul {
	list-style: disc;
	margin: 0 0 2em 0;
	padding-left: 1em;
}

ul li {
	padding-left: 0.5em;
}

ul.alt {
	list-style: none;
	padding-left: 0;
}

ul.alt li {
	border-top: solid 1px rgba(144, 144, 144, 0.25);
	padding: 0.8em 0;
}

ul.alt li:first-child {
	border-top: 0;
	padding-top: 0;
}

ul.icons {
	cursor: default;
	list-style: none;
	padding-left: 0;
}

ul.icons li {
	display: inline-block;
	padding: 0 1em 0 0;
}

ul.icons li:last-child {
	padding-right: 0;
}

ul.actions {
	cursor: default;
	list-style: none;
	padding-left: 0;
}

ul.actions li {
	display: inline-block;
	padding: 0 1em 0 0;
	vertical-align: middle;
}

ul.actions li:last-child {
	padding-right: 0;
}

ul.actions.small li {
	padding: 0 0.5em 0 0;
}

ul.actions.vertical li {
	display: block;
	padding: 1em 0 0 0;
}

ul.actions.vertical li:first-child {
	padding-top: 0;
}

ul.actions.vertical li > * {
	margin-bottom: 0;
}

ul.actions.vertical.small li {
	padding: 0.5em 0 0 0;
}

	ul.actions.vertical.small li:first-child {
		padding-top: 0;
	}

ul.actions.fit {
	display: table;
	margin-left: -1em;
	padding: 0;
	table-layout: fixed;
	width: calc(100% + 1em);
}

ul.actions.fit li {
	display: table-cell;
	padding: 0 0 0 1em;
}

	ul.actions.fit li > * {
		margin-bottom: 0;
	}

ul.actions.fit.small {
	margin-left: -0.5em;
	width: calc(100% + 0.5em);
}

ul.actions.fit.small li {
	padding: 0 0 0 0.5em;
}

ul.tabular {
	list-style: outside none none;
	padding: 0px;
}

ul.tabular li {
	border-top: solid 1px rgba(144, 144, 144, 0.25);
	line-height: 1.75em;
	margin: 1.5em 0px 0px;
	padding-left: 7em;
	padding-top: 12px;
	position: relative;
}

	ul.tabular li:first-child {
		border-top: 0;
		margin-top: 0;
	}

	ul.tabular li h3 {
		left: 0px;
		position: absolute;
		text-align: center;
		top: 12px;
		vertical-align: top;
		width: 1em;
	}

dl {
	margin: 0 0 2em 0;
}

/* Table */

.table-wrapper {
	-webkit-overflow-scrolling: touch;
	overflow-x: auto;
}

table {
	margin: 0 0 2em 0;
	width: 100%;
}

table tbody tr {
	border: solid 1px rgba(144, 144, 144, 0.25);
	border-left: 0;
	border-right: 0;
}

	table tbody tr:nth-child(2n + 1) {
		background-color: rgba(144, 144, 144, 0.075);
	}

table td {
	padding: 0.75em 0.75em;
}

table th {
	color: #666;
	font-size: 0.9em;
	font-weight: 400;
	padding: 0 0.75em 0.75em 0.75em;
	text-align: left;
}

table thead {
	border-bottom: solid 2px rgba(144, 144, 144, 0.25);
}

table tfoot {
	border-top: solid 2px rgba(144, 144, 144, 0.25);
}

table.alt {
	border-collapse: separate;
}

table.alt tbody tr td {
	border: solid 1px rgba(144, 144, 144, 0.25);
	border-left-width: 0;
	border-top-width: 0;
}

table.alt tbody tr td:first-child {
	border-left-width: 1px;
}

table.alt tbody tr:first-child td {
	border-top-width: 1px;
}

table.alt thead {
	border-bottom: 0;
}

table.alt tfoot {
	border-top: 0;
}

/* Button */

input[type="submit"],
input[type="reset"],
input[type="button"],
.button {
	-moz-appearance: none;
	-webkit-appearance: none;
	-o-appearance: none;
	-ms-appearance: none;
	appearance: none;
	-moz-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
	-webkit-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
	-o-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
	-ms-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
	transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
	background-color: #3ba666;
	border-radius: 4px;
	border: 0;
	color: #ffffff !important;
	cursor: pointer;
	display: inline-block;
	font-weight: 400;
	height: 2.85em;
	line-height: 2.8em;
	padding: 0 2em;
	text-align: center;
	text-decoration: none;
	white-space: nowrap;
}

input[type="submit"]:hover,
input[type="reset"]:hover,
input[type="button"]:hover,
.button:hover {
	background-color: #42b972;
}

input[type="submit"]:active,
input[type="reset"]:active,
input[type="button"]:active,
.button:active {
	background-color: #34935a;
}

input[type="submit"].icon,
input[type="reset"].icon,
input[type="button"].icon,
.button.icon {
	padding-left: 1.35em;
}

input[type="submit"].icon:before,
input[type="reset"].icon:before,
input[type="button"].icon:before,
.button.icon:before {
	margin-right: 0.5em;
}

input[type="submit"].fit,
input[type="reset"].fit,
input[type="button"].fit,
.button.fit {
display: block;
margin: 0 0 1em 0;
width: 100%;
}

input[type="submit"].small,
input[type="reset"].small,
input[type="button"].small,
.button.small {
font-size: 0.8em;
}

input[type="submit"].big,
input[type="reset"].big,
input[type="button"].big,
.button.big {
font-size: 1.35em;
}

input[type="submit"].alt,
input[type="reset"].alt,
input[type="button"].alt,
.button.alt {
background-color: transparent;
box-shadow: inset 0 0 0 2px rgba(144, 144, 144, 0.25);
color: #666 !important;
}

input[type="submit"].alt:hover,
input[type="reset"].alt:hover,
input[type="button"].alt:hover,
.button.alt:hover {
	background-color: rgba(144, 144, 144, 0.075);
}

input[type="submit"].alt:active,
input[type="reset"].alt:active,
input[type="button"].alt:active,
.button.alt:active {
	background-color: rgba(144, 144, 144, 0.2);
}

input[type="submit"].alt.icon:before,
input[type="reset"].alt.icon:before,
input[type="button"].alt.icon:before,
.button.alt.icon:before {
	color: #888;
}

input[type="submit"].special,
input[type="reset"].special,
input[type="button"].special,
.button.special {
background-color: #4dac71;
color: #ffffff !important;
}

input[type="submit"].special:hover,
input[type="reset"].special:hover,
input[type="button"].special:hover,
.button.special:hover {
	background-color: #5cb67e;
}

input[type="submit"].special:active,
input[type="reset"].special:active,
input[type="button"].special:active,
.button.special:active {
	background-color: #459a65;
}

input[type="submit"].disabled, input[type="submit"]:disabled,
input[type="reset"].disabled,
input[type="reset"]:disabled,
input[type="button"].disabled,
input[type="button"]:disabled,
.button.disabled,
.button:disabled {
	background-color: #444 !important;
	box-shadow: inset 0 -0.15em 0 0 rgba(0, 0, 0, 0.15);
	color: #fff !important;
	cursor: default;
	opacity: 0.25;
}

/* Header */

body.landing #header {
	background-color: transparent;
	left: 0;
	position: absolute;
	top: 0;
}

#header {
	background-color: #000;
	color: #ffffff;
	cursor: default;
	height: 4.75em;
	line-height: 4.75em;
	width: 100%;
	z-index: 10000;
}

#header h1 {
	color: #ffffff;
	height: inherit;
	left: 2.5em;
	line-height: inherit;
	margin: 0;
	padding: 0;
	position: absolute;
	top: 0;
}

	#header h1 a {
		font-size: 1.25em;
	}

#header nav {
	height: inherit;
	line-height: inherit;
	position: absolute;
	right: 2.75em;
	top: 0;
	vertical-align: middle;
}

#header nav > ul {
	list-style: none;
	margin: 0;
	padding-left: 0;
}

	#header nav > ul > li {
		border-radius: 4px;
		display: inline-block;
		margin-left: 1.5em;
		padding-left: 0;
	}

#header nav > ul > li a {
	-moz-transition: color 0.2s ease-in-out;
	-webkit-transition: color 0.2s ease-in-out;
	-o-transition: color 0.2s ease-in-out;
	-ms-transition: color 0.2s ease-in-out;
	transition: color 0.2s ease-in-out;
	color: #cee8d8;
	display: inline-block;
	text-decoration: none;
}

	#header nav > ul > li a:hover {
		color: #ffffff;
	}

#header nav > ul > li:first-child {
	margin-left: 0;
}

#header nav > ul > li .button {
	height: 2.25em;
	line-height: 2.25em;
	margin-bottom: 0;
	padding: 0 1em;
	position: relative;
	top: -0.075em;
	vertical-align: middle;
}

#header .container {
	position: relative;
}

#header .container h1 {
	left: 0;
}

#header .container nav {
	right: 0;
}

/* Banner */

#banner {
	background-image:  url('../images/banner_pic.png') !important;
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
	color: #ffffff;
	padding: 16em 0em 14em;
	text-align: center;
	position: relative;
}

#banner h2 {
	color: #ffffff;
	font-size: 3em;
	line-height: 1em;
	margin: 0 0 0.5em 0;
	padding: 0;
}

#banner p {
	font-size: 1.5em;
	margin: 1.5em 0 0 0;
}

#banner .actions {
	margin: 3em 0 0 0;
}

#banner .button {
	background-color: transparent;
	border: 1px solid #ffffff;
	font-weight: 300;
}

#banner .button:hover {
	background-color: rgba(255, 255, 255, 0.2);
}

/* Wrapper */

.wrapper {
	padding: 6em 0em 4em;
}



.wrapper.style1 header {
	margin-bottom: 4em;
}

.wrapper.style1 h2 {
	color: #ffffff;
}

.wrapper.style1 .icon.big {
	border-color: #ffffff;
	margin-bottom: 0.5em;
}

.wrapper.style2 .title, .wrapper.style2 header {
border-bottom: medium double rgba(144, 144, 144, 0.25);
}

.wrapper.style2 header {
margin-bottom: 4em;
}

.wrapper.style2 .feature {
margin: 0 0 2em 0;
}



/* logo-area-start */
img.logoimg {
    width: 250px;
    margin-left: 30px;
}

p.categoryp {
    margin-left: 70px;
    margin-top: 10px;
}

.row.uniform.unique {
    width: 50%;
}



.row.uniform.\35 0\25>* {
    padding: 1em 0 0 1em;
    margin-left: 45px;
}
h3.login-item {
    margin-left: 45px;
}
.row.uniform.login-content {
    text-align: center;
    margin-left: 115px;
}

.\37 u.\31 2u\$\(small\).login-submit {
    padding-top: 0px;
    padding-left: 0;
}

.row.uniform.sign-up {
    margin-left: 10px;
}
.row.uniform.signup-add {
    margin-left: 10px;
}

.\33 u.\31 2u\$\(small\).flexitem {
    margin-top: 0;
    padding-left: 0;
	margin-left: -55px;
}
p.categoryp.signup {
    padding-left: 125px;
}
h3.signup {
    margin-left: 45px;
}
.\33 u.\31 2u\$\(small\).signup-btn {
    padding-top: 0;
}
.\33 u.\31 2u\$\(small\).flexitem.login-cat {
    margin-left: 20px;
}

#header nav > ul li a:hover {
    transition: .6s all;
    color: blue;
}
.col-md-4>section {
    border: 4px solid #44c90d !important;
    margin-bottom: 30px;
    border-radius: 8px;
    background-color: #ffffff26 !important;
}
blockquote{
	/* border-bottom: medium double rgba(144, 144, 144, 0.25); */
	color: #fff;
}

.col-md-4>section>strong h2 {
    color: #fff !important;
}

section.\34 u.\31 2u\$\(small\).width_100\% {
    width: 50%;
	margin: 0 auto;
}


.container.text-center img {
    width: 70px;
}


.copyRight-area p {
    margin-bottom: 0;
    text-align: center;
    color: #fff;
	padding-top: 10px;
	font-size: 13px;
}
div#skel-layers-wrapper {
    color: #fff;
}
p.p_text {
    font-size: 20px;
    padding-top: 20px;
    color: #fff;
    font-weight: 400;
}
.container h1 {
    color: #fff;
}

.sub-container h3 {
    color: #000 !important;
    float: left;
    font-size: 35px;
    margin-bottom: 0;
    font-weight: 500;
}


.\36 u.\31 2u\$\(xsmall\) >input {
    overflow: hidden !important;
    width: 93%;
    margin-bottom: 20px;
}

.\34 u.\31 2u\$\(xsmall\) input {
    width: 93%;
    margin-bottom: 20px;
}


</style>
</head>
			<header id="header">
				<h1><a href="index.php">AgriMarket</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="../index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
						<li><a href="../myCart.php"><span class="glyphicon glyphicon-shopping-cart"> MyCart</a></li>
						<li><a href="../market.php"><span class="glyphicon glyphicon-grain"> Digital-Market</a></li>
						<li><a href="../blogView.php"><span class="glyphicon glyphicon-comment"> BLOG</a></li>
						<li>
							<div class="dropdown">
								<a class="dropbtn" href="<?= $link; ?>"><span class="<?php echo $logo; ?>"></span><?php echo" ". $loginProfile; ?></a>
								<div class="dropdown-content">
									<a href="../profileEdit.php">Profile Edit</a>
									<a href="#">Password Change</a>
									<a href="../uploadProduct.php">Upload Product</a>
									<a href="../Login/logout.php">Logout</a>
								</div>
							</div>
						</li>
					</ul>
				</nav>


			</header>


	</body>
</html>
