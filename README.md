# asymmetrik-bcr

Asymmetrik Business Card Parser
-
This project is for the Asymmetrik coding challenge.  The project takes input from an OCR 
interpreter. 

Prerequisites
-
* Oracle Virtualbox - https://www.virtualbox.org/wiki/Downloads
* (Windows only) GitBash - https://git-scm.com/downloads
* Vagrant -     https://www.vagrantup.com/downloads.html
* Vagrant Plugins
* GitHub - https://github.com

    (These links we're the most recent versions as of 9/30/2017)
    If you're unfamiliar with the Git tools.  A handy learning tool is available here.
    https://try.github.io/levels/1/challenges/1
    
Installation
-
* VirtualBox 

    <b>NOTE</b> before installing <u>Virtualbox</u>.  Enable virtualization within your BIOS or OS.
    Installing virtualbox should be straight forward.  
    
* GitBash 

    GitBash client is only necessary for Windows users.  If you are on a Mac or Linux device you can skip
    this step.  Otherwise navigate through the link above.  The steps as well should be pretty straight forward.
    <b>Note: </b> On windows you may encounter issues with GitBash unless you operate as Administrator.
    This can be achieved by right-clicking on the program before running and hitting
    "Run as Administrator".  
    
* Vagrant
    
    Again, installation should be rather straight forward.  However all machines are different so pay attention
    as you install in case any errors should occur.  
    
* GitHub

    Most importantly having a github account will be the means of cloning and allowing you to
    use this project.
    On the website, create an account.  This will be essential for being able to clone and use the code. 
    
    In the GitBash you will want to now clone this repository.  You can achieve that by running the command:
    
        "git clone git@github.com:linkvetern64/asymmetrik-bcr.git" for ssh
        "git clone https://github.com/linkvetern64/asymmetrik-bcr.git" for https
        
    
* Vagrant Plugins

    Once you have Vagrant and GitBash installed.  Open the GitBash CLI and type in
        
        "vagrant plugin install vagrant-hostsupdater" 
        "vagrant plugin install vagrant-hostmanager"
    
    -- hostsupdater is at (version. 1.0.2) as of 9/30/2017
    
    -- hostmanager is at (version. 1.8.7) as of 9/30/2017
    
Executing
-
Now that we have all the dependencies installed.  through the GitBash or CLI enter the cloned git-repo
you cloned above.  

This can be accomplished using the "cd" command.  Once you enter the folder, you should now be able to run
    
    "vagrant up"
    
If this does not work.  Make sure you see a file called Vagrantfile.  This file is how vagrant knows how to initialize itself.
now wait until Vagrant finishes filling up the terminal with output.

you can now open up your web browser and in the navigation bar enter "bcr.dev".
This will take you to the local server Vagrant initialized with the git project loaded.

Project Specifications
-

This project (asymmetrik-bcr) was created using:
 * Php5 backend
 * Prototype AJAX framework
 * BootStrap CSS Framework
 * Javascript ES6 
 * HTML5
 * Intellij IDE 2017.2.2

How to Operate
-
-- Index.php -     The landing page for bcr.dev.  In order to use the BCR parser
you can copy test documents into the textarea on the left side of the screen.  Or if you
don't have any cards to parse you can use some pre-loaded examples. There are three examples
on the bottom of the page.  In order to get more information about each example, simply hold your mouse
over the button.  An overlay will appear on the left side of the screen detailing the input document.

When you want to test the parser, you may simply click on the example button or load your own document into 
the textarea.  Once the text is loaded into the input box, you can then click on the red "Parse" button
in the center of the screen.  The input text will be sent via AJAX to a PHP file for sanitation and evaluation.

That response text is then sent back to a success or failure function in that javascript file.  If the input
evaluation was successful, then the output box is filled with a formatted string containing the Name, Phone and Email
parsed from the document.  If for some reason the document is formatted incorrectly or otherwise the information is 
unintelligible the resulting output will be "N/A".

Testing
-
At the bottom of index.php, a hyperlink will redirect you to unit-test.php.
When you load the page, the classes responsible for encapsulation, evaluation and sanitation are tested. 
A table is shown with the test name and a neighboring column that shows the outcome.  A green check means the test was 
successful.  A red X means that the test was a failure.  

The current tests ran in the testing suite show that the sanitation behaves as expected.  As well as the document parser 
producing valid results and being able to rummage through "dirty" data to glean the appropriate information.    

Known Bugs / Fixes
-
Content unavailable.

Authors
-
Joshua Standiford


    
  