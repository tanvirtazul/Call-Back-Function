<?php

//call back function

function work(string $work){
    if(is_callable($work)){
        if($work == "plumbing"){
            plumbing("Rahman");
        }elseif($work == "decor"){
            decor("Tanvir", "Rahman", "Kamran", "Anis", "Akmal", "Rahim");
        }
    }else{
        echo "$work is not callable. \n";
    }
}

function plumbing(string $person1, string $person2 = ""){
    if($person2 == "")
        echo $person1." will do plumbing. \n";
    else
        echo $person1." and ".$person2." will do plumbing. \n";
}

function decor(...$persons){
    echo "For decoration, ", sizeof($persons), " person will work and they are: \n";
    foreach($persons as $person)
        echo $person, "\t";
}

work("decor");