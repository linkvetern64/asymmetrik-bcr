<?php
/**
 * Created by:
 * User: Josh
 * @desc
 * Unit testing file for asymmetrik-bcr project.
 * When the page loads the php functions run their tests and
 * will show what passed and failed.
 */
require_once(dirname(__FILE__) . '/../load.php');

//define passed and failed HTML objects
$passed = "<span class='glyphicon glyphicon-ok passed'></span>";
$failed = "<span class='glyphicon glyphicon-remove failed'></span>";

//Created sample data used for testing
$sampleInput = "Albin Library UMBC
                                Joshua Standiford
                                phone: (410)800-8804
                                email: joshua.standiford@gmail.com
                                Full Stack Developer";

$sampleInputTwo = "ASYMMETRIK LTD
                                Mike Smith
                                Senior Software Engineer
                                (410)555-1234
                                msmith@asymmetrik.com";


$invalidEmail = "Joshua Standiford
                                 Library Dev
                                 (410) 239 4697";

$sampleData = ["Albin Library UMBC", "Joshua Standiford", "phone: (410)800-8804", "email: joshua.standiford@gmail.com", "Full Stack Developer"];

$missingEmail = ["ASYMMETRIK LTD", "Mike Smith", "phone: (410)800-8804", "Full Stack Developer"];

$missingEmailName = ["ASYMMETRIK LTD", "phone: (410)800-8804", "Full Stack Developer"];


$validEmail = ["joshua.standiford@hotmail.com", "testgarabage-nirvana@.org"];

$dirtyInput = "<b>Test</b>";

$dirtyEmail = "g@gm/ail.com";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Business Card Parser">
    <meta name="author" content="Joshua Standiford">

    <title>Testing Framework</title>

    <!-- Bootstrap Core CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Distinct CSS -->
    <link rel="stylesheet" href="css/unit-test.css" type="text/css" media="screen">
