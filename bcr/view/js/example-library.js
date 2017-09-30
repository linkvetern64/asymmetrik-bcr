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
 *
 * @param index
 */
function showExample(index){
    var examples = getExamples();

    //Returns if index is out of bounds
    if(index > examples.length){return;}

    var box = document.getElementById("info-box");
    box.innerHTML = examples[index];
    box.style = "display:block";
}

function loadExample(index){
    var examples = getExamples();

    //Returns if index is out of bounds
    if(index > examples.length){return;}

    var input = document.getElementById("input-box");
    input.innerHTML = examples[index];
}

/**
 *
 */
function hideExample(){
    var box = document.getElementById("info-box");
    box.innerHTML = "";
    box.style = "display:none";
}