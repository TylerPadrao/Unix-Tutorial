<?php
	require 'assets/inc/header.php';
?>
  




    <div class="quiz" id="quiz4">
    <div class="qtitlebox"><h1 class="quiztitle">Test your Knowledge: <span style="font-weight:300; color:#7ba0c9;">Where did it go?</span></h1>
    <button class="nextbutton" onclick="location.href='echo.php'">
      <h6>Up Next: <span style="font-weight:200">Printing in Unix</span></h6>
    </button>
    <h3 class="score"></h3>
    </div>




    <div class="question">
      <h4>How would you find a file named example.txt?
      </h4>
    
    <form method="post" name="q1">

		<!-- Note the <label> tags below that allow the user to click on the text! -->
		<input type="radio" name="q1" value= "correct" id="q1ans1"/><label for="q1ans1"> find .-name example.txt</label><br>
		<input type="radio" name="q1" value= "incorrect1" id="q1ans2"/><label for="q1ans2"> find_-name example.txt</label><br>
		<input type="radio" name="q1" value= "incorrect2" id="q1ans3"/><label for="q1ans3"> find $-name example.txt</label><br>
		<input type="radio" name="q1" value= "incorrect3" id="q1ans4"/><label for="q1ans4"> find!-name example.txt</label><br>
    </form>

    <!---Displays if the checked answer is incorrect-->
    <div class="incorrectResults" style="display:none;">

      <!---feedback for incorrect1-->
      <p class="incorrectOption">
        The syntax is incorrect and will not work in the terminal. You were close, please try again.
      </p>
      
      <!---feedback for incorrect2-->
      <p class="incorrectOption">
        The syntax is incorrect. Using a $ will not give you the desired outcome for this question. 
      </p>

      <!---feedback for incorrect3-->
      <p class="incorrectOption">
        An ! is not the correct syntax for finding files. You were close with your answer but just missed the target.

      </p>
    </div>

    <!---Displays if the checked answer is correct-->
    <div class="correctResults" style="display:none;">
      <p>Correct! A Using the “.-name” is the correct syntax for finding a file name. In this case, we are finding example.txt.</p>
    </div>

  </div>



  <div class="question">
    <h4>What variation of the find command will search for php files only in your current directory
    </h4>
  
  <form method="post" name="q2">

  <!-- Note the <label> tags below that allow the user to click on the text! -->
  <input type="radio" name="q2" value="incorrect1" id="q2ans1"/><label for="q2ans1"> find -.name "php"</label><br>
  <input type="radio" name="q2" value="correct" id="q2ans2"/><label for="q2ans2"> find . -type f -name "*.php"</label><br>
  <input type="radio" name="q2" value="incorrect2" id="q2ans3"/><label for="q2ans3"> find !-type -d -name "php"</label><br>
  <input type="radio" name="q2" value="incorrect3" id="q2ans4"/><label for="q2ans4"> find $-type -name 'php</label><br>
  </form>

     <!---Displays if the checked answer is incorrect-->
     <div class="incorrectResults" style="display:none;">

      <!---feedback for incorrect1-->
      <p class="incorrectOption">
        Not quite. This command looks for files named php not files that are php types.
      </p>
      
      <!---feedback for incorrect2-->
      <p class="incorrectOption">Incorrect.
        Close! Using a ! is not the correct syntax and also, type d will be looking for directories instead of file types
      </p>

      <!---feedback for incorrect3-->
      <p class="incorrectOption"> 
        Almost! Using a $ is incorrect syntax and you need to use “-type f” or “-type d” for the command to work.
      </p>
    </div>

    <!---Displays if the checked answer is correct-->
    <div class="correctResults" style="display:none;">
      <p>
        Correct! Since you are looking for files that end with .php, you will need type f for file types. Also, you will need an asterisk at the beginning of .php so it will look for files that end with .php

      </p>
    </div>

</div>



<div class="question">
  <h4>
    What command will find files with the permissions with 755 in the / directory
  </h4>

<form method="post" name="q3">

<!-- Note the <label> tags below that allow the user to click on the text! -->
<input type="radio" name="q3" value= "incorrect1" id="q3ans1"/><label for="q3ans1"> find # -type d -per, 0755 -print</label><br>
<input type="radio" name="q3" value= "incorrect2" id="q3ans2"/><label for="q3ans2"> find ! -type f -perm 0755 -print</label><br>
<input type="radio" name="q3" value= "correct" id="q3ans3"/><label for="q3ans3"> find / -type f -perm 0755 -print</label><br>
<input type="radio" name="q3" value= "incorrect3" id="q3ans4"/><label for="q3ans4"> find / -type d 0755 -print</label><br>
</form>

       <!---Displays if the checked answer is incorrect-->
    <div class="incorrectResults" style="display:none;">

      <!---feedback for incorrect1-->
      <p class="incorrectOption">
        Close! Using # is incorrect syntax and type d is for directories and not files.</p>
      
      <!---feedback for incorrect2-->
      <p class="incorrectOption">Incorrect.
        Close! But you used a ! and that is incorrect syntax.
      </p>

      <!---feedback for incorrect3-->
      <p class="incorrectOption"> 
        You were so close! Just to make sure to use -type f for files instead of -type d for directories
      </p>
    </div>

    <!---Displays if the checked answer is correct-->
    <div class="correctResults" style="display:none;">
      <p>
        Since it is in the / directory, the / is needed so it knows the directory to search in and you need -perm for the find command to check files with those permissions.
      </p>
    </div>


</div>



<div class="question">
  <h4>
    What command will find the Picture directory in the / directory?
  </h4>

<form method="post" name="q4">

<!-- Note the <label> tags below that allow the user to click on the text! -->
<input type="radio" name="q4" value= "correct" id="q4ans1"/><label for="q4ans1"> find / -type d -name Picture</label><br>
<input type="radio" name="q4" value= "incorrect1" id="q4ans2"/><label for="q4ans2"> find / -type r -name Picture</label><br>
<input type="radio" name="q4" value= "incorrect2" id="q4ans3"/><label for="q4ans3"> find / -type f -name Picture</label><br>
<input type="radio" name="q4" value= "incorrect3" id="q4ans4"/><label for="q4ans4"> find / -type m -name Picture</label><br>
</form>

       <!---Displays if the checked answer is incorrect-->
    <div class="incorrectResults" style="display:none;">

      <!---feedback for incorrect1-->
      <p class="incorrectOption">
        Incorrect! -type r is an invalid option and has no use for the find command
      </p>
      
      <!---feedback for incorrect2-->
      <p class="incorrectOption">
        Close! What you selected would be the command to find files named picture, not directories named picture.
      </p>

      <!---feedback for incorrect3-->
      <p class="incorrectOption"> 
        Incorrect! -type m is an invalid option for the find command and does nothing for the find command.
      </p>
    </div>

    <!---Displays if the checked answer is correct-->
    <div class="correctResults" style="display:none;">
      <p>Correct! You need -type d in the command since you are trying to find a directory.

    </p>
    </div>


</div>









<button class="quizbutton" onclick="submitAnswers(quiz4);">Submit</button>
</div>
<?php
	require 'assets/inc/footer.php';
?>
