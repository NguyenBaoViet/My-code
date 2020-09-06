function detect_data_type(data){
    var datatype=[Number,String,Boolean,null,Function,Object,RegExp],x,len;

    if(typeof(data)==="object" || typeof(data)==="function"){
        for(x = 0,len = datatype.length;x < len;x++){
            if(data instanceof datatype[x]){
                return datatype[x];
            }
        }
    }
    return typeof(data);
}
console.log(detect_data_type(123));
console.log(detect_data_type('123'));
console.log(detect_data_type(true));
