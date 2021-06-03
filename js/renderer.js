

function toggleMenu(e){
    e.classList.toggle("change");
    if (e.classList.contains("change")){
        document.getElementById("menu-list").style.display = "flex";
    } else {
        document.getElementById("menu-list").style.display = "none";
    }
}

function openLocation(url){
    window.location = url;

}

function toggleTab(n){
    document.getElementById('tab-'+currentTab).classList.add('display-none');
    document.getElementById('t-'+currentTab).classList.remove('active-tab');
    document.getElementById('tab-'+n).classList.remove('display-none');
    document.getElementById('t-'+n).classList.add('active-tab');
    currentTab = n;

}