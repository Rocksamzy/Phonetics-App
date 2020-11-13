<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="A phonetics web app for checking homonyms and words that sound alike." name="description" />
    <meta property="og:type" content="application" />
    <meta property="og:title" content="Phonetics app" />
    <meta property="og:description" content="Phonetics application script" />
    <meta property="og:author" content="rocksamzy" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Phonetic || App</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/phonetics_app.css">
</head>

<body>
    <div class="">
        <div class="modal-header">
            <div class="container">
                <ul class="">
                    <li><a href="#" class="fa-leaf">Home</a></li>
                    <li><a href="#" class="fa-address-book">About</a></li>
                    <li><a href="#" class="fa-android">Service</a>
                        <ul class="dropdown">
                            <li class="dropdown-list"><a href="#">Service 1</a></li>
                            <li class="dropdown-list"><a href="#">Service 2</a></li>
                            <li class="dropdown-list"><a href="#">Service 3</a></li>
                            <li class="dropdown-list"><a href="#">Service 4</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="fa-page4">Page</a>
                        <ul class="dropdown">
                            <li class="dropdown-list"><a href="#">Page 1</a></li>
                            <li class="dropdown-list"><a href="#">Page 2</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="fa-envelope-open-text">FAQ</a></li>
                </ul>
            </div>
            <div class="container">
                <ul class="right-navbar">
                    <li><a href="#" class="fa-phone">Log In</a></li>
                    <li><a href="#" class="fa-phone-alt">Register</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="main">
    <div>
        <h2 class="header">A Simple <span>Phonetics</span> App</h2>
        <h4 class="header">This Application is built for the purpose of <strong>testing words that sounds same</strong> using <span>metaphone()</span> function</h4>
    </div>
    <form name="phonetics" action="<?php htmlentities($_SERVER['PHP_SELF']) ?>" method="POST" class="">
            <tr>
                <td>
                    <label for="firstWord">Enter first word</label><br />
                    <input type="text" name="fsound" id="firstword" placeholder="First word" pattern="[A-Za-z]{}" title="Enter words" required="required" /><br />
                </td>
                <td>
                    <label for="secondWord">Enter second word</label><br />
                    <input type="text" name="ssound" id="secondword" placeholder="Second word" pattern="[A-Za-z]{}" title="Enter words" required="required" /><br />
                </td>
            <tr>
                <td colspan="2">
                    <input type="submit" name="submit" value="Check" />
                    <br />
                </td>
            </tr>
        </table>
    </form>
    </div>
    <footer>
        <p>&copy; 2020 : : Developed by <span title="Need more of this? Reach me">Rocksamzy</span> - All rights reserved. Reach me on <a title="Reach me on Github" href="https://github.com/rocksamzy">Github</a>, <a title="Reach me on Facebook" href="https://facebook.com/bukar.schwartz">Facebook</a>, <a title="Reach me on twitter" href="https://twitter.com/rocksamzy">Twitter</a> and <a title="Reach me on Linkedin" href="https://linkedin.com/in/uzochukwu,ebuka.emmanuel">Linkedin</a></p>
    </footer>
</body>

</html>

<?php
if (isset($_POST['submit'])) {
	$firstword=($_POST['fsound']);
	$secondword=($_POST['ssound']);

    
    if(is_numeric($firstword)  || is_numeric($secondword)){
        echo "<h5><strong><span>Oops!</span> only words are allowed</strong><br>Please re-check your spellings</h5>";
        exit(0);}

    if(is_object($firstword)  || is_object($secondword)){
        echo "<h5><strong><span>Oops!</span> only words are allowed</strong><br>Please re-check your spellings</h5>";
        exit(0);}

	if($firstword=== $secondword){
		echo "<h5><br><em><span>{$firstword}</span></em> sounds like <em><span>{$secondword}</span></em><br><em><span>{$firstword}</span></em> is also spelt like <em><span>{$secondword}</span></em><br>Both words are therefore homonymns and homographs of each other.</h5>";
		exit(0);}


    if(metaphone($firstword)== metaphone($secondword)){
	    echo "<h5><br><em><span>{$firstword}</span></em> sounds like <em><span>{$secondword}</span></em><br>Both words are homonymns of each other.</h5>";}

	elseif(metaphone($firstword)!== metaphone($secondword)){
        echo "<h5><br><em><span>{$firstword}</span></em> does not sound like </span><em><span>{$secondword}</span></em><br>Both words are therefore not homonymns of each other.</h5>";}
        

else {
	echo "<h5><br>Thank you for using the phonetics application<br>Try again using other words</h5>";}

};
?>
