<?php
	require 'assets/inc/header.php';
?>
  




    <div class="quiz" id="quiz7">
    <div class="qtitlebox"><h1 class="quiztitle">Test your Knowledge: <span style="font-weight:300; color:#7ba0c9;">Remote Servers</span></h1>
    <h3 class="score"></h3>
    </div>




    <div class="question">
      <h4>
        In the future, you will need to connect to solace to upload some of your work. Demonstrate your knowledge of the ssh command and choose the correct answer.
      </h4>
    
    <form method="post" name="q1">

		<!-- Note the <label> tags below that allow the user to click on the text! -->
		<input type="radio" name="q1" value= "correct" id="q1ans1"/><label for="q1ans1"> ssh [your username]@solace.ist.rit.edu</label><br>
		<input type="radio" name="q1" value= "incorrect1" id="q1ans2"/><label for="q1ans2"> ssh solace.ist.rit.edu</label><br>
		<input type="radio" name="q1" value= "incorrect2" id="q1ans3"/><label for="q1ans3"> solace.ist.rit.edu ssh</label><br>
		<input type="radio" name="q1" value= "incorrect3" id="q1ans4"/><label for="q1ans4"> [your username] ssh solace.ist.rit.edu</label><br>
    </form>

    <!---Displays if the checked answer is incorrect-->
    <div class="incorrectResults" style="display:none;">

      <!---feedback for incorrect1-->
      <p class="incorrectOption">
        Not quite. Ssh is the correct command to use, but you are forgetting a key piece to the puzzle to log into a specific user...
      </p>
      
      <!---feedback for incorrect2-->
      <p class="incorrectOption">Incorrect.
        Not quite. Ssh is the correct command to use, but you are forgetting a key piece to the puzzle to log into a specific user...
      </p>

      <!---feedback for incorrect3-->
      <p class="incorrectOption">Incorrect. 
        Close! You have your username, the ssh command, and the server name. But remember, this is not the correct order of each of these fields.
      </p>
    </div>

    <!---Displays if the checked answer is correct-->
    <div class="correctResults" style="display:none;">
      <p>
        To connect to a remote server such as Solace, you would have to use the ssh command followed by your user name, a “@” symbol, then lastly the server name (RIT’s Solace server).      </p>
    </div>

  </div>



  <div class="question">
    <h4>What is the main use of the ssh command?

    </h4>
  
  <form method="post" name="q2">

  <!-- Note the <label> tags below that allow the user to click on the text! -->
  <input type="radio" name="q2" value="correct" id="q2ans1"/><label for="q2ans1"> It is used for remote login and execution of command-line functions.</label><br>
  <input type="radio" name="q2" value="incorrect1" id="q2ans2"/><label for="q2ans2"> Used to change file permissions</label><br>
  <input type="radio" name="q2" value="incorrect2" id="q2ans3"/><label for="q2ans3"> Ssh is used to view network traffic</label><br>
  <input type="radio" name="q2" value="incorrect3" id="q2ans4"/><label for="q2ans4"> Ssh is used edit your files</label><br>
  </form>

     <!---Displays if the checked answer is incorrect-->
     <div class="incorrectResults" style="display:none;">

      <!---feedback for incorrect1-->
      <p class="incorrectOption">
        Not quite. Remember, chmod is used to change file permissions and is not the main use of ssh.
      </p>
      
      <!---feedback for incorrect2-->
      <p class="incorrectOption">Incorrect.
        Close! Ssh is not used to view network traffic.
      </p>

      <!---feedback for incorrect3-->
      <p class="incorrectOption"> 
        Not quite. Nano is used for text editing and is not the main purpose of ssh.
      </p>
    </div>

    <!---Displays if the checked answer is correct-->
    <div class="correctResults" style="display:none;">
      <p>Correct! ssh stands for secure shell protocol and is commonly used for secure connection and login to servers remotely.
      </p>
    </div>

</div>



<div class="question">
  <h4>What option for ssh can we use to connect to a remote server through port 3333?

  </h4>

<form method="post" name="q3">

<!-- Note the <label> tags below that allow the user to click on the text! -->
<input type="radio" name="q3" value= "incorrect1" id="q3ans1"/><label for="q3ans1"> ssh username@solace.ist.rit.edu -f 3333</label><br>
<input type="radio" name="q3" value= "correct" id="q3ans2"/><label for="q3ans2"> ssh username@solace.ist.rit.edu -p 3333</label><br>
<input type="radio" name="q3" value= "incorrect2" id="q3ans3"/><label for="q3ans3"> ssh username@solace.ist.rit.edu -c 3333</label><br>
<input type="radio" name="q3" value= "incorrect3" id="q3ans4"/><label for="q3ans4"> ssh username@solace.ist.rit.edu -d 3333</label><br>
</form>

       <!---Displays if the checked answer is incorrect-->
    <div class="incorrectResults" style="display:none;">

      <!---feedback for incorrect1-->
      <p class="incorrectOption">
        Incorrect! This option will put ssh in the background and is not used to connect to a server.
      </p>
      
      <!---feedback for incorrect2-->
      <p class="incorrectOption">
        Incorrect! The -c option is for advanced linux users and goes beyond the scope of this course.
      </p>

      <!---feedback for incorrect3-->
      <p class="incorrectOption"> 
        Incorrect! There is no -d option for the ssh command and this will only give you an error.
      </p>
    </div>

    <!---Displays if the checked answer is correct-->
    <div class="correctResults" style="display:none;">
      <p>To connect to a remote server through a specific port, we use the -p option.

      </p>
    </div>


</div>












<button class="quizbutton" onclick="submitAnswers(quiz7);">Submit</button>
</div>
<?php
	require 'assets/inc/footer.php';
?>
