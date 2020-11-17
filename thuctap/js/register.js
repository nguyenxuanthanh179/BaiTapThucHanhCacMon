function Captcha(){
    var alpha = new Array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z',
        'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z', 
            '0','1','2','3','4','5','6','7','8','9');
    for (var i=0;i<2;i++){
        var a = alpha[Math.floor(Math.random() * alpha.length)];
        var b = alpha[Math.floor(Math.random() * alpha.length)];
        var c = alpha[Math.floor(Math.random() * alpha.length)];                  
    }
    var code = a + ' ' + b + ' ' + ' ' + c ;
    document.getElementById("mainCaptcha").innerHTML = code
    document.getElementById("mainCaptcha").value = code
}




function ktra(){
    var ten =  document.getElementById("username");
    var mail =  document.getElementById("email");
    var pass =  document.getElementById("password");
    var pass1 =  document.getElementById("password2");
    var sdt =  document.getElementById("phone");
    var address =  document.getElementById("address");
    if (ten.value == "") {
        alert("bạn chưa nhập tên");
        document.getElementById("username").focus();
        return false;
    }
    else if (mail.value == "") {
        alert("bạn chưa nhập email");
        document.getElementById("email").focus();
        return false;
    }
    else if (pass.value == "") {
        alert("bạn chưa nhập password");
        document.getElementById("password").focus();
    }
    else if (pass1.value == "") {
        alert("bạn chưa nhập lại password");
        document.getElementById("password2").focus();
    }
    else if (pass1.value != pass.value) {
        alert("password không khớp");
    }
    else if (sdt.value == "") {
        alert("bạn chưa nhập số điện thoại");
        document.getElementById("phone").focus();
    }
    else if (address.value == "") {
        alert("bạn chưa nhập địa chỉ");
        document.getElementById("address").focus();
    }
    // var ma = document.getElementById('mainCaptcha').value;
    // var captcha = document.getElementById('txtInput');
    // if (captcha.value=="") {
    //     alert("bạn chưa nhập mã xác nhận");
    // }
    // if(ma.value !== captcha.value){
    //     alert("bạn nhập sai mã");
    // }
    document.getElementById("dangky").submit();

}


/*js select */
var listCity={
    'Hà Nội':['Đống Đa','Nguyễn Trãi','Hà Đông','Hoàn Kiếm','Nam Từ Liêm'],
    'Hải Dương':['Chí Linh','Kinh Môn','Tứ Kỳ','Thanh Hà','Gia Lộc'],
    'Nam Định':['Ý Yên','Vụ Bản','Xuân Trường','Hải Hậu','Mỹ Lộc','Nam Trực'],
}
function makesubmenu(value){
    if(value.length==0) 
        document.getElementById("huyen").innerHTML="<option></option>";
    else{
        var chonhuyen="";
        for(idhuyen in listCity[value]){
            chonhuyen+="<option>"+listCity[value][idhuyen]+"</option>";
        }
        document.getElementById("huyen").innerHTML=chonhuyen;
    }
}