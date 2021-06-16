<?php
	require 'assets/inc/header.php';
?>




    <!-- HEADER SECTION ENDS ABOVE, BASIC CONTENT BEGINS BELOW-->



    <div class="overview">
        <button class="nextbutton" onclick="location.href='rmdir.php'">
            <h6>Next Topic: <span style="font-weight:200">Removing Directories</span></h6>
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
                <h2>rm</h2>
                <h4>Removing Files</h4>
                <h4><i>Syntax: “rm [options] [file|dir]</i></h4>
            </div>
            <div class="command-overview">
                <h4>The remove command removes a specific file or directory you may not want in your file structure any longer. 
                    Let’s go back to the two pocket folder scenario. Let’s say a student wants to clean out their folder half way through the school year. 
                    They do so by going through and removing papers they don’t need anymore, but may want to keep some important papers in their folder. 
                    The remove command will allow for a user to remove files or directories that they do not want in their file structure anymore.</h4>
            </div>
            <hr>
            <div class="command-content">
                <div class="commandflex-left">
                    <p>To remove files from a directory, we can use the following comman
                        <br>
                        Rm [options] [file | directory]
                    </p>
                </div>
                <div class="commandflex-right">
                    
                </div>
                <div class="commandflex-left">
                    <p>We have a text file called hello.txt with just a morning greeting. 
                        What if we want to remove this file out of our file system. 
                        All we have to do is type “rm hello.txt” which will remove the file and delete it from our file structure.
                    </p>
                </div>
                <div class="commandflex-right">
                    <pre>
                    <code class="code">
[student ~]$ rm hello.txt
                    </code>
                    </pre>
                </div>
                <div class="commandflex-left">
                    <p>Some options for the rm command are:<br>

                        -i (Asks user before removing file)<br>
                        -r (Removes files recursively<br>
                        
                    </p>
                </div>
                <div class="commandflex-right">
                
                </div>
                <div class="commandflex-left">
                    <p>
                        We are working with the same text file from before. 
                        What if you want to double check yourself before accidentally deleting a file that may be important? Using the “-i” command will allow you to do this. 
                        See how this command prompts you before removing the file? 
                        If you type “Yes”, “Y”, or “y”, you will remove and delete the file from the data structure. 
                        Anything other than “Yes”, “Y”, or “y” will skip the file and not remove 
                    </p>
                </div>
                <div class="commandflex-right">  
                <pre>
                    <code>
[student ~]$ rm -i hello.txt
rm: remove regular file ‘hello.txt’? 
[student ~]$
                    </code></pre>
                </div>
                <div class="commandflex-left">
                    <p>
                        The recursive option can be a very DANGEROUS option if not used properly. 
                        You can accidentally remove a whole file structure if you are not familiar with this command. 
                        Please be very careful with the recursive option. 
                        Let’s say you want to remove a bunch of files at once within a directory. 
                        It would be too much of a hassle to remove individual files, which may be many. Using the “-r” command will remove all of the files or directories within “first_directory"

                    </p>
                </div>
                <div class="commandflex-right">
                <pre>
                    <code>
[student ~]$ rm -r first_directory
[student ~]$ cd first_directory
[student ~/first_directory]$ ls
(Nothing in first_directory)
[student ~/first_directory]$
                    </code></pre>
                </div>
            </div>
        </section>
    </div>
    <div class="divider1"></div>
<?php
	require 'assets/inc/footer.php';
?>
