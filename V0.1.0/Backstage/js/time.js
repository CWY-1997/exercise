function fntime(){
    var today=new Date();
    var hh=today.getHours();
    var mm=today.getMinutes();
    var ss=today.getSeconds();
    var year=today.getFullYear();
    var month=today.getMonth()+1;
    var date=today.getDate();

    var apm="上午";
    if(hh>12){
        apm="下午";
    }
    hh=hh<10?'0'+hh:hh;
    mm=mm<10?'0'+mm:mm;
    ss=ss<10?'0'+ss:ss;
    var week=today.getDay();
    switch(week){
        case 0:
        week="星期日";
        break;
        case 1:
        week="星期一";
        break;
        case 2:
        week="星期二";
        break;
        case 3:
        week="星期三";
        break;
        case 4:
        week="星期四";
        break;
        case 5:
        week="星期五";
        break;
        case 6:
        week="星期六";
        break;
        default:break;
    }
    document.getElementById("myclock").innerHTML="当前时间是："+year+"年"+month+"月"+date+"日&nbsp;"+hh+":"+mm+":"+ss+"&nbsp;"+apm+"&nbsp;"+week;
}
setInterval(fntime,1000);