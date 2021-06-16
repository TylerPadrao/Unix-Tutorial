<?php
	require 'assets/inc/header.php';
?>

    <!-- HEADER SECTION ENDS ABOVE, BASIC CONTENT BEGINS BELOW-->



    <div class="overview">
        <button class="nextbutton" onclick="location.href='quiz-directories.php'">
            <h6>Next Topic: <span style="font-weight:200">Directories Quiz</span></h6>
        </button>
        <h1><b>Understanding Unix: Viewing Content in Directories</b></h1>
        <p>Understanding many basic Unix commands is very useful and important for
        your web development career. Within these lessons, we will dive deeper
        into Directories and Files. We will also get to see how we can see our
        command history and who the current user is.</p>

    </div>
    <div class="divider"></div>
    <div class="intro">
      <div class="intro-text">
        <h2>Beginner Command List</h2>
      </div>
      <div class="all-list">
        <div>
          <table class="for-all-content">
            <tr>
              <th>mkdir</th>
              <td>Creating Directories</td>
            </tr>
            <tr>
              <th>cd</th>
              <td>Change Directories</td>
            </tr>
            <tr>
              <th>pwd</th>
              <td>Print Working Directory</td>
            </tr>
            <tr>
              <th>dir</th>
              <td>Viewing Content in Directories</td>
            </tr>
          </table>
        </div>
        <div>
          <table class="for-all-content">
            <tr>
              <th>ls</th>
              <td>Listing Files</td>
            </tr>
            <tr>
              <th>cat</th>
              <td>Viewing Content in Files</td>
            </tr>
            <tr>
              <th>history</th>
              <td>Viewing past commands</td>
            </tr>
            <tr>
              <th>whoami</th>
              <td>Identifying current user</td>
            </tr>
          </table>
        </div>
      </div>
    </div>

    <hr />
    <hr />

    <div class="command">
        <section>
            <div class="command-head">
                <h2>dir</h2>
                <h4>Viewing Content in Directories</h4>
                <h4><i>Syntax: “dir [option] [directory]”</i></h4>
            </div>
            <div class="command-overview">
                <h4>This command is similar to the ls command but outputs in a different format. 
                    By default, the dir command lists the contents alphabetically in columns with special characters using backslash escape sequences. </h4>
            </div>
            <hr>
            <div class="command-content">
                <div class="commandflex-left">
                    <p>To list the contents of the directory, we can use the following command:
                        <br>
                        dir [option] [directory]
                        <br>
                        This lists the contents of the directory much like the ls command. 
                    </p>
                </div>
                <div class="commandflex-right">
                    <pre>
                    <code class="code">
[student ~]$ cd first_directory
[student ~/first_directory]$ dir
resumes
[student ~/first_directory]$ 
                    </code>
                    </pre>
                </div>
                <div class="commandflex-left">
                    <p>
                        We can also use various options with the mkdir command. Some of the options include:<br>
                        
                        -a (lists all files including the hidden ones)<br>
                        --color (colors the output like the ls command does)<br>
                        -F (classifies what each object is. Directory, executable, etc.)<br>
                        --group-directories-first (groups directories before files)<br>
                        -R (Recursive output. Goes through all subdirectories)<br>
                        <br>
                        This will show all hidden files and directories, as well as, the known files and directories.
                        
                    </p>
                </div>
                <div class="commandflex-right">
                <pre>
                    <code>
[student ~]$ cd ~
[student ~]$ dir -a first_directory
.  ..  resumes
[student ~]$ 
                    </code></pre>
                </div>
                <div class="commandflex-left">
                    <p>
                        This will color the output much like the default coloring from the ls command output.
                    </p>
                </div>
                <div class="commandflex-right">  
<pre>
<code>
[student ~]$ dir --color first_directory
resumes
[student ~]$ 
                    </code></pre>
                </div>
                <div class="commandflex-left">
                    <p>
                        When you run the dir command with this flag, it will have a marker on every object in the output to denote what kind of object it is (file, directory, executable, etc.).

                    </p>
                </div>
                <div class="commandflex-right">
                <pre>
                    <code>
[student ~]$ dir -F first_directory
resumes/
[student ~]$ 
                    </code></pre>
                </div>
                <div class="commandflex-left">
                    <p>
                        Lets make another file with the "mkdir" command. We will also create two new empty files using the "touch" command.
                        This is the normal dir output but it will group all the directories together at the top of the output. 

                    </p>
                </div>
                <div class="commandflex-right">
                <pre>
                    <code>
[student ~]$ mkdir second_directory
[student ~]$ touch newFile1.txt
[student ~]$ touch newFile2.txt
[student ~]$ dir --group-directories-first
first_directory
second_directory
newFile1.txt
newFile2.txt
                    </code></pre>
                </div>
                <div class="commandflex-left">
                    <p>
                        When you run the dir command with this flag, it will not only list the files and directories of first_directory, but all the files in all the directories in first_directory. 

                    </p>
                </div>
                <div class="commandflex-right">
                <pre>
                    <code>
[student ~]$ dir -R first_directory
first_directory:
resumes

first_directory/resumes:
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