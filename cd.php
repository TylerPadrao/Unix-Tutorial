<?php
	require 'assets/inc/header.php';
?>

    <!-- HEADER SECTION ENDS ABOVE, BASIC CONTENT BEGINS BELOW-->

    <div class="overview">
      <button class="nextbutton" onclick="location.href='pwd.php'">
        <h6>
          Next Topic:
          <span style="font-weight: 200">Printing Working Directories</span>
        </h6>
      </button>
      <h1><b>Understanding Unix: Change Directories</b></h1>
      <p>
        Understanding many basic Unix commands is very useful and important for
        your web development career. Within these lessons, we will dive deeper
        into Directories and Files. We will also get to see how we can see our
        command history and who the current user is.
      </p>
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
          <h2>cd</h2>
          <h4>Change Directories</h4>
          <h4><i>Syntax: cd [options] [directory]</i></h4>
        </div>
        <div class="command-overview">
          <h4>
            The cd command is a very useful and very easy command to learn so
            you can change between the different current directories within your
            filesystem.
          </h4>
        </div>
        <hr />
        <div class="command-content">
          <div class="commandflex-left">
            <p>
              This will change your directory from your home directory to the
              "first_directory" directory.
            </p>
          </div>
          <div class="commandflex-right">
            <pre>
                    <code class="code">
[student ~]$ cd first_directory
[student ~/first_directory]$
                    </code>
                    </pre>
          </div>
          <div class="commandflex-left">
            <p>
              This is a nice and quick way to change back to your home directory
            </p>
          </div>
          <div class="commandflex-right">
            <pre>
                    <code>
[student ~/first_directory]$ cd ~
[student ~]$ ls 
first_directory 
[student ~]$ 
                    </code></pre>
          </div>
          <div class="commandflex-left">
            <p>
              This shortcut will move you up one directory in case you want to
              move to another directory inside the directory above your current
              directory.
            </p>
          </div>
          <div class="commandflex-right">
            <pre>
                <code>
[student ~]$ cd ..
[student ~/home]$ ls
student
[student ~/home]$ cd student
[student ~]$
                    </code></pre>
          </div>
          <div class="commandflex-left">
            <p>
              There are a couple options that can be paired with this command.
              But, they are rarely used and somewhat unnecessary for you as
              ISTE140 students to know.
            </p>
          </div>
          <!-- <div class="commandflex-right">
                <pre>
                    <code>

                    </code></pre>
                </div> -->
        </div>
      </section>
    </div>
    <div class="divider1"></div>
<?php
	require 'assets/inc/footer.php';
?>