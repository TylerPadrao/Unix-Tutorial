<?php
	require 'assets/inc/header.php';
?>

    <!-- HEADER SECTION ENDS ABOVE, BASIC CONTENT BEGINS BELOW-->



    <div class="overview">
        <button class="nextbutton" onclick="location.href='cd.php'">
            <h6>Next Topic: <span style="font-weight:200">Changing Directories</span></h6>
        </button>
        <h1><b>Understanding Unix: Creating Directories</b></h1>
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
                <h2>mkdir</h2>
                <h4>Creating Directories</h4>
                <h4><i>Syntax: “mkdir [option] [directory]”</i></h4>
            </div>
            <div class="command-overview">
                <h4>Making a directory is a very important part of our computer’s file system.
                    A directory is very similar to a two pocket folder you use to hold papers.
                    Think as the directory being your two pocket folder and the papers inside of the folder
                    being your
                    files.
                    In your computer’s file system, a directory holds a collection of files.</h4>
            </div>
            <hr>
            <div class="command-content">
                <div class="commandflex-left">
                    <p>To make a directory within your computer’s file system, we can use the following command:
                        <br>
                        mkdir [option] [directory]
                        <br>
                        As you can see, we created a new directory named “first_directory”.
                    </p>
                </div>
                <div class="commandflex-right">
                    <pre>
                    <code class="code">
[student ~]$ mkdir first_directory
[student ~]$ ls
first_directory
[student ~]$ 
                    </code>
                    </pre>
                </div>
                <div class="commandflex-left">
                    <p>We can also use various options with the mkdir command. Some of the options include:<br>

                        -m (Set specific file mode like in chmod)<br>
                        -p (make parent directory if needed)<br>
                        -v (print message for each created command)<br>
                    </p>
                </div>
                <div class="commandflex-right">
                <pre>
                    <code>
[student ~]$ mkdir -m 755 first_directory
[student ~]$ ls -l
total 6
drwxr-xr-x. 1 student student 6 Feb 10 15:33 first_directory

                    </code></pre>
                </div>
                <div class="commandflex-left">
                    <p>
                        Using the “-m 755” within the command will make a file directory with file permissions set
                        to 755
                        allowing everyone to have read, write, and execute permissions (we will touch more on
                        permissions
                        later).
                    </p>
                </div>
                <div class="commandflex-right">  
<pre>
<code>
[student ~]$ mkdir -p first_directory/my_documents/resumes
[student ~]$ cd first_directory
[student ~/first_directory]$ ls
my_documents
[student ~/first_directory]$ cd my_documents
[student ~/first_directory/my_documents]$ ls
resumes
                    </code></pre>
                </div>
                <div class="commandflex-left">
                    <p>
                        Using the “-p /first_directories/my_documents/resumes” will create a missing parent directory if one of
                        them doesn’t exist. Without the “-p” option, creating a directory within a directory that
                        does not exist will throw an error.
                    </p>
                </div>
                <div class="commandflex-right">
                <pre>
                    <code>
[student ~]$ mkdir -v third_directory
mkdir: created directory 'thirs_directory'
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
