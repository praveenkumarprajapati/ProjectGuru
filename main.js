var status=0;
function doit(){
    if(status==0){
        document.getElementById('main-nav').style.top='60px';
        status=1;
    }
    else{
        document.getElementById('main-nav').style.top='-100vh';
        status=0;
    }
}