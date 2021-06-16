<?php
	require 'assets/inc/header.php';
?>

    <!-- HEADER SECTION ENDS ABOVE, BASIC CONTENT BEGINS BELOW-->



    <div class="overview">
        <button class="nextbutton" onclick="location.href='mv.php'">
            <h6>Next Topic: <span style="font-weight:200">Moving Files and Directories</span></h6>
        </button>
        <h1><b>Understanding Unix: Copying files or directories</b></h1>
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
                <h2>cp</h2>
                <h4>Copying files and directories</h4>
                <h4><i>Syntax: “cp [options] Source Destination”</i></h4>
            </div>
            <div class="command-overview">
                <h4>The copy command is used to copy a file, multiple files, or a directory from one location to another. 
                    Continuing to use the two pocket folder example. Let’s say a student wants to use a copier machine to copy a resume. 
                    The student has an interview soon and wants to provide a copy of his resume, but also keep a copy for himself. 
                    The student puts the resume in the machine, then has a duplicate copy of his resume. 
                    The student will then place the original copy of his resume back into his personal folder, and also place the duplicate copy into another folder for his potential employer. 
                    Similar to this example, the copy command uses the same technique where you can copy a file from one location to another.</h4>
            </div>
            <hr>
            <div class="command-content">
                <div class="commandflex-left">
                    <p>To copy a file or directory from one location to another, we can use the following command:
                        <br>
                        cp [options] Source Destination
                    </p>
                </div>
                <div class="commandflex-right">
                    <pre>
                    <code class="code">
cp [options] Source Destination
                    </code>
                    </pre>
                </div>
                <div class="commandflex-left">
                    <p>To copy multiple files or directories from one location to another, we can use the following command:
                        <br>
                        cp [options] Source1 Source2 SourceN Destination
                    </p>
                </div>
                <div class="commandflex-right">
                    <pre>
                    <code class="code">
cp [options] Source1 Source2 SourceN Destination
                    </code>
                    </pre>
                </div>
                <div class="commandflex-left">
                    <p>Lets create a new file called "file1.txt" and also a new directory called "newLocation". Once we create this new file and directory, this command copies the file named “file1.txt” from its current location to another directory called “newLocation”. 
                        The file will still exist in its current location, but also be copied to its new location.
                    </p>
                </div>
                <div class="commandflex-right">
                <pre>
                    <code>
[student ~]$ touch file1.txt
[student ~]$ mkdir newLocation
[student ~]$ cp file1.txt newLocation
[student ~]$ cd newLocation
[student ~/newLocation]$ ls
file1.txt
[student ~/newLocation]$
                    </code></pre>
                </div>
                <div class="commandflex-left">
                    <p>
                        Lets create a couple more files called "file2.txt" and "file3.txt". This command copies multiple files named “file1.txt”, “file2.txt”, “file3.txt” from its current location to another directory called “newLocation”. 
                        The files will still exist in its current location, but also be copied to its new location.
                    </p>
                </div>
                <div class="commandflex-right">  
                <pre>
                    <code>
[student ~]$ touch file2.txt
[student ~]$ touch file3.txt
[student ~]$ cp file1.txt file2.txt file3.txt newLocation
[student ~]$ cd newLocation
[student ~/newLocation]$ ls
file1.txt
file2.txt
file3.txt
[student ~/newLocation]$
                    </code></pre>
                </div>
                <div class="commandflex-left">
                    <p>
                        Some options we can use for the cp command are: <br>

                        -b (Create backup of destination file with a different naming convention)<br>
                        -f (If the user’s writing permissions are denied, delete destination file then copy content from source to destination)<br>
                        -r (Recursively copy files from source directory to destination)<br>
                        -p (Does not modify last data modification time, ownership, or data bits)<br>
                        -i (Warns the user before overwriting the destination file)<br>

                    </p>
                </div>
                <div class="commandflex-right">
                    
                </div>
                <div class="commandflex-left">
                    <p>
                        Lets start off by creating a new file called "fileA.txt". It is always a good idea to create a backup file, just in case something happens to the regular file, such as corruption. 
                        The “-b” option allows you to create a backup destination file, but under a different naming convention. 
                        This command is copying the contents of “fileA.txt” to a file called “fileB.txt”, but also creating a backup file which is “fileB.txt~”. 
                        Keep in mind the source file which is “fileA.txt” is being copied into the “firstDirectory” directory which contains “fileB.txt” and “fileB.txt~”.
                    </p>
                </div>
                <div class="commandflex-right">
                <pre>
                    <code>
