function unique_char(str){
    var uniql="";

    for(var i=0;i<str.length; i++){
        if(uniql.indexOf(str.charAt(i))===-1){
            uniql += str.charAt(i);
        }
    }
    return uniql;
}
console.log(unique_char('the brown fox jumped over the lazy dog'));