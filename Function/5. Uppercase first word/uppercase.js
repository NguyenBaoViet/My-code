function uppercase(str){
    var arr1 = str.split(' ');
    console.log(arr1)
    var arr2 = [];

    for(var x = 0; x<arr1.length; x++)
    {
        console.log(`lan ${x+1}: ==========================`);
        console.log(arr1[x].charAt(0).toUpperCase());
        console.log(arr1[x].slice(1));
        arr2.push(arr1[x].charAt(0).toUpperCase()+arr1[x].slice(1));
    }
    return arr2.join(' ');
}
console.log(uppercase('the quick brown fox.'));