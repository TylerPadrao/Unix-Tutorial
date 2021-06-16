<?php
	require 'assets/inc/header.php';
?>




    <!-- HEADER SECTION ENDS ABOVE, BASIC CONTENT BEGINS BELOW-->



    <div class="overview">
        <button class="nextbutton" onclick="location.href='quiz-wherediditgo.php'">
            <h6>Up Next: <span style="font-weight:200">Where did it go Quiz</span></h6>
        </button>
        <h1><b>Understanding Unix: Search for files and directories</b></h1>
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
                <h2>find</h2>
                <h4>Search for files and directories</h4>
                <h4><i>Syntax: “find [where to search from] [expression to determine results] [options] [what to find]”</i></h4>
            </div>
            <div class="command-overview">
                <h4>The find command allows the user to search the file system. 
                    It can search by file, directory, name, creation date, modification date, owner and permissions. 
                    It is pretty powerful and when mastered can be used to find just about anything in the system. </h4>
            </div>
            <hr>
            <div class="command-content">
                <div class="commandflex-left">
                    <p>To find anything in a linux system, use the command:
                        <br>
                        find [where to search from] [expression to determine results] [options] [what to find]
                    </p>
                </div>
                <div class="commandflex-right">
                    
                </div>
                <div class="commandflex-left">
                    <p>This is one of the most basic usages of the command. It finds the file “important.txt. In the current directory. By default it will look for files.
                        <br>
                        Some search result settings for the find command are:<br>

                        -name (Searches for the name)<br>
                        -iname (Searches for the name with both upper and lowercase letters)<br>
                        -type d (Searches for directories)<br>
                        -type f (Searches for files)<br>
                        -perm (Searches for specific permissions)<br>
                        -print (Display the path name of the files found by using the rest of the criteria)<br>

                    </p>
                </div>
                <div class="commandflex-right">
                    <pre>
                    <code class="code">
find . -name important.txt
                    </code>
                    </pre>
                </div>
                <div class="commandflex-left">
                    <p>Some options we can use for the find command are: 
                        <br>
                        -exec [command] (Runs commands on the files found)<br>
                        -ok [command] (Same thing but user is prompted first)

                    </p>
                </div>
                <div class="commandflex-right">
                
                </div>
                <div class="commandflex-left">
                    <p>
                        This command is the same as the -name version but it ignores the letter case. 
                    </p>
                </div>
                <div class="commandflex-right">  
                <pre>
                    <code>
[student ~]$ find . -iname important.txt
/important.txt
                    </code></pre>
                </div>
                <div class="commandflex-left">
                    <p>
                        This variation of the command will search for all php files in the current directory. 
                    </p>
                </div>
                <div class="commandflex-right">
                <pre>
                    <code>
[student ~]$ find . -type f -name “*.php”
hey.php
myFile.php
                    </code></pre>
                </div>
                <div class="commandflex-left">
                    <p>
                        This command will find the Picture directory in the / directory. 
                    </p>
                </div>
                <div class="commandflex-right">
                <pre>
                    <code>
[student ~]$ find / -type d -name Picture
                    </code></pre>
                </div>
                <div class="commandflex-left">
                    <p>
                        This command will find all files with 777 permissions in the / directory.
                    </p>
                </div>
                <div class="commandflex-right">
                <pre>
                    <code>
[student ~]$ find / -type f -perm 0777 -print
                    </code></pre>
                </div>
            </div>
        </section>
    </div>
    <div class="divider1"></div>
<?php
	require 'assets/inc/footer.php';
?>
