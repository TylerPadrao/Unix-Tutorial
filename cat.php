<?php
	require 'assets/inc/header.php';
?>

    <!-- HEADER SECTION ENDS ABOVE, BASIC CONTENT BEGINS BELOW-->

    <div class="overview">
      <button class="nextbutton" onclick="location.href='quiz-files.php'">
        <h6>
          Next Topic:
          <span style="font-weight: 200">Files Quiz</span>
        </h6>
      </button>
      <h1><b>Understanding Unix: Viewing Content in Files</b></h1>
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
          <h2>cat</h2>
          <h4>Viewing content</h4>
          <h4><i>Syntax: cat [options] [file]</i></h4>
        </div>
        <div class="command-overview">
          <h4>
            Cat is short for concatenation. The purpose of the cat command is one of the most frequently used commands in Linux. The cat command allows you to create files, view contents of files and concatenate files as output to the terminal. 
          </h4>
        </div>
        <hr />
        <div class="command-content">
          <div class="commandflex-left">
            <p>
              Doing this will then open a file called test2 where you will be able to start adding content to the file. Imagine there is already text in the file.
            </p>
          </div>
          <div class="commandflex-right">
            <pre>
                    <code class="code">
[student ~]$ cat > test2
                    </code>
                    </pre>
          </div>
          <div class="commandflex-left">
            <p>
              This will redirect the content of the file and then output it to the terminal so you, the user can read its contents.
            </p>
          </div>
          <div class="commandflex-right">
            <pre>
                    <code>
[student ~]$ cat test2

hello everyone, how are you doing?
                    </code></pre>
          </div>
          <!-- <div class="commandflex-left">
            <p>
              This will redirect the content of the file and then output it to the terminal so you, the user can read its contents.
            </p>
          </div>
          <div class="commandflex-right">
            <pre>
                <code>
[apl4184 ~/Document]$ ls
                    </code></pre>
          </div>
          <div class="commandflex-left">
            <p>
              There are a couple options that can be paired with this command.
              But, they are rarely used and somewhat unnecessary for you as
              ISTE140 students to know.
            </p>
          </div> -->
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