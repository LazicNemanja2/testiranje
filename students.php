<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Document</title>
</head>
<body>
    
    <?php 
        class Student {
            protected $id;
            protected $name;
            protected $grades = array();
            protected $school;
            protected $average;
            protected $final;

            function __construct($name){
                $this->name=$name;

            }

            function setGrade($grade){
                if ($grade < 11 && $grade > 4){
                    if((count($this->grades)<5) && (count($this->grades)==0)) {
                        $this->grades[count($this->grades)]=$grade;
                        echo "<br>Unesena je ocena  " . $grade . " kao " . count($this->grades) . ". ocena <br>" ;
                    }
                    elseif(count($this->grades)<5) {
                        $num= count($this->grades);
                        $this->grades[$num++]=$grade;
                        echo "Unesena je ocena  " . $grade . " kao " . count($this->grades) . ". ocena <br>" ;
                    }
                    else {
                        echo "Unesen je maksimalan broj ocena";
                    }

                }
                else {
                    echo "Morate uneti ucenu od 5 do 10";
                }


                

            }

            function setSchool($school){

                if($school=="CSM" || $school=="CSMB"){
                    $this->school=$school;
                    echo "Postavljena je " . $school . " za skolu";
                }
                else {
                    echo "Morate uneti jednu od skola: CSM ili CSMB";
                }
            }

            function calculate(){
                if ($this->school == "CSM"){
                    $prosek = array_sum($this->grades)/count($this->grades);
                    $this->average = $prosek;
                    if ($prosek >= 7){
                        $this->final= "Pass";
                    }
                    else {
                        $this->final= "Fail";
                    }
                }
                else {
                    if(count($this->grades)>2) {
                        if(max($this->grades) >= 8){
                            $this->final= "Pass";
                        }
                        else {
                            $this->final= "Fail";
                        }
                    }
                    else {
                        $this->final= "Fail";
                    }
                }

            }


            function __get($name){
                echo "<br>ID:" .$this->id . "<br> Ime: " . $this->$name . "<br> Skola " . $this->school .  "<br> Prosecna ocena je " . $this->average . "<br> FInalna ocena je " . $this->final . "<br>";

            }




            

            
        }


$student1 = new Student("Nemanja");
$student1 -> setSchool("CSM");
$student1 -> setGrade(7);
$student1 -> setGrade(6);
$student1 -> setGrade(8);
$student1 -> calculate();
$student1 -> name;


$student2 = new Student("Igor");
$student2 -> setSchool("CSMB");
$student2 -> setGrade(7);
$student2 -> setGrade(6);
$student2 -> setGrade(6);
$student2 -> setGrade(7);
$student2 -> calculate();
$student2 -> name;
        
?>




    
</body>
</html>