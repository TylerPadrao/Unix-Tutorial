<?php
	require 'assets/inc/header.php';
?>
  




    <div class="quiz" id="quiz8">
    <div class="qtitlebox"><h1 class="quiztitle">Test your Knowledge: <span style="font-weight:300; color:#7ba0c9;">File Editing & Permissions</span></h1>
    <button class="nextbutton" onclick="location.href='ssh.php'">
      <h6>Up Next: <span style="font-weight:200">Remote Servers</span></h6>
    </button>
    <h3 class="score"></h3>
    </div>




    <div class="question">
      <h4>
        If you have a file named file1.txt, how would you change the ownership of that file to an owner named newOwner?
      </h4>
    
    <form method="post" name="q1">

		<!-- Note the <label> tags below that allow the user to click on the text! -->
		<input type="radio" name="q1" value= "incorrect1" id="q1ans1"/><label for="q1ans1"> nano newOwner file1.txt</label><br>
		<input type="radio" name="q1" value= "correct" id="q1ans2"/><label for="q1ans2"> chown newOwner file1.txt</label><br>
		<input type="radio" name="q1" value= "incorrect2" id="q1ans3"/><label for="q1ans3"> chown file1.txt newOwner</label><br>
		<input type="radio" name="q1" value= "incorrect3" id="q1ans4"/><label for="q1ans4"> Nano file1.txt newOwner</label><br>
    </form>

    <!---Displays if the checked answer is incorrect-->
    <div class="incorrectResults" style="display:none;">

      <!---feedback for incorrect1-->
      <p class="incorrectOption">
        Not quite. Remember, Nano is a text editor. It is not the correct command to change the ownership of a file.      </p>
      
      <!---feedback for incorrect2-->
      <p class="incorrectOption">Incorrect.
        Close! Using chown is the correct command for changing ownership of a file. But, it is not used in the correct order.      </p>

      <!---feedback for incorrect3-->
      <p class="incorrectOption">Incorrect. 
        Not quite. Remember, Nano is a text editor. It is not the correct command to change the ownership of a file.      </p>
    </div>

    <!---Displays if the checked answer is correct-->
    <div class="correctResults" style="display:none;">
      <p>
        Correct! To change the ownership of a file, we can use the chown command followed by the new owner, and then the file name.     </p>
    </div>

  </div>



  <div class="question">
    <h4>You want to edit an html file in Unix, what command would you use to achieve this?

    </h4>
  
  <form method="post" name="q2">

  <!-- Note the <label> tags below that allow the user to click on the text! -->
  <input type="radio" name="q2" value="incorrect1" id="q2ans1"/><label for="q2ans1"> echo</label><br>
  <input type="radio" name="q2" value="incorrect2" id="q2ans2"/><label for="q2ans2"> chmod</label><br>
  <input type="radio" name="q2" value="correct" id="q2ans3"/><label for="q2ans3"> nano</label><br>
  <input type="radio" name="q2" value="incorrect3" id="q2ans4"/><label for="q2ans4"> ssh</label><br>
  </form>

     <!---Displays if the checked answer is incorrect-->
     <div class="incorrectResults" style="display:none;">

      <!---feedback for incorrect1-->
      <p class="incorrectOption">
        Not quite. Remember, echo is used to display output to the terminal.
      </p>
      
      <!---feedback for incorrect2-->
      <p class="incorrectOption">Incorrect.
        Close! Chmod is a command used to change file permissions and is not a text editor.
      </p>

      <!---feedback for incorrect3-->
      <p class="incorrectOption"> 
        Not quite. Remember, ssh is a command to log in to a remote server.
      </p>
    </div>

    <!---Displays if the checked answer is correct-->
    <div class="correctResults" style="display:none;">
      <p>Correct! To edit a text file in Unix, you can use nano which is a text editor in Unix.
      </p>
    </div>

</div>



<div class="question">
  <h4>What would be the command to allow owners to have read, write and execute permissions and also let the group have read and execute and to let others have read and execute permissions?


  </h4>

<form method="post" name="q3">

<!-- Note the <label> tags below that allow the user to click on the text! -->
<input type="radio" name="q3" value= "incorrect1" id="q3ans1"/><label for="q3ans1"> chmod 644</label><br>
<input type="radio" name="q3" value= "incorrect2" id="q3ans2"/><label for="q3ans2"> chmod 445</label><br>
<input type="radio" name="q3" value= "incorrect3" id="q3ans3"/><label for="q3ans3"> chmod 545</label><br>
<input type="radio" name="q3" value= "correct" id="q3ans4"/><label for="q3ans4"> chmod 755</label><br>
</form>

       <!---Displays if the checked answer is incorrect-->
    <div class="incorrectResults" style="display:none;">

      <!---feedback for incorrect1-->
      <p class="incorrectOption">
        Incorrect! Using the binary number chart, this value would not satisfy the permission requirements.
      </p>
      
      <!---feedback for incorrect2-->
      <p class="incorrectOption">
        Incorrect! Using the binary number chart, this value would not satisfy the permission requirements.
      </p>

      <!---feedback for incorrect3-->
      <p class="incorrectOption"> 
        Incorrect! Using the binary number chart, this value would not satisfy the permission requirements.
      </p>
    </div>

    <!---Displays if the checked answer is correct-->
    <div class="correctResults" style="display:none;">
      <p>
        Correct! To allow owners to have read, write, and execute permissions and allow the group and all others to have read and execute permissions, when using the permissions chart, the 755 decimal value will satisfy these conditions.
      </p>
    </div>


