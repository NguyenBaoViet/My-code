function find_longest_word(str)
{   
    var arr = str.match(/\w[a-z]{0,}/gi);
    var result = arr[0];

    for(var x=0; x < arr.length; x++)
    {
        if(result.length < arr[x].length)
        {
            result = arr[x];
        }
    }
    return result;
}
console.log(find_longest_word('Web Development Tutorial.'))