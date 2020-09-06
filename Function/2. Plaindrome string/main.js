//Check palidrome by reverse strings.
console.log('Check palidrome by reverse strings.');
function palindrome_reverse(str){
    //lowercase the string and remove unwanted characters from it by use the RegExp.
    var re = /[\W_]/g;//or var re = /[^A-Za-z0-9]/g;       
    var lowStr = str.toLowerCase().replace(re,'');
    console.log(`string = ${str}`);
    
    //check wheather the string is empty or not.
    if(str === "")
    {
        console.log('Nothing Found!');
        return false;
    }

    //Reverse lowStr.
    var reverseStr = lowStr.split('').reverse().join("");

    //check if reverseStr is strictly equals to lowStr and return a Boolean
    if(reverseStr === lowStr)
    {
        console.log('the string is a palindrome.')
        return true;
    }else{
        console.log('the string is not a palindrome.')
        return false;            
    }
}
palindrome_reverse('car');
palindrome_reverse('race car');
palindrome_reverse('a');
palindrome_reverse('');

//Check palidrome by middle character.
console.log('Check palidrome by middle character.');
function Palindrome_middle_character(str_entry){
    //lowercase the string and remove unwanted characters.
    var re = /[^A-Za-z0-9]+/g // or re = /[\W_]+/g;
    var cstr = str_entry.toLowerCase().replace(re,'') + "";
    var count = 0;
    console.log(`string = ${cstr}`);

    //check whether the string is empty or not.
    if(cstr === "")
    {
        console.log("Nothing found!")
        return false;
    }
    
    //check if the lenght of the string is even or odd.
    if((cstr.length) % 2 === 0){
        count = (cstr.length)/2;
    }else{
        //if the length of the string is 1 then it becomes a palindrome.
        if ((cstr.length)===1)
        {
            console.log("Entry is a palindrome.");
            return true;
        }
        else{
            //if the length of the string is odd ignore the middle character.
            count=((cstr.length)-1 )/2;
        }
    }
    //loop through to check the first character to the last character and then move next.
    for (var x = 0 ; x< count; x++){
        //compare characters and drop them if they do not match.           
        if(cstr[x] !== cstr.slice(-1-x)[0]){
            console.log("Entry is not a palindrome.");
            return false;
        }
    }
    console.log("Entry is a palindrome.");
    return true;
}
Palindrome_middle_character('rep');
Palindrome_middle_character('madam');
Palindrome_middle_character('nurses run');
Palindrome_middle_character('');
Palindrome_middle_character('a');