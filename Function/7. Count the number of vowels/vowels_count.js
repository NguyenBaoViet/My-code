function vowels_count(str){
    var vowels_list= 'ueoaiUEOAI';
    var count = 0;
    for (var x =0; x<str.length; x++){
        if(vowels_list.indexOf(str[x])!== -1){
            count += 1;
        }
    }
    return count;
}
console.log(vowels_count('the quick brown fox.'));