[student ~]$ touch fileA.txt
[student ~]$ cp -b fileA.txt first_directory/fileB.txt”
[student ~]$ cd first_directory
[student ~/first_directory]$ ls
fileB.txt
fileB~.txt
gerry.txt
resumes
                    </code></pre>
                </div>
                <div class="commandflex-left">
                    <p>
                        If you don’t have file writing permissions for the destination file (“fileB.txt”), the “-f” option will force the destination file to be deleted then copy the file content from “fileA.txt” to “fileB.txt”.
                    </p>
                </div>
                <div class="commandflex-right">
                <pre>
                    <code>
[student ~]$ cat fileA.txt
Hello there!
[student ~]$ cat fileB.txt
Good bye!
[student ~]$ cp -f fileA.txt fileB.txt”
[student ~]$ cat fileB.txt
Hello there!
[student ~]$
                    </code></pre>
                </div>
                <div class="commandflex-left">
                    <p>
                        What if you don’t want to copy every file one at a time from a directory to a new location? 
                        We’re not trying to promote laziness but using the “-r” option will recursively copy every file from “existingDirectory” to a directory called “newDirectory”. 
                        This option makes it easy to copy a whole directory of files instead of each file one at a time which could get tedious. 

                    </p>
                </div>
                <div class="commandflex-right">
                <pre>
                    <code>
[student ~]$ mkdir existingDirectory
[student ~]$ mkdir newDirectory
[student ~]$ cd existingDirectory
[student ~/existingDirectory]$ touch newFile1.txt newFile2.txt newFile3.txt
[student ~/existingDirectory]$ ls
newFile1.txt
newFile2.txt
newFile3.txt
[student ~/existingDirectory]$ cd ..
[student ~]$ cp -r existingDirectory newDirectory
[student ~]$ cd newDirectory
[student ~/newDirectory]$ ls
newFile1.txt
newFile2.txt
newFile3.txt
[student ~/newDirectory]$
                    </code></pre>
                </div>
                <div class="commandflex-left">
                    <p>
                        Another useful option is the “-p” option. When copying “fileA.txt” to “fileB.txt”, the modification time stamp, ownership, or data bits could be changed. 
                        To prevent this, using the “-p” option will ignore modifying any of the file properties. 
                        This could be useful since you're not actually modifying the file in most cases, you’re just copying the file which most people do not consider as “modifying”. 
                        This means “fileA.txt” will still have the same properties as “fileB.txt” when copied over.

                    </p>
                </div>
                <div class="commandflex-right">
                <pre>
                    <code>
[student ~]$ ls -l
-rw-rw-r--. 1 student student        134 May  7 09:52 fileA.txt
-rw-rw-r--. 1 student student        136 May  7 09:54 fileB.txt
[student ~]$ cp -p fileA.txt fileB.txt
[student ~]$ ls -l
-rw-rw-r--. 1 student student        134 May  7 09:52 fileA.txt
-rw-rw-r--. 1 student student        134 May  7 09:54 fileB.txt
[student ~]$
                    </code></pre>
                </div>
                <div class="commandflex-left">
                    <p>
                        A simple command could be dangerous in some cases. 
                        What if you accidentally overwrite an important file? Using the “-i” option will warn the user and prompt them before overwriting the destination file. 
                        If the user types “y” after the prompt, this will give the command permission to overwrite the file. 
                        Anything other than “y” will not execute the destination file. 
                        In the example above, if “fileB.txt” already exists and the user presses “y” after prompting, this will give the system permission to overwrite “fileB.txt” with the contents of “fileA.txt”.

                    </p>
                </div>
                <div class="commandflex-right">
                <pre>
                    <code>
[student ~]$ cp -i fileA.txt fileB.txt
cp: overwrite ‘fileB.txt’? 
[student ~]$
                    </code></pre>
                </div>
            </div>
        </section>
    </div>
    <div class="divider1"></div>

<?php
	require 'assets/inc/footer.php';
?>