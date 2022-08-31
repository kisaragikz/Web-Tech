let count = 1;
let check = true;

function changeimg() {
    var Image_Id = document.getElementById('mypic1');
    if (count == 1) {
        Image_Id.src = "./img/mypic2.png";
        count++;
    } else if (count == 2) {
        Image_Id.src = "./img/mypic3.jpg";
        count++;
    } else if (count == 3) {
        Image_Id.src = "./img/mypic4.jpg";
        count++;
    } else {
        Image_Id.src = "./img/mypic.jpg";
        count = 1;
    }
}

function change(){
    let wid = document.getElementById('start1');
    let wid2 = document.getElementById('start2')
    let wid3 = document.getElementById('start3')
    if (check){
        wid.style.width = "590px"
        wid2.style.width = "510px"
        wid3.style.width = "110px"
        wid.innerHTML = 'HTML 59%'
        wid2.innerHTML = 'CSS 51%'
        wid3.innerHTML = 'JS 11%'
        check = false;
    } else {
        wid.style.width = "100px"
        wid2.style.width = "100px"
        wid3.style.width = "100px"
        wid.innerHTML = 'HTML'
        wid2.innerHTML = 'CSS'
        wid3.innerHTML = 'JS'
        check = true;
    }
}