function openTab(evt, tabName, mapu=0) {
    var i, tabcontent, navlinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    navlinks = document.getElementsByClassName("nav-link");
    navlists = document.getElementsByClassName("navlist");
    for (i = 0; i < navlinks.length; i++) {
        navlinks[i].className = navlinks[i].className.replace(" active", "");
        navlists[i].style.background = "#ffffff";
    }
    if(tabName != "marker"){
        document.getElementById(tabName).style.display = "block";
        document.getElementById(tabName+"List").style.background = "#cc0000";
        evt.currentTarget.className += " active";
    }
    else{
        document.getElementById(tabName).style.display = "block";
        
        var ajax = new XMLHttpRequest();
        var method = "POST";
        var url = "mysql_conn/restaurantInfo.php";
        var qu = 'type=0'+'&uid=' +window.encodeURIComponent(mapu);
        ajax.open(method, url, true);
        ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        ajax.send(qu);
        ajax.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                var data = this.responseText;
                var result = data.toString().split(";");
                document.getElementById('Mname').innerHTML = result[0];
                document.getElementById('Maddr').innerHTML = result[1];
                document.getElementById('Mphone').innerHTML = result[2];
                document.getElementById('Mwebsite').innerHTML = result[3];
                document.getElementById('Mdesc').innerHTML = result[4];
            }
        }

        var ajax = new XMLHttpRequest();
        var method = "POST";
        var url = "mysql_conn/restaurantInfo.php";
        var qu = 'type=1'+'&uid=' +window.encodeURIComponent(mapu);
        ajax.open(method, url, true);
        ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        ajax.send(qu);
        ajax.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                document.getElementById('foodItems').innerHTML = "";
                var data = this.responseText;
                var result = data.toString().split(";");
                for(var i=0; i<result.length-1; i++){
                    document.getElementById('foodItems').innerHTML += "<li>"+result[i]+"</li>";
                }
            }
        }
    }
}



