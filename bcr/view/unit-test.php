<?php
/**
 * Created by:
 * User: Josh
 */
require_once(dirname(__FILE__) . '/../load.php');

//define passed and failed HTML objects
$passed = "<span class='glyphicon glyphicon-ok passed'></span>";
$failed = "<span class='glyphicon glyphicon-remove failed'></span>";
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
            <?php
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
            ?>
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
                        $bcrContact = $BCR->getContactInfo($sampleInput);
                        if(is_a($bcrContact, "ContactInfo")){echo $passed;}
                        else{echo $failed;}
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
                    <td>Instantiating ContactInfo with NULL Parameters throws exception</td>
                    <td>
                        <?php
                        try{
                            $tmp_contact = new ContactInfo(NULL, "4105556789", "test@gmail.com");
                            echo $failed;
                        }
                        catch(Exception $e){
                            echo $passed;
                        }
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
                    <td>BusinessCardReader constructor creates valid object</td>
                    <td>
                        <?php
                        $BCR = new BusinessCardParser();
                        if(is_a($BCR, "BusinessCardParser")){ echo $passed;}
                        else {echo $failed;}
                        ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <!-- ajax-library.js test section -->
    <div class="test-section">
        <div class="title-section">Tests for ajax-library.js</div>
        <div class="body-section">
            <table>
                <tr>
                    <th>Unit Test Description</th>
                    <th>Passed</th>
                </tr>
                <tr>
                    <td>BusinessCardReader constructor creates valid object</td>
                    <td>
                        <?php
                        $BCR = new BusinessCardParser();
                        if(is_a($BCR, "BusinessCardParser")){ echo $passed;}
                        else {echo $failed;}
                        ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <!-- parseBCR.php test section -->
    <div class="test-section">
        <div class="title-section">Tests for parseBCR.php</div>
        <div class="body-section">
            <table>
                <tr>
                    <th>Unit Test Description</th>
                    <th>Passed</th>
                </tr>
                <tr>
                    <td>BusinessCardReader constructor creates valid object</td>
                    <td>
                        <?php
                        $BCR = new BusinessCardParser();
                        if(is_a($BCR, "BusinessCardParser")){ echo $passed;}
                        else {echo $failed;}
                        ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <!-- example-library.js test section -->
    <div class="test-section">
        <div class="title-section">Tests for example-library.js</div>
        <div class="body-section">
            <table>
                <tr>
                    <th>Unit Test Description</th>
                    <th>Passed</th>
                </tr>
                <tr>
                    <td>BusinessCardReader constructor creates valid object</td>
                    <td>
                        <?php
                        $BCR = new BusinessCardParser();
                        if(is_a($BCR, "BusinessCardParser")){ echo $passed;}
                        else {echo $failed;}
                        ?>
                    </td>
                </tr>
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


<!-- Load scripts at the end -->
<script src="js/example-library.js"></script>
<script src="js/ajax-library.js"></script>
</body>
</html>
