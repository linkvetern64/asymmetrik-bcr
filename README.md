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
    
* Vagrant Plugins

    Once you have Vagrant and GitBash installed.  Open the GitBash CLI and type in
        
        "vagrant plugin install vagrant-hostsupdater" 
        "vagrant plugin install vagrant-hostmanager"
    
    -- hostsupdater is at (version. 1.0.2) as of 9/30/2017
    
    -- hostmanager is at (version. 1.8.7) as of 9/30/2017
    