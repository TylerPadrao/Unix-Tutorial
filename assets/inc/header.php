<!DOCTYPE html>
<!-- Website Warriorz, ISTE-240, 2198 -->

<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://use.typekit.net/idu3ccx.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="https://kit.fontawesome.com/1dc9d88fe9.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <title>ULearnUnix: Basics</title>
  </head>

  <body>
    <!-- This section holds the information for the header of the site -->

    <header>
     <div class="logo">
	  
	 </div>
      <nav>
        <!--HAMBURGER-->
        <label for="hamburger">&#9776;</label>
        <input type="checkbox" id="hamburger"/>
        <div id="navcontainer">

        <ul id="navul">
		  <li>
		    <a class="navitem" href="index.php">Home</a>
		  </li>
          <li>
            <a class="navitem" onclick="hamburger('studytab')" >Study</a>
            <div id="studytab">
              <a class="goback" onclick="goback('studytab')">&#x25C0</a>

              <!--LEFT SIDE-->
              <div id="studyleft">
                <h3 id="beginnertitle" onclick="switchTab(beginner)">Beginner</h3>
                <h3 id="intermediatetitle" onclick="switchTab(intermediate)">Intermediate</h3>
                <h3 id="advancedtitle" onclick="switchTab(advanced)">Advanced</h3>
              </div>

              <!--RIGHT SIDE-->
              <div id="studyright">
                <!--beginner content-->
                <div id="beginner">
                  <div>
                    <h5>Directories</h5>
                    <ul>
                      <li>
                        <a href="mkdir.php"
                          >Creating Directories</a
                        >
                      </li>
                      <li>
                        <a href="cd.php"
                          >Changing Directories</a
                        >
                      </li>
                      <li>
                        <a href="pwd.php"
                          >Print Working Directory</a
                        >
                      </li>
                      <li>
                        <a href="dir.php"
                          >Viewing Content in Directories</a
                        >
                      </li>
                    </ul>
                  </div>
                  <div>
                    <h5>Files</h5>
                    <ul>
                      <li><a href="ls.php">Listing Files</a></li>
                      <li><a href="cat.php">Viewing Content</a></li>
                    </ul>
                  </div>
                  <div>
                    <h5>User Commands</h5>
                    <ul>
                      <li><a href="history.php">Viewing past commands</a></li>
                      <li><a href="whoami.php">Identifying current user</a></li>
                    </ul>
                  </div>
                </div>

                <!--intermediate content-->
                <div id="intermediate">
                  <div>
                    <h5>Managing Files and Directories</h5>
                    <ul>
                      <li><a href="cp.php">Copying Files and Directories</a></li>
                      <li><a href="mv.php">Moving Files and Directories</a></li>
                      <li><a href="rm.php">Removing Files</a></li>
                      <li><li><a href="rmdir.php">Removing Directories</a></li>  
                    </ul>
                  </div>
                  <div>
                    <h5>Where did it go?</h5>
                    <ul>
                      <li><a href="find.php"
                          >Finding a File or Directory</a
                        ></li>
                    </ul>
                  </div>
                  <div>
                    <h5>Printing in Unix</h5>
                    <ul>
                      <li><a href="echo.php">Printing Strings</a></li>
                    </ul>
                  </div>
                </div>

                <!--advanced content-->
                <div id="advanced">
                  <div>
                    <h5>File Permissions</h5>
                    <ul>
                      <li><a href="chmod.php">Changing Permissions</a></li>
                      <li><a href="chown.php">Changing Ownerships</a></li>
                    </ul>
                  </div>
                  <div>
                    <h5>File Editing</h5>
                    <ul>
                      <li><a href="nano.php">Text Editing</a></li>
                    </ul>
                  </div>
                  <div>
                    <h5>Remote Servers</h5>
                    <ul>
                      <li><a href="ssh.php">Logging in Remotely</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </li>

          <li>
            <a href="aboutUs.php" class="navitem">About Us</a>
          </li>

             <li><a class="navitem" onclick="hamburger('quiztab')">Quizzes</a>
            <div id="quiztab">
              <ul>
                <li><a href="quiz-directories.php">Directories</a></li> <!-- directoriesquiz.php -->
                <li><a href="quiz-files.php">Files</a></li> <!-- filesquiz.php -->
                <li><a href="quiz-usercommands.php">User Commands</a></li> <!-- usercommandsquiz.php -->
                <li><a href="quiz-managingfilesdirectories.php">File Management</a></li> <!-- filemanagequiz.php -->
                <li><a href="quiz-wherediditgo.php">Where did it go?</a></li> <!-- findquiz.php -->
                <li><a href="quiz-printinginunix.php">Printing in Unix</a></li> <!-- printquiz.php -->
                <li><a href="quiz-fileeditingpermissions.php">File Permissions</a></li> <!-- permissionsquiz.php -->
                <li><a href="quiz-remoteservers.php">Remote Servers</a></li> <!-- remoteserverquiz.php -->
                <li><a class="goback" onclick="goback('quiztab')">&#x25C0</a></li>
              </ul>
            </div>
          </li>

          <li><a href="glossary.php" class="navitem">Glossary</a></li>

        </ul>
        </div>
      </nav>
    </header>
