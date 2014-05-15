

function border_left(tabpage, left_tabid) {
    var oItem = document.getElementById(tabpage).getElementsByTagName("li");
    for (var i = 0; i < oItem.length; i++) {
        var x = oItem[i];
        x.className = "";
    }
    document.getElementById(left_tabid).className = "Selected";
    var dvs = document.getElementById("left_menu_cnt").getElementsByTagName("ul");
    for (var i = 0; i < dvs.length; i++) {
        if (dvs[i].id == ('d' + left_tabid))
            dvs[i].style.display = 'block';
        else
            dvs[i].style.display = 'none';
    }
}

function speechsub() {

    alert('dsjd');
}