</div>




<div class="question">
  <h4>
    What option would you use to hide any error messages that may occur when changing file or directory permissions within the “/usr/bin” directory?

  </h4>

<form method="post" name="q4">

<!-- Note the <label> tags below that allow the user to click on the text! -->
<input type="radio" name="q4" value= "correct" id="q4ans1"/><label for="q4ans1"> chmod -f 755 /usr/bin</label><br>
<input type="radio" name="q4" value= "incorrect1" id="q4ans2"/><label for="q4ans2"> chmod -r 755 /usr/bin</label><br>
<input type="radio" name="q4" value= "incorrect2" id="q4ans3"/><label for="q4ans3"> chmod -c 755 /usr/bin</label><br>
<input type="radio" name="q4" value= "incorrect3" id="q4ans4"/><label for="q4ans4"> chmod -o 755 /usr/bin</label><br>
</form>

       <!---Displays if the checked answer is incorrect-->
    <div class="incorrectResults" style="display:none;">

      <!---feedback for incorrect1-->
      <p class="incorrectOption">
        Incorrect! The “-r” option is not used to hide any error messages, it is used to recursively change the file permissions of the current directory.
      </p>
      
      <!---feedback for incorrect2-->
      <p class="incorrectOption">
        Incorrect! The “-c” option is used to give output to the user only when a change to a file has been made.
      </p>

      <!---feedback for incorrect3-->
      <p class="incorrectOption"> 
        Incorrect! There is no “-o” option within the chmod command.
      </p>
    </div>

    <!---Displays if the checked answer is correct-->
    <div class="correctResults" style="display:none;">
      <p>
        Correct! To hide any error messages that may occur when changing file permissions within the “/usr/bin” directory, we can use the “-f” option.
      </p>
    </div>


</div>



<div class="question">
  <h4>
    What is the number for owners to write only, groups to have read and write and for others to have write and execute?

  </h4>

<form method="post" name="q5">

<!-- Note the <label> tags below that allow the user to click on the text! -->
<input type="radio" name="q5" value= "correct" id="q5ans1"/><label for="q5ans1"> 263</label><br>
<input type="radio" name="q5" value= "incorrect1" id="q5ans2"/><label for="q5ans2"> 437</label><br>
<input type="radio" name="q5" value= "incorrect2" id="q5ans3"/><label for="q5ans3"> 335</label><br>
<input type="radio" name="q5" value= "incorrect3" id="q5ans4"/><label for="q5ans4"> 226</label><br>
</form>

       <!---Displays if the checked answer is incorrect-->
    <div class="incorrectResults" style="display:none;">

      <!---feedback for incorrect1-->
      <p class="incorrectOption">
        Incorrect! Using the permissions chart, the decimal value 437 would not satisfy the conditions above.
      </p>
      
      <!---feedback for incorrect2-->
      <p class="incorrectOption">
        Incorrect! Using the permissions chart, the decimal value 335 would not satisfy the conditions above.
      </p>

      <!---feedback for incorrect3-->
      <p class="incorrectOption"> 
        Incorrect! Using the permissions chart, the decimal value 226 would not satisfy the conditions above.
      </p>
    </div>

    <!---Displays if the checked answer is correct-->
    <div class="correctResults" style="display:none;">
      <p>
        Correct! Using the permissions chart, the decimal value 263 would satisfy the conditions above.
      </p>
    </div>


</div>


<div class="question">
  <h4>
    From the examples shown below, which is the correct one to change the owner and the group of a file named homework.txt at the same time?

  </h4>

<form method="post" name="q6">

<!-- Note the <label> tags below that allow the user to click on the text! -->
<input type="radio" name="q6" value= "correct" id="q6ans1"/><label for="q6ans1"> chown newOwner:newGroup homework.txt</label><br>
<input type="radio" name="q6" value= "incorrect1" id="q6ans2"/><label for="q6ans2"> chown newOwner&newGroup homework.txt</label><br>
<input type="radio" name="q6" value= "incorrect2" id="q6ans3"/><label for="q6ans3"> chown newOwner-newGroup homework.txt</label><br>
<input type="radio" name="q6" value= "incorrect3" id="q6ans4"/><label for="q6ans4"> chown newOwner!newGroup homework.txt</label><br>
</form>

       <!---Displays if the checked answer is incorrect-->
    <div class="incorrectResults" style="display:none;">

      <!---feedback for incorrect1-->
      <p class="incorrectOption">
        Incorrect! The & symbol is not a valid option to combine two commands into one
      </p>
      
      <!---feedback for incorrect2-->
      <p class="incorrectOption">
        Incorrect! The - symbol is not a valid option to combine two commands into one
      </p>

      <!---feedback for incorrect3-->
      <p class="incorrectOption"> 
        Incorrect! The ! symbol is not a valid option to combine two commands into one
      </p>
    </div>

    <!---Displays if the checked answer is correct-->
    <div class="correctResults" style="display:none;">
      <p>
        Correct! The colon in Unix is used to combine two or more commands into one on a single line.
      </p>
    </div>


</div>




<button class="quizbutton" onclick="submitAnswers(quiz8);">Submit</button>
</div>
<?php
	require 'assets/inc/footer.php';
?>
