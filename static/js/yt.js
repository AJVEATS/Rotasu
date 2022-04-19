function help() {
    console.log("help");
}

function checkCookie() {

    if(getCookie("url") !== undefined) {

        userURL = getCookie("url");
        console.log("We have the url");
    } 
}

function setCookie() {
    var url = document.getElementById("url").value;
    document.cookie = "url="+url+"; expires=Thu, 18 Dec 2023 12:00:00 UTC; path=/";
}

function getCookie() {
    
}

