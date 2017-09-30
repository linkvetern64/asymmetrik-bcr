/**
 * @author Joshua Standiford
 * @date 9/29/2017
 * @desc
 * This file is used for local-testing for index.php.
 * The buttons are loaded with test data that can be rapidly tested
 * without having to keep track of copy-pasting.
 */

/**
 *
 * @returns {[null,null,null]}
 */
function getExamples(){
    var examples =
    ["ASYMMETRIK LTD\n" +
    "Mike Smith\n" +
    "Senior Software Engineer\n" +
    "(410)555-1234\n" +
    "msmith@asymmetrik.com",

    "Foobar Technologies\n" +
    "Analytic Developer\n" +
    "Lisa Haung\n" +
    "1234 Sentry Road\n" +
    "Columbia, MD 12345\n" +
    "Phone: 410-555-1234\n" +
    "Fax: 410-555-4321\n" +
    "lisa.haung@foobartech.com",

        "Arthur Wilson\n" +
        "Software Engineer\n" +
        "Decision & Security Technologies\n" +
        "ABC Technologies\n" +
        "123 North 11th Street\n" +
        "Suite 229\n" +
        "Arlington, VA 22209\n" +
        "Tel: +1 (703) 555-1259\n" +
        "Fax: +1 (703) 555-1200\n" +
        "awilson@abctech.com"
    ];
    return examples;
}
/**
 * @name showExample
 * @param index - index of the example you want to test
 * @desc
 * This file pulls the pre-loaded example array into this function.
 * If the index is in a valid range, then the info-box that appears
 * on the left of the screen is now visible and displays the example
 * text in the box.
 */
function showExample(index){
    var examples = getExamples();

    //Returns if index is out of bounds
    if(index > examples.length){return;}

    var box = document.getElementById("info-box");
    box.innerHTML = examples[index];
    box.style = "display:block";
}

/**
 * @name loadExample
 * @param index - index of the example you want to test
 * @desc
 * When this function is entered, the example array is pulled into this function.
 * The input-box value is changed to the example text from the array.
 */
function loadExample(index){
    var examples = getExamples();

    //Returns if index is out of bounds
    if(index > examples.length){return;}

    var input = document.getElementById("input-box");
    input.value = examples[index];
}

/**
 * @name hideExample
 * @desc
 * This function is called on index.php, when you mouse off the buttons on the
 * bottom of the page.  This hides the info-box once again and removes the example
 * text that was inside of it.
 */
function hideExample(){
    var box = document.getElementById("info-box");
    box.innerHTML = "";
    box.style = "display:none";
}