</head>
<body>
<div id="pageTitle">OCR Parser Testing</div>
<div id="container">
    <!-- BusinessCardReader test section -->
    <div class="test-section">
        <div class="title-section">Tests for BusinessCardParser.php</div>
        <div class="body-section">
            <table>
                <tr>
                    <th>Unit Test Description</th>
                    <th>Passed</th>
                </tr>
                <tr>
                    <td>BusinessCardParser constructor creates valid object</td>
                    <td>
                        <?php
                        $BCR = new BusinessCardParser();
                        if(is_a($BCR, "BusinessCardParser")){ echo $passed;}
                        else {echo $failed;}
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>BusinessCardParser parses and returns valid ContactInfo instance</td>
                    <td>
                        <?php
                        $tmp_contact = $BCR->getContactInfo($sampleInput);
                        if(is_a($tmp_contact, "ContactInfo")){ echo $passed;}
                        else {echo $failed;}
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>BusinessCardParser method parseEmail expected to find valid email</td>
                    <td>
                        <?php
                        $output = $BCR->parseEmail($validEmail);
                        if(stripos("joshua.standiford@hotmail.com", $output) !== false){  echo $passed; }
                        else{ echo $failed;}
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>BusinessCardParser method parseEmail expected to return "N/A"</td>
                    <td>
                        <?php
                        $output = $BCR->parseEmail($invalidEmail);
                        if(stripos("N/A", $output) !== false){  echo $passed; }
                        else{ echo $failed;}
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>BusinessCardParser method parseName expected to find valid name</td>
                    <td>
                        <?php
                        $output = $BCR->parseName($sampleData, "joshua.standiford@gmail.com");
                        if(stripos("Joshua Standiford", $output) !== false){  echo $passed; }
                        else{ echo $failed;}
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>BusinessCardParser method parseName expected to return "N/A"</td>
                    <td>
                        <?php
                        $output = $BCR->parseName($invalidEmail, "joshua.standiford@gmail.com");
                        if(stripos("N/A", $output) !== false){  echo $passed; }
                        else{ echo $failed;}
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>BusinessCardParser method parsePhone expected to find valid phone number</td>
                    <td>
                        <?php
                        $output = $BCR->parsePhone($sampleData);
                        if(stripos("4108008804", $output) !== false){  echo $passed; }
                        else{ echo $failed;}
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>BusinessCardParser method parsePhone expected to return "N/A"</td>
                    <td>
                        <?php
                        $output = $BCR->parsePhone($invalidEmail);
                        if(stripos("N/A", $output) !== false){  echo $passed; }
                        else{ echo $failed;}
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>BusinessCardParser method parseName parses name with no email</td>
                    <td>
                        <?php
                        $output = $BCR->parseName($missingEmail, "test");
                        if(stripos("Mike Smith", $output) !== false){  echo $passed; }
                        else{ echo $failed;}
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>BusinessCardParser method parseName returns N/A if no valid name is found</td>
                    <td>
                        <?php
                        $output = $BCR->parseName($missingEmailName, "test");
                        if(stripos("N/A", $output) !== false){  echo $passed; }
                        else{ echo $failed;}
                        ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <!-- ContactInfo test section -->
    <div class="test-section">
        <div class="title-section">Tests for ContactInfo.php</div>
        <div class="body-section">
            <table>
                <tr>
                    <th>Unit Test Description</th>
                    <th>Passed</th>
                </tr>
                <tr>
                    <td>ContactInfo constructor creates valid object</td>
                    <td>
                        <?php
                        $contact = new ContactInfo("Alan Sherman", "4105556789", "test@gmail.org");
                        if(is_a($contact, "ContactInfo")){ echo $passed;}
                        else {echo $failed;}
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Name returned by ContactInfo matches one used in constructor - "Alan Sherman"</td>
                    <td>
                        <?php
                        if($contact->getName() === "Alan Sherman"){ echo $passed;}
                        else {echo $failed;}
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Phone returned by ContactInfo matches one used in constructor - "4105556789"</td>
                    <td>
                        <?php
                        if($contact->getPhoneNumber() === "4105556789"){ echo $passed;}
                        else {echo $failed;}
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Email returned by ContactInfo matches one used in constructor - "test@gmail.org"</td>
                    <td>
                        <?php
                        if($contact->getEmailAddress() === "test@gmail.org"){ echo $passed;}
                        else {echo $failed;}
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>ContactInfo->toJSON() produces valid JSON encoding</td>
                    <td>
                        <?php
                        $json = $contact->toJSON();
                        json_decode($json);
                        if(json_last_error() == JSON_ERROR_NONE){
                            echo $passed;
                        }
                        else{
                            echo $failed;
                        }
                        ?>
                    </td>
                </tr>

            </table>
        </div>
    </div>
    <!-- Sanitizer test section -->
    <div class="test-section">
        <div class="title-section">Tests for Sanitizer.php</div>
        <div class="body-section">
            <table>
                <tr>
                    <th>Unit Test Description</th>
                    <th>Passed</th>
                </tr>
                <tr>
                    <td>Sanitizer default static method can be called</td>
                    <td>
                        <?php
                        $cleanData = Sanitizer::sanitize($dirtyInput, NULL);
                        if(htmlspecialchars_decode($cleanData) === $dirtyInput){echo $passed;}
                        else{echo $failed;};
                        ?>
                    </td>
                </tr>
                <td>Sanitizer sanitize flags produce expected results - FILTER_SANITIZE_EMAIL</td>
                <td>
                    <?php
                    $cleanEmail = Sanitizer::sanitize($dirtyEmail,  FILTER_SANITIZE_EMAIL);
                    if($cleanEmail === "g@gmail.com"){echo $passed;}
                    else{echo $failed;};
                    ?>
                </td>
            </table>
        </div>
    </div>
    <br />
    Return home <a href="index.php"><span class="glyphicon glyphicon-home"></span></a>
</div>

<hr>
<footer style="text-align:center;font-size:.8em;">
    <p>Created By: Joshua Standiford</p>
</footer>

</body>
</html>
