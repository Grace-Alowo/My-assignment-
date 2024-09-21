<?php
function call_name(){
print("Greetings Mrs Alowo Grace");
}
function DefineAge($current_year,$Dob){
$Age=$current_year-$Dob;
return$Age;
}
function Home_address(){
 print("Mukono");
}
call_name();
print("!<br/> Thank you for coming back to\t");
Home_address();
print("<br> You are\t".DefineAge(2024,2004)."\tyears old");
?>