function char_counts(str) {
    var uchar = {};
    str.replace(/\S/g, function (l) {
        uchar[l] = (isNaN(uchar[l]) ? 1 : uchar[l] + 1);
        console.log(uchar[l] = (isNaN(uchar[l]) ? 1 : uchar[l] + 1))
    });
    return uchar;
}

console.log(char_counts("The quick brown fox jumped over the lazy dog."))
