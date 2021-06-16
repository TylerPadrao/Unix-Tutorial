<?php
	require 'assets/inc/header.php';
?>

  




    <div class="quiz" id="quiz5">
    <div class="qtitlebox"><h1 class="quiztitle">Test your Knowledge: <span style="font-weight:300; color:#7ba0c9;">Managing Files & Directories</span></h1>
    <button class="nextbutton" onclick="location.href='find.php'">
      <h6>Up Next: <span style="font-weight:200">Where did it go?</span></h6>
    </button>
    <h3 class="score"></h3>
    </div>




    <div class="question">
      <h4>What is the syntax of the rm command while also using the -r option?
      </h4>
    
    <form method="post" name="q1">

		<!-- Note the <label> tags below that allow the user to click on the text! -->
		<input type="radio" name="q1" value= "incorrect1" id="q1ans1"/><label for="q1ans1"> rm [ file | directory ] -r</label><br>
		<input type="radio" name="q1" value= "incorrect2" id="q1ans2"/><label for="q1ans2"> -r rm [file | directory]</label><br>
		<input type="radio" name="q1" value= "incorrect3" id="q1ans3"/><label for="q1ans3"> [file | directory ] rm -r</label><br>
		<input type="radio" name="q1" value= "correct" id="q1ans4"/><label for="q1ans4"> rm -r [file | directory]</label><br>
    </form>

    <!---Displays if the checked answer is incorrect-->
    <div class="incorrectResults" style="display:none;">

      <!---feedback for incorrect1-->
      <p class="incorrectOption">
        You had the right idea, but just the wrong order of the elements of the command.</p>
      
      <!---feedback for incorrect2-->
      <p class="incorrectOption">
        Almost! Make sure the order of the elements of the command are in the correct order. It would not make sense to put the -r option before the rm command and what you want to remove
      </p>

      <!---feedback for incorrect3-->
      <p class="incorrectOption">
        Close! Do not put what you want to remove before the rm command and the -r option

      </p>
    </div>

    <!---Displays if the checked answer is correct-->
    <div class="correctResults" style="display:none;">
      <p>Correct! The correct syntax for a Unix command is the command followed by the option, then the file or directory you want to make changes to.
      </p>
    </div>

  </div>



  <div class="question">
    <h4>What must you do before you can remove a directory in Unix?
    </h4>
  
  <form method="post" name="q2">

  <!-- Note the <label> tags below that allow the user to click on the text! -->
  <input type="radio" name="q2" value="incorrect1" id="q2ans1"/><label for="q2ans1"> Make sure that the directory has no zipped files</label><br>
  <input type="radio" name="q2" value="correct" id="q2ans2"/><label for="q2ans2"> Empty the directory of all files and subdirectories</label><br>
  <input type="radio" name="q2" value="incorrect2" id="q2ans3"/><label for="q2ans3"> Make sure none of the files in that directory are opened</label><br>
  <input type="radio" name="q2" value="incorrect3" id="q2ans4"/><label for="q2ans4"> Make sure that the directory is a root directory</label><br>
  </form>

     <!---Displays if the checked answer is incorrect-->
     <div class="incorrectResults" style="display:none;">

      <!---feedback for incorrect1-->
      <p class="incorrectOption">
        Incorrect! No matter the file type, they will need to be removed from the directory to remove it.
      </p>
      
      <!---feedback for incorrect2-->
      <p class="incorrectOption">
        Incorrect! No matter if the files are opened or not, Unix will not let you remove a directory if there is content inside.
      </p>

      <!---feedback for incorrect3-->
      <p class="incorrectOption"> 
        Incorrect! It doesn't matter what type of directory you want to remove, just make sure that the directory is empty of all files and directories.
      </p>
    </div>

    <!---Displays if the checked answer is correct-->
    <div class="correctResults" style="display:none;">
      <p>
        Correct! Before you remove a directory in Unix, you must empty the directory or all files and subdirectories.

      </p>
    </div>

</div>



<div class="question">
  <h4>
    Let’s say you want to copy a file named “hello.txt” from your home directory to a directory called “newLocation”. What command can you use to perform this task? (Note: assume you are currently in your home directory)  </h4>

<form method="post" name="q3">

