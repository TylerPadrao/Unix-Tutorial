<?php
	require 'assets/inc/header.php';
?>




    <!-- HEADER SECTION ENDS ABOVE, BASIC CONTENT BEGINS BELOW-->



    <div class="overview">
        <button class="nextbutton" onclick="location.href='quiz-managingfilesdirectories.php'">
            <h6>Next Topic: <span style="font-weight:200">Managing Files and Directories Quiz</span></h6>
        </button>
        <h1><b>Understanding Unix: Removing a directory</b></h1>
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
                <h2>rmdir</h2>
                <h4>Removing a directory</h4>
                <h4><i>Syntax: rmdir [directory]</i></h4>
            </div>
            <div class="command-overview">
                <h4>
                    The rmdir removes a directory from your file system, but will only remove that directory if it is completely empty. 
                    The directory must not contain any files or directories inside it, or else it will not be removed by rmdir. 
                </h4>
            </div>
            <hr>
            <div class="command-content">
                <div class="commandflex-left">
                    <p>Removing a directory: rmdir mydir
                        <br>
                        Mydir will be removed as long as there are no files or directories inside.
                    </p>
                </div>
                <div class="commandflex-right">
                    <pre>
                    <code class="code">
[student ~]$ rmdir mydir
[student ~]$ ls
(mydir is not there since we removed it)
[student ~]$
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
