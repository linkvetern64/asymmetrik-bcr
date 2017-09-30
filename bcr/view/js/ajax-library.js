/**
 * @name parseCard
 * @param document - String, that will be parsed by parseBCR
 * @desc parseCard makes an AJAX call to parseBCR.  The parameter document is
 * passed in from index.php.  On success the function displayResults(ajax) is called.
 * on failure the responseText is submitted to the console.
 */
function parseCard(){
    var input = document.getElementById("input-box").innerHTML;

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
 * @param ajax - responseText from the
 */
function displayResults(ajax){

    var output = document.getElementById("output-box");
    output.innerHTML = "";
    var json = JSON.parse(ajax.responseText);
    output.innerHTML =  "Name: " + json["name"] + "<br/>" +
                        "Phone: " + json["phone"] + "<br/>" +
                        "Email: " + json["email"];
}

function displayFailure(ajax){
    console.log(ajax.responseText);
}