/**
 * @name parseCard
 * @param document - String, that will be parsed by parseBCR
 * @desc parseCard makes an AJAX call to parseBCR.  The parameter document is
 * passed in from index.php.  On success the function displayResults(ajax) is called.
 * on failure the responseText is submitted to the console.
 */
function parseCard(){
    var input = document.getElementById("input-box").value;

    //If the input is empty don't proceed
    if(input === ""){
        return false;
    }
    new Ajax.Request( "parseBCR.php",
        {
            method: "get",
            parameters: {input : input},
            onSuccess: displayResults,
            onFailure: displayFailure
        }
    );
}

/**
 * @name displayResults
 * @param ajax - responseText from parseBCR.php
 * @desc
 * This function takes responseText from parseBCR in the form of JSON.
 * The JSON is then parsed and a string is built.  That string is then output
 * to index.php's output-box.
 */
function displayResults(ajax){
    var output = document.getElementById("output-box");
    output.innerHTML = "";
    var json = JSON.parse(ajax.responseText);
    output.innerHTML =  "Name: " + json["name"] + "<br/>" +
                        "Phone: " + json["phone"] + "<br/>" +
                        "Email: " + json["email"];
}

/**
 * @name displayFailure
 * @param ajax - responseText from parseBCR.php
 * @desc
 * This function is called when something with Ajax fails.
 * The issue will be output to the browser console.
 */
function displayFailure(ajax){
    console.log(ajax.responseText);
}