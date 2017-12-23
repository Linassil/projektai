


$('#myCarousel').carousel({
 interval: 100000
  });


function check_info() {

    var vardas = document.getElementById('vardas').value;
    var pavarde = document.getElementById('pavarde').value;
    var facebook = document.getElementById('facebook').value;
    var saskaitosNR = document.getElementById('saskaitosNR').value;
    var trumpai = document.getElementById('trumpai').value;
    var skola = document.getElementById('skola').value;
    var checkbox1 = document.getElementById('checkbox1').checked;



    if((vardas=="" || pavarde=="" || facebook=="" || saskaitosNR=="" || trumpai=="" || skola=="" ) || (checkbox1=="")) {
        alert('palikote tuščią lauką');
        return false;
    }else {
        return true;
    }

}
