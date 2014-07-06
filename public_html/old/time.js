function time(){
now = new Date();
year=now.getFullYear();
month=now.getMonth()+1;
date=now.getDate();
hours = now.getHours();
minutes = now.getMinutes();
seconds = now.getSeconds();
timeValue = year+"/";
timeValue += month+"/";
timeValue += date+"/";
timeValue += hours+":";
timeValue += minutes+":";
timeValue += seconds;

countDownDate= new Date(2012,2,1);
overDate=(countDownDate.getTime()) - (now.getTime());
day=Math.floor(overDate/1000/60/60/24-30);
hour=Math.floor(overDate/1000/60/60) % 24;
min=Math.floor(overDate/1000/60) % 60;
sec=Math.floor(overDate/1000) % 60;
countValue = day+" 日"+hour+" 時"+min+" 分"+sec+" 秒";

document.getElementById("showtime").innerHTML = '現在時間: '+timeValue+'<br />學測倒數: '+countValue;
setTimeout("time()",1000);
};

time();