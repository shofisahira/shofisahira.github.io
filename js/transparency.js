if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    document.getElementById("nav").classList.remove("transparent");
} else {
    document.getElementById("nav").classList.add("transparent");
}
window.onscroll = function() {
    changeTransparency();
};

function changeTransparency() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        document.getElementById("nav").classList.remove("transparent");
    } else {
        document.getElementById("nav").classList.add("transparent");
    }
}