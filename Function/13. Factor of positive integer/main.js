function factor(n){
    var num_factor = [];
    
    for(var i = 0; i <= Math.floor(Math.sqrt(n));i++){
        if(n%i===0){
            num_factor.push(i);
            if(n/i !== i){
                num_factor.push(n/i);
            }
        }
    }

    num_factor.sort(function(x,y){
        return x - y;
    });

    return num_factor;
}

console.log(factor(15));
console.log(factor(16));
console.log(factor(17));