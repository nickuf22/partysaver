<style>
* {
	margin: 0;
	padding: 0;
	border:  0;
}
article, aside, details, figcaption, figure, footer, header, hgroup, nav, section {
display:block;
}
body {
    background-color: white;
    background-position: center;
    background-attachment: fixed;
    /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#45484d+0,000000+100;Black+3D+%231 */
    background: #45484d; /* Old browsers */
    background: -moz-linear-gradient(top,  #45484d 0%, #000000 100%); /* FF3.6-15 */
    background: -webkit-linear-gradient(top,  #45484d 0%,#000000 100%); /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(to bottom,  #45484d 0%,#000000 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#45484d', endColorstr='#000000',GradientType=0 ); /* IE6-9 */
}

header {
    background-image:url(images/banner.JPG);
    background-position: 50% 50% !important;
    background-size: 100%;
    background-repeat: no-repeat;
    
}
header h1 {
    color: white;
    font-family: 'opensans-extrabold';
    font-size: 2.5rem;
    padding: 10%;
    text-align: center;
     
}
nav {
    background-color: black;
    text-align: right;
    position: fixed;
    width: 100%;
    left: 0;
    height: 30px;
    font-family: 'opensans-extrabold';
    font-size: 1.25rem;
}
nav ul {
    list-style-type: none;
    margin-left: 0;
}
nav ul li {
    display: inline;
    padding-left: 1%;
    padding-right: 1%;
}
nav ul li a:link, nav ul li a:visited {
    padding: 1%;
    color: white;
    text-decoration: none;
    font-weight: bold;
}
nav ul li a:hover {
    padding: 1%;
    color:white; 
}
nav ul li a:active {
    color: white;
    padding: 1%;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: black;
}
li a, .skills {
    display: inline-block;
    color: white;
    text-align: center;
    text-decoration: none;
}

li a:hover, .skills:hover .skills {
    background-color: #d7aed1;
}
li.skills {
    display: inline-block;
}

.skills-content {
    display: none;
    position: absolute;
    background-color: black;
    text-align: left;
}

.skills-content a {
    color: black;
    text-decoration: none;
    display: block;
    text-align: left;
}

.skills-content a:hover {background-color: #a9dfee}

.skills:hover .skills-content {
    display: block;
}

h1 {
    font-family: 'opensans-extrabold';
    color: white;
    font-size: 4rem;
    text-align: center;
}
h2 {
    font-family: 'Open Sans', sans-serif;
    color: white;
    text-align: center;
}
h3 {
    font-family: 'Open Sans', sans-serif;
    color: white;
    text-align: center;
}
footer {
    width: 100%;
    background-color: black;
    clear: both;
}
footer p {
    color: white;
    font-size: .875rem;
    display: inline;
    padding: 1%;
}
.alignLeft {
    float: left;
}
.alignRight {
    float: right;
}
body, input, select, option, p {
	font-family: 'Libre Franklin', sans-serif;
}
article {
	width: 70%;
	margin: 2px auto;
	padding: 20px;
	background-color: white;
	border-radius: 20px;
}
fieldset {
	border: 2px solid #b8b8b8;
	border-radius: 20px;
	padding: 25px;
}

legend {
	padding: 0 5px;
	color: #a9dfee;
	font-weight: bold;
}

.inline, input[type="checkbox"] {
	display: inline;
}

.label {
	margin-top: 10px;
	margin-bottom: 5px;
}

input, textarea, select {
	display: block;
}

input[type="text"], input[type="email"], input[type="tel"], textarea {
	border: 1px solid #b8b8b8;
	border-radius: 5px;
	margin-top: 5px;
}

::-webkit-input-placeholder { /* Chrome/Opera/Safari */
	padding-left: 10px;
}

::-moz-placeholder { /* Firefox 19+ */
	padding-left: 10px;
}

:-ms-input-placeholder { /* IE 10+ */
	padding-left: 10px;
}

:-moz-placeholder { /* Firefox 18- */
	padding-left: 10px;
}

#no {
	margin-left: 10px;
}

textarea {
	margin-bottom: 20px;
	width: 100%;
	height: 100px;
}

input[type="submit"], input[type="reset"] {
	background-color: #d7aed1;
	color: #fff;
	font-size: 1.1rem;
	padding: 10px;
	width: 100px;
	display: inline;
	margin-right: 10px;
	border-radius: 20px;
}

input[type="submit"]:hover, input[type="reset"]:hover {
	background-color: #d7aed1;
	color: #b8b8b8;
}

.formrequiredincomplete {
	background: #b8b8b8;
	color: #000000;
	border: #d7aed1 2px solid;
}
</style>

		<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet" type="text/css" />
		<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet" type="text/css" />

<article>
    <h1>Missing fields</h1>
    <p>Sorry, you have not completed all of the required fields.</p>
    <p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

    <ul>
        <?php
	       for($i=0; $i<count($this->missing_required_fields); $i++){
		  echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
	      }
        ?>
    </ul>

    <p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
</article>    