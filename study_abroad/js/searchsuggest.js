function suggest(str) {
    if (str.length == 0) {
        document.getElementsByClassName("searchmenu")[0].innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementsByClassName("searchmenu")[0].innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "searchsuggest.php?search=" + str, true);
        xmlhttp.send();
    }
}