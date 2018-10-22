function showTime(){
    var date = new Date();
    var h = date.getHours();
    var m = date.getMinutes();
    var s = date.getSeconds();

    var time = h + ":" + m + ":" + s;
    document.getElementById("jam").innerText = time;
    document.getElementById("jam").textContent = time;
}

setInterval(showTime, 1);

document.write("test");