<!-- Note the <label> tags below that allow the user to click on the text! -->
<input type="radio" name="q3" value= "incorrect1" id="q3ans1"/><label for="q3ans1"> dir hello.txt newLocation</label><br>
<input type="radio" name="q3" value= "correct" id="q3ans2"/><label for="q3ans2"> cp hello.txt newLocation</label><br>
<input type="radio" name="q3" value= "incorrect2" id="q3ans3"/><label for="q3ans3"> mv hello.txt newLocation</label><br>
<input type="radio" name="q3" value= "incorrect3" id="q3ans4"/><label for="q3ans4"> ls -l hello.txt newLocation</label><br>
</form>

       <!---Displays if the checked answer is incorrect-->
    <div class="incorrectResults" style="display:none;">

      <!---feedback for incorrect1-->
      <p class="incorrectOption">
        The “Dir” command is used to list the contents of a specific directory, not copy a file from one location to another.
      </p>
      
      <!---feedback for incorrect2-->
      <p class="incorrectOption">Incorrect.
        Close! The “mv” command is used to move a file from one location to another, but not copy a file from one location to another.
      </p>

      <!---feedback for incorrect3-->
      <p class="incorrectOption"> 
        Using the “ls” command allows you to list files within your current directory. The “-l” option is used to provide a long listing of the files within your current directory. This is not the correct command for copying files from one location to another.
      </p>
    </div>

    <!---Displays if the checked answer is correct-->
    <div class="correctResults" style="display:none;">
      <p>
        Correct! The “cp” command is used to copy files from one location to another. “Cp hello.txt newLocation” is telling us that we are copying “hello.txt” to another directory called “newLocation."</p>
    </div>


</div>



<div class="question">
  <h4>
    You are trying to organize your file structure, and you want to move a file called “resume.txt” from your home directory into a directory called “personalStuff”. The file should only be moved if it is newer than the file called “updatedResume.txt”. What command will best solve this scenario?</h4>

<form method="post" name="q4">

<!-- Note the <label> tags below that allow the user to click on the text! -->
<input type="radio" name="q4" value= "incorrect1" id="q4ans1"/><label for="q4ans1"> cp -i resume.txt updatedResume.txt/personalStuff</label><br>
<input type="radio" name="q4" value= "incorrect2" id="q4ans2"/><label for="q4ans2"> mv -n resume.txt personalStuff/updatedResume.txt</label><br>
<input type="radio" name="q4" value= "incorrect3" id="q4ans3"/><label for="q4ans3"> cp -u resume.txt updatedResume.txt</label><br>
<input type="radio" name="q4" value= "correct" id="q4ans4"/><label for="q4ans4"> mv -u resume.txt personalStuff/updatedResume.txt</label><br>
</form>

       <!---Displays if the checked answer is incorrect-->
    <div class="incorrectResults" style="display:none;">

      <!---feedback for incorrect1-->
      <p class="incorrectOption">
        The “cp” command is used for copying files, but not for moving files from one location to another. The “-i” option will prompt the user before overwriting any destination files. The file path is incorrect. You always want to provide the directory name, then the file name in hierarchy level.
      </p>
      
      <!---feedback for incorrect2-->
      <p class="incorrectOption">
        Close! The “-n” option is used to not overwrite any of the destination files if they exist.
      </p>

      <!---feedback for incorrect3-->
      <p class="incorrectOption"> 
        Remember, the “cp” command is used to copy files, not move files. The “-u” option cannot be used with the “cp” command. The file path is also not correct.
      </p>
    </div>

    <!---Displays if the checked answer is correct-->
    <div class="correctResults" style="display:none;">
      <p>Correct! The “mv” command will move a file from one destination to another. We are moving “resume.txt” into the “personalStuff” directory, and renaming the file “updatedResume.txt”. If the “resume.txt” file is newer than the existing file “updatedResume.txt”, the file will be updated.

    </p>
    </div>


</div>



<div class="question">
  <h4>
    You are trying to organize your file structure, and you want to move a file called “resume.txt” from your home directory into a directory called “personalStuff”. The file should only be moved if it is newer than the file called “updatedResume.txt”. What command will best solve this scenario?</h4>

<form method="post" name="q5">

<!-- Note the <label> tags below that allow the user to click on the text! -->
<input type="radio" name="q5" value= "correct" id="q5ans1"/><label for="q5ans1"> rm -r</label><br>
<input type="radio" name="q5" value= "incorrect1" id="q5ans2"/><label for="q5ans2"> rm -i</label><br>
<input type="radio" name="q5" value= "incorrect2" id="q5ans3"/><label for="q5ans3"> rm -t</label><br>
<input type="radio" name="q5" value= "incorrect3" id="q5ans4"/><label for="q5ans4"> rm -d</label><br>
</form>

       <!---Displays if the checked answer is incorrect-->
    <div class="incorrectResults" style="display:none;">

      <!---feedback for incorrect1-->
      <p class="incorrectOption">
        Incorrect! The -i option prompts you if you want to remove a file and is safe to use.
      </p>
      
      <!---feedback for incorrect2-->
      <p class="incorrectOption">
        Incorrect! The -t option is an invalid option for rm and does nothing.
      </p>

      <!---feedback for incorrect3-->
      <p class="incorrectOption"> 
        Incorrect! The -d option is for removing empty directories and is not dangerous to use. 
      </p>
    </div>

    <!---Displays if the checked answer is correct-->
    <div class="correctResults" style="display:none;">
      <p>
        Correct! The recursive option can be very dangerous if not used properly. Take extra precautions when removing files recursively. You could accidentally remove your whole file structure if you are not careful.


    </p>
    </div>


</div>





<button class="quizbutton" onclick="submitAnswers(quiz5);">Submit</button>
</div>
<?php
	require 'assets/inc/footer.php';
?>
