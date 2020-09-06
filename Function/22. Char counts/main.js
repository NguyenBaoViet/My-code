function char_counts(str, char) {
    console.log(`String = ${str}`);
    console.log(`Char = ${char}`);

    var counts = 0;

    for (var i = 0; i < str.length; i++) {
        if (str.charAt(i) === char) {
            counts += 1;
        }
    }
    return counts;
}
console.log(char_counts('w3resource.com', 'o'));