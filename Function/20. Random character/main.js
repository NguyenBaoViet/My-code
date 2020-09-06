function makeid(n) {
    var text = "";
    var list = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

    for (var i = 0; i < n; i++) {
        text += list.charAt(Math.floor(Math.random() * list.length));
    }
    return text;
}

console.log(makeid(8));
console.log(makeid(9));