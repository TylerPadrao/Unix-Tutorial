<?php
	require 'assets/inc/header.php';
?>

    <!-- HEADER SECTION ENDS ABOVE, BASIC CONTENT BEGINS BELOW-->



    <div class="overview">
        <button class="nextbutton" onclick="location.href='cat.php'">
            <h6>Next Topic: <span style="font-weight:200">Viewing content in files</span></h6>
        </button>
        <h1><b>Understanding Unix: Listing Files</b></h1>
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
                <h2>ls</h2>
                <h4>List Command</h4>
                <h4><i>Syntax: “ls [options] [file|dir]”</i></h4>
            </div>
            <div class="command-overview">
                <h4>The listing command lists different files within a specific directory. 
                    Let’s say a student wants to see what worksheets are in their two pocket folder. 
                    To see all the papers within the folder, the student has to remove the files and spread them out. 
                    The listing command will show what files and subdirectories are within a directory..</h4>
            </div>
            <hr>
            <div class="command-content">
                <div class="commandflex-left">
                    <p>To list files and subdirectories within a specific directory, we can use the following command:
                        <br>
                        Ls [option] [file|dir]
                    </p>
                </div>
                <div class="commandflex-right">
                    <pre>
                    <code class="code">
[student ~]$ ls
first_directory
second_directory
Pictures
newFile1.txt 
newFile2.txt
[student ~]$ 
                    </code>
                    </pre>
                </div>
                <div class="commandflex-left">
                    <p>What we just did was list our picture files within our “Pictures” directory. You can see every image file within the “Pictures” directory.
                    </p>
                </div>
                <div class="commandflex-right">
                <pre>
                    <code>
[student ~]$ ls Pictures
Screenshot from 2021-01-26 16-26-55.png
Screenshot from 2021-01-26 16-26-56.png
Screenshot from 2021-01-26 16-31-13.png
Screenshot from 2021-01-26 16-31-15.png
Screenshot from 2021-01-27 11-34-25.png
Wallpapers
                    </code></pre>
                </div>
                <div class="commandflex-left">
                    <p>
                        Some options we can use for the ls command are:<br>

                        -l (Displays long listing format of files and shows permissions of each file)<br>
                        -r (Lists files in reverse order)<br>
                        -s (Listing files and their sizes)<br>
                        -S (Sorts files by size)<br>
                        -t (Sorts files by date and time)<br>

                    </p>
                </div>
                <div class="commandflex-right">  
               
                </div>
                <div class="commandflex-left">
                    <p>
                        The “-l” is providing a long listing of each file within the Pictures directory. S
                        tarting from left to right, we can see if the listing is a file (indicated with a “-”) or a directory (indicated with a “d”) which you see in field 1. 
                        In field 2, we can view the file permissions within the specific listing. 
                        In field 3, we can see the number of links or directories inside the current directory. 
                        In field 4, we can see the user that owns the file or directory. 
                        In field 5, we can see the group and who the file belongs to. 
                        In field 6, we can view the size in bytes of the file. 
                        In field 7, we can see the date and time of last modification to file. 
                        In field 8, we can see the name of the file.
                    </p>
                </div>
                <div class="commandflex-right">
                <pre>
                    <code>
[student ~]$ ls -l Pictures
total 2360
-rw-rw-r--. 1 student student 338015 Jan 26 16:26 Screenshot from 2021-01-26 16-26-55.png
-rw-rw-r--. 1 student student 338015 Jan 26 16:26 Screenshot from 2021-01-26 16-26-56.png
-rw-rw-r--. 1 student student 419233 Jan 26 16:31 Screenshot from 2021-01-26 16-31-13.png
-rw-rw-r--. 1 student student 421286 Jan 26 16:31 Screenshot from 2021-01-26 16-31-15.png
-rw-rw-r--. 1 student student 891479 Jan 27 11:34 Screenshot from 2021-01-27 11-34-25.png
drwxr-xr-x. 2 student student     50 Jan  6  2020 Wallpapers
[student ~]$
                    </code></pre>
                </div>
                <div class="commandflex-left">
                    <p>
                        When you run the ls command, UNIX automatically sorts the files and directories by alphabetical order. 
                        The -r option sorts alphabetically, but in reverse order. 
                    </p>
                </div>
                <div class="commandflex-right">
                <pre>
                    <code>
[student ~]$ ls -r Pictures
Wallpapers
Screenshot from 2021-01-26 16-31-15.png
Screenshot from 2021-01-26 16-26-56.png
Screenshot from 2021-01-27 11-34-25.png
Screenshot from 2021-01-26 16-31-13.png
Screenshot from 2021-01-26 16-26-55.png
[student ~]$
                    </code></pre>
                </div>
                <div class="commandflex-left">
                    <p>
                        Viewing file sizes are nice, but what if you want them sorted by size? 
                        You can use the “-S” command to sort a directory of files from largest to smallest sizes. 
                        This is very helpful to possibly implement which files should load first on a website. 
                        Users want content that will load quickly and efficiently, without eating too much of their data.
                    </p>
                </div>
                <div class="commandflex-right">
                <pre>
                    <code>
[student ~]$ ls -S Pictures
Screenshot from 2021-01-27 11-34-25.png
Screenshot from 2021-01-26 16-31-13.png
Screenshot from 2021-01-26 16-26-56.png
Screenshot from 2021-01-26 16-31-15.png 
Screenshot from 2021-01-26 16-26-55.png
Wallpapers
[student ~]$
                    </code></pre>
                </div>
                <div class="commandflex-left">
                    <p>
                        Another useful sorting technique is sorting by a timestamp of when the file was last modified. 
                        The “-t” command sorts files from newest modification time, to oldest. 
                        This is a very useful command to print out any old files that may need to be updated such as specific .html files.
                    </p>
                </div>
                <div class="commandflex-right">
                <pre>
                    <code>
[student ~]$ ls -t Pictures
Screenshot from 2021-01-27 11-34-25.png
Screenshot from 2021-01-26 16-31-13.png
Screenshot from 2021-01-26 16-26-55.png
Screenshot from 2021-01-26 16-31-15.png
Screenshot from 2021-01-26 16-26-56.png 
Wallpapers
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
