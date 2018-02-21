function verif(lemail) {
    var arobase = lemail.indexOf("@"); var point = lemail.lastIndexOf(".")
    if((arobase < 3)||(point + 2 > lemail.length)||(point < arobase+3))
        return false
        return true
}

function testform(lenom,mail,comment) {
    if(lenom.value=="") {
        lenom.focus();
        return false
    }
    if(!verif(mail.value)) {
        mail.value="";
        mail.focus();
        return false
    }
    return true
}