function Bigger_element(val){
    return (evalue, index, array) =>{return (evalue >= val);};
}

var result = [11,22,33,44,55,12,41,2,4,5,7].filter(Bigger_element(35)).sort((x, y) => {return x-y;});
console.log(result);