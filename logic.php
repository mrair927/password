
<?php
  //initialize password and error strings
    $password = "";
    $error = "";
    //first check if they have submitted the form
    if (isset($_POST['submit'])) {
            $count = $_POST["numberofwords"];
            //read in the word array from the txt file
            $var = file_get_contents('wordlist.txt'); //Take the contents from the file to the variable
            $word_array = explode(',',$var); //Split it by ',
            //set up your number array and symbol array
            $num_array = array("1","2","3","4","5","6","7","8","9","10");
            $sym_array = array("!","@","$");
            //check if the number entered was blank
            if(trim($count == '')) {
            		$error = 'Please enter a number.';
            		return;
            	}
            //check if the number entered was 1 - 9
            if($count >= 1 && $count <=9){
                //while the counter is greater than zero add words to the password and deduct from the counter
                while ($count > 0){
                   $password.=$word_array[array_rand($word_array)];
                   $count = $count - 1;
                }
                //if they checked the number checkbox add a number
                if (isset($_POST['givenumber'])){
                  $password.=$num_array[array_rand($num_array)];
                }
                //if they checkd the symbol checkbox add a sym
                if (isset($_POST['givesym'])){
                  $password.=$sym_array[array_rand($sym_array)];
                }
                return;
          }
          //if we get to this else then the number was not 1-9, error for the user
          else{
            $error = 'Please enter a number 1 - 9!';
            return;
          }
}
?>
