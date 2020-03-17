var sendText = "Send"; var sendingText = "Sending...";

function sendMail(form){
    return submitFormData(form,[sendingText, sendText],'sendmail',true,function(){},function(m, t){
        // If successful
        showResponseMSG(form,m,t);
    },function(m, t){
        // If unsuccessful
        showResponseMSG(form,m,t);
    },function(e){
        // debugger
    },false);
}
