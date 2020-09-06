function substrings(str){
    var array1 = [];
    for(var x=0, y =1; x<str.length; x++,y++){
        array1[x] = str.substring(x,y);
    }
    console.log(array1);
    
    var combi = [];
    
    for (var i=0; i < Math.pow(2,array1.length);i++){
        var temp = "";
        for(var j = 0; j < array1.length; j++){      
            //don't understand.         
            if((i & Math.pow(2,j))){
                temp+= array1[j];
                /*console.log(i & Math.pow(2,j));
                console.log(`i = ${i}`);
                console.log(`2^j = ${Math.pow(2,j)}`);
                console.log(`temp = ${temp}`);*/                 
            }
        }
        if(temp !== ""){
            combi.push(temp)
            //console.log(`combi = ${combi}`);
        }
    }
    console.log(combi);
}
substrings('aec');

function combString(str){
    var result=[];
    console.log(result);
    var indexCurrent = 0;

    while(indexCurrent < str.length){
        var char = str.charAt(indexCurrent);
        console.log(char);
        var arrTemp = [char];
        console.log(arrTemp);
        for (var x in result){
            arrTemp.push(result[x]+char);
            console.log("char = "+char);
            console.log("x = "+ x);
            console.log("result = " + result[x]);
            console.log("arrTemp = " + arrTemp);
        }
        result = result.concat(arrTemp);

        indexCurrent ++;
    }
    return result;
}
console.log(combString('abc'));