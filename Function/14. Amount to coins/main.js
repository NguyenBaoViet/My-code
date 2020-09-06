function amountTocoins(amount,coins){
    coins.sort((x,y)=>{return y-x});
    if(amount === 0){
        return [];
    }
    else{
        if(amount >= coins[0]){
            var left = (amount - coins[0]);
            return [coins[0]].concat(amountTocoins(left,coins));
        }
        else{
            coins.shift();
            return amountTocoins(amount,coins);
        }
    }
    return coins;
}
console.log(amountTocoins(72,[1,2,5,10,20,50]));