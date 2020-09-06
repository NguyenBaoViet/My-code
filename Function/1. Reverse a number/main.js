function reverse_a_number(n){
     n = n + "";
    return Number(n.split("").reverse().join(""));
    
}
console.log(reverse_a_number(12345));
console.log(typeof(reverse_a_number(12345)));