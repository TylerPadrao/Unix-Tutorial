<?php
	require 'assets/inc/header.php';
?>

    <!-- HEADER SECTION ENDS ABOVE, BASIC CONTENT BEGINS BELOW-->



    <div class="overview">
        <button class="nextbutton" onclick="location.href='quiz-printinginunix.php'">
            <h6>Next Topic: <span style="font-weight:200">Printing in Unix Quiz</span></h6>
        </button>
        <h1><b>Understanding Unix: Printing to the terminal</b></h1>
        <p>Since we know learned the basic Unix commands, we are going to start learning some intermediate 
            level commands that will further pursue your web development career. Within these lessons, 
            we are going to cover topics such as file and directory management, finding certain files, and 
            printing within your Unix terminal.</p>

    </div>
    <div class="divider"></div>
    <div class="intro">
        <div class="intro-text">
            <h2>Intermediate Command List</h2>
        </div>
        <div class="all-list">
            <div>
            <table class="for-all-content">
                <tr>
                    <th>mv</th>
                    <td>Moving files or directories</td>

                </tr>
                <tr>
                    <th>cp</th>
                    <td>Copying files or directories</td>

                </tr>
                <tr>
                    <th>rm</th>
                    <td>Removing Files</td>

                </tr>
                <tr>
                    <th>rmdir</th>
                    <td>Removing a directory</td>

                </tr>
            </table>
            </div>
            <div>
            <table class="for-all-content">
                
                <tr>
                    <th>find</th>
                    <td>Search for files and directories</td>

                </tr>
                <tr>
                    <th>echo</th>
                    <td>Printing to the terminal</td>
                </tr>
            </table>
            </div>
        </div>
    </div>

    <hr>
    <hr>

    <div class="command">
        <section>
            <div class="command-head">
                <h2>echo</h2>
                <h4>Display line of text/string</h4>
                <h4><i>Syntax: echo [options] [arguments]</i></h4>
            </div>
            <div class="command-overview">
                <h4>The echo command is a built-in Unix command that is used to display a line or lines of strings and text that are passed in as an argument. 
                    And then the line of text is then passed out as standard output to the user. </h4>
            </div>
            <hr>
            <div class="command-content">
                <div class="commandflex-left">
                    <p>
						The Unix shell takes the text “Hello world” as an argument and then passes it out to the user:
                    </p>
                </div>
				<div class="commandflex-right">
                    <pre>
                    <code class="code">
[student ~]$ echo "Hello world"
"Hello world"
                    </code>
                    </pre>
                </div>
				<div class="commandflex-left">
                    <p>
                        This example takes the statement above and puts everything after \n and puts it on its own line and with \t it will tab over 1 tab
                    </p>
                </div>
                <div class="commandflex-right">
                    <pre>
                    <code class="code">
[student ~]$ echo -e "You know nothing, Jon Snow. \n\t- Ygritte"

Your know nothing, Jon Snow.
        -Ygritte
                    </code>
                    </pre>
                </div>
            </div>
        </section>
    </div>
    <div class="divider1"></div>
<?php
	require 'assets/inc/footer.php';
?>
