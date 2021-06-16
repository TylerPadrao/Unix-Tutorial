<?php
	require 'assets/inc/header.php';
?>




    <!-- HEADER SECTION ENDS ABOVE, BASIC CONTENT BEGINS BELOW-->



    <div class="overview">
        <button class="nextbutton" onclick="location.href='rm.php'">
            <h6>Next Topic: <span style="font-weight:200">Removing Files</span></h6>
        </button>
        <h1><b>Understanding Unix: Moving files or directories</b></h1>
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
                <h2>move</h2>
                <h4>Moving files or directories</h4>
                <h4><i>Syntax: “mv [options] Source Destination”</i></h4>
            </div>
            <div class="command-overview">
                <h4>The move command is very similar to the copy command. 
                    Instead of copying the a file from a source to destination, the move command moves a file from a source to a specific destination. 
                    Let’s use an example involving a person moving houses. You want to move houses, and to do so, this will require you to move all of your belongings from your old house to your new house. 
                    Similar to this example, the move command uses the same idea where you might move your directory (your belongings in your old house) to another location within the file system (your new house).</h4>
            </div>
            <hr>
            <div class="command-content">
                <div class="commandflex-left">
                    <p>To move a file or directory from one location to another, we can use the following command:
                        <br>
                        mv [options] Source Destination
                    </p>
                </div>
                <div class="commandflex-right">

                </div>
                <div class="commandflex-left">
                    <p>What if we want to move a file somewhere outside of our home directory? 
                        You can see the above command provides an absolute path for the source and destination. 
                        Since we are in our home directory, we are moving a file named “newFile.txt” within our “first_directory” to another directory called “my_documents”. 
                        Keep in mind you can use absolute paths to identify locations and destinations for many commands.
                    </p>
                </div>
                <div class="commandflex-right">
                    <pre>
                    <code class="code">
[student ~]$ mv first_directory/newFile.txt first_directory/my_documents
[student ~]$ cd first_directory
[student ~/first_directory]$ ls
my_documents
[student ~/first_directory]$ cd my_documents
newFile.txt
[student ~/first_directory/my_documents]$
                    </code>
                    </pre>
                </div>
                <div class="commandflex-left">
                    <p>
                        Some options we can use for the mv command are: <br>

                        -b (Create backup of existing destination file)<br>
                        -f (Don’t prompt if overwriting file)<br>
                        -i (Prompt before overwriting a file)<br>
                        -u (move file only if source file is newer than destination file)<br>
                        -n (Don’t overwrite file)<br>

                    </p>
                </div>
                <div class="commandflex-right">
                
                </div>
                <div class="commandflex-left">
                    <p>
                        The “-b” option is very similar to the option within the copy command. 
                        This option creates a backup of the destination file. What we are doing here is moving a file called “file1.txt” which is in our home directory into the “first_directory” and renamed the file “file2.txt”. 
                        Additionally, there is a backup file of the destination file (“file2.txt”) within “first_directory”.
                    </p>
                </div>
                <div class="commandflex-right">  
                <pre>
                    <code>
[student ~]$ mv -b file1.txt first_directory/file2.txt
[student ~]$ cd first_directory
[student ~/first_directory]$ ls
file2.txt
file2~.txt
[student ~/first_directory]$
                    </code></pre>
                </div>
                <div class="commandflex-left">
                    <p>
                    Using the “-f” command will force overwrite the destination file if there is an existing file with the same name. In this case, if there is an existing file called “fileB.txt” in “first_directory” and we move “fileA.txt” into the “first_directory” called “fileB.txt”, without prompting the user, “fileB.txt” will be overwritten by “fileA.txt”.
                    </p>
                </div>
                <div class="commandflex-right">
                <pre>
                    <code>
[student ~]$ mv -f fileA.txt first_directory/fileB.txt
[student ~]$ cd first_directory
[student ~/first_directory]$ ls
file2.txt
file2~.txt
fileB.txt (File that overwrites fileA.txt)
[student ~/first_directory]$
                    </code></pre>
                </div>
                <div class="commandflex-left">
                    <p>
                        The “-i” option is very similar to the “-f” option but instead of forcing the user to overwrite the file without prompting, using the “-i” option will prompt the user before overwriting the file. 
                        We are doing the exact same thing as before. 
                        We are trying to move a file called “fileA.txt” into the “first_directory” directory and renaming the file “fileB.txt”. There is already a file called “fileB.txt” in the “first_directory”. 
                        Before overwriting the file, the user will be prompted to ensure they want to overwrite the file. 
                    </p>
                </div>
                <div class="commandflex-right">
                <pre>
                    <code>
[student ~]$ mv -i fileA.txt first_Directory/fileB.txt
mv: overwrite ‘first_directory/fileB.txt’? 
[student ~]$ cd first_directory
[student ~/first_directory]$ ls
file2.txt
file2~.txt
fileB.txt (File that overwrites fileA.txt)
[student ~/first_directory]$
                    </code></pre>
                </div>
                <div class="commandflex-left">
                    <p>
                        If you want to move a handful of files to a new location and only want the most updated ones to transfer over, the “-u” option would be the best. 
                        In the example we are using above, fileA.txt is going to be moved from the home directory, into the “first_directory” renamed as “fileB.txt”. 
                        If “fileB.txt” exists, but is older than the source file, “fileB.txt” will be updated with the contents in the source file. (“fileA.txt”).  
                    </p>
                </div>
                <div class="commandflex-right">
                <pre>
                    <code>
[student ~]$ mv -u fileA.txt firstDirectory/fileB.txt
                    </code></pre>
                </div>
                <div class="commandflex-left">
                    <p>
                        Another useful option is the “-n” option. 
                        This option doesn’t overwrite an existing file. 
                        When we are trying to move “fileA.txt” into the “firstDirectory” and name it as “fileB.txt”, if “fileB.txt” exists, nothing will be done since the existing file will not be overwritten with the source file (“fileA.txt”).

                    </p>
                </div>
                <div class="commandflex-right">
                <pre>
                    <code>
[student ~]$ mv -n fileA.txt firstDirectory/fileB.txt”
                    </code></pre>
                </div>
            </div>
        </section>
    </div>
    <div class="divider1"></div>

<?php
	require 'assets/inc/footer.php';
?>
