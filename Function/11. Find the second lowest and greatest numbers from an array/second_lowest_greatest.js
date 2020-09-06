function second_lowest_greatest(arr_num){
    console.log(arr_num);
    arr_num.sort((x,y)=>{return x-y});
    console.log(arr_num);
    var result = [], unique=[arr_num[0]];

    for(var i=1; i < arr_num.length; i++){
        if(arr_num[i-1] !== arr_num[i])
        {
            unique.push(arr_num[i]);
        }
    }
    console.log(unique);
    result.push(unique[1],unique[unique.length-2]);
    return result.join(',');
}
console.log(second_lowest_greatest([1,2,3,6,4,2,8,7]));