<?php
session_start();
?>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="sidenav" id="mysidenav">
<a href="javascript:void(0)" class="closebutton" onclick="closenav()">&times;</a>

<h2 style="color:#818181;padding:8px 10px;"> NAVIGATE: </a></h2> 
    <div id="links">
<br><br>
<a href="homepage.php"><img src="images/home.png" width=20 height=20>&nbspHOME</a><br>

<a href="contact.html"><img src="images/contact.png" width=20 height=20>&nbspCONTACT US</a><br>

<a href="about.html"><img src="images/about.png" width=20 height=20>&nbspABOUT US</a><br>

<?php
if(isset($_SESSION['name']))
{
	echo ' <a href="logout.php"><img src="images/logout.png" width=20 height=20>&nbspLOGOUT</a><br>';
	if(!isset($_SESSION['fname']))
	{

	echo ' <a href="register_for_exam.html"><img src="images/logout.png" width=20 height=20>&nbspREGISTER FOR COURSE</a><br>';
	}
	else
		{
			echo 'Thanks for Registration ';
		}


}
else
{
echo '<a href="login.html"><img src="images/login.jpg" width=20 height=20>&nbspLOGIN</a><br>';

echo '<a href="register.html"><img src="images/register.png" width=20 height=20>&nbspREGISTER</a><br>';
}
?>

    </div>
</div>
<br>
<span style="font-size:30px;color:#009900;cursor:pointer; padding-left:5px; ;text-align:left;" onclick="opennav()">&#9776;OPEN 
</span>
<span style="float:right;color:#009900;padding-top:10px;padding-right:10px;font-size:20px;">
	<?php 
if(isset($_SESSION['name']))
{	echo 'HELLO ';
	echo $_SESSION['name']; 
}
?> 
</span>
<div id="main">




<h1>WELCOME TO HACK_FOR_FUN</h1>

<p id="p01">

Certified Ethical Hacker (CEH) is a qualification obtained by demonstrating knowledge of assessing the security of computer systems by looking for weaknesses and vulnerabilities in target systems, using the same knowledge and tools as a malicious hacker, but in a lawful and legitimate manner to assess the security posture of a target system. This knowledge is assessed by answering multiple choice questions regarding various ethical hacking techniques and tools. The code for the C|EH exam is 312-50. This certification has now been made a baseline with a progression to the C|EH (Practical), launched in March 2018, a test of penetration testing skills in a lab environment where the candidate must demonstrate the ability to apply techniques and use penetration testing tools to compromise various simulated systems within a virtual environment.
</p>
<p id="p02">
Ethical hackers are employed by organizations to penetrate networks and computer systems with the purpose of finding and fixing security vulnerabilities. The EC-Council offers another certification, known as Certified Network Defense Architect (CNDA). This certification is designed for United States Government agencies and is available only to members of selected agencies including some private government contractors, primarily in compliance to DOD Directive 8570.01-M.[1] It is also ANSI accredited and is recognized as a GCHQ Certified Training (GCT).
<br><br>
<table style="padding:5px; width:100%">
	<tr>
		<td><img src="images/books/book1.jpg" height=300 width=200></td>
		<td><img src="images/books/book2.jpg" height=300 width=200></td>
		<td><img src="images/books/book3.jpg" height=300 width=200></td>
		<td><img src="images/books/book5.jpg" height=300 width=200></td>
		<td><img src="images/books/book4.jpg" height=300 width=200></td>
	</tr>
</table>
<br><br>
However, network news use of the term consistently pertained primarily to the criminal activities, despite the attempt by the technical community to preserve and distinguish the original meaning, so today the mainstream media and general public continue to describe computer criminals, with all levels of technical sophistication, as "hackers" and do not generally make use of the word in any of its non-criminal connotations. Members of the media sometimes seem unaware of the distinction, grouping legitimate "hackers" such as Linus Torvalds and Steve Wozniak along with criminal "crackers".[4]

As a result, the definition is still the subject of heated controversy. The wider dominance of the pejorative connotation is resented by many who object to the term being taken from their cultural jargon and used negatively,[5] including those who have historically preferred to self-identify as hackers. Many advocate using the more recent and nuanced alternate terms when describing criminals and others who negatively take advantage of security flaws in software and hardware. Others prefer to follow common popular usage, arguing that the positive form is confusing and unlikely to become widespread in the general public. A minority still use the term in both senses despite the controversy, leaving context to clarify (or leave ambiguous) which meaning is intended.

However, because the positive definition of hacker was widely used as the predominant form for many years before the negative definition was popularized, "hacker" can therefore be seen as a shibboleth, identifying those who use the technically-oriented sense (as opposed to the exclusively intrusion-oriented sense) as members of the computing community. On the other hand, due to the variety of industries software designers may find themselves in, many prefer not to be referred to as hackers because the word holds a negative denotation in many of those industries.

A possible middle ground position has been suggested, based on the observation that "hacking" describes a collection of skills and tools which are used by hackers of both descriptions for differing reasons. The analogy is made to locksmithing, specifically picking locks, which is a skill which can be used for good or evil. The primary weakness of this analogy is the inclusion of script kiddies in the popular usage of "hacker," despite their lack of an underlying skill and knowledge base.

Sometimes, "hacker" is simply used synonymously with "geek": "A true hacker is not a group person. He's a person who loves to stay up all night, he and the machine in a love-hate relationship... They're kids who tended to be brilliant but not very interested in conventional goals[...] It's a term of derision and also the ultimate compliment."[6]



</p>

</div>


<footer >

Website designed and developed at Harmonpreet Singh Co. Inc(All rights Reserved).
    

</footer>
</body>
</html>

<style>



footer
{
	color:white;
	background-color:#008fb3;
	position:relative;
	bottom:0px;
	width:100%;
	height:10%;
	text-align: center;
	padding:10px;
	font-size: 30px;
;
}
body
{
	background-color:#000000;
}
h1
{
	color:#009900;
	font-size:80px;
	text-align:center;
	
}
#p01
{
	color:#008fb3;
	font-size:17px;
	padding:10px;
}
#p02
{
    color:#009900;
    font-size: 14px;
    padding:10px;
        
}

.sidenav
{
	height:100%;
	width:0px;
	position:fixed;
	z-index:1;
	top:0;
	left:0;
	padding-top:20px;
	background-color:#111111;
	overflow-x:hidden;
	transition: 1s;
	box-shadow: 0px 0px 20px white;
	

}
.sidenav a
{
	padding:8px 10px;
	font-size:20px;
	color:#818181;
	display:block;
	text-decoration:none;
	
	
	
}
.sidenav a:hover
{
	color:#f1f1f1;
	box-shadow:5px 10px 10px #f1f1f1;
}
.sidenav .closebutton
{
	margin-left:150px;
	font-size:40px;
}
</style>
<script>
function opennav()
{
document.getElementById("mysidenav").style.width="200px";
document.getElementById("main").style.padding="0px 0px 0px 200px";
}
function closenav()
{
document.getElementById("mysidenav").style.width="0px";
document.getElementById("main").style.padding="0px 0px 0px 0px";
}
</script>


