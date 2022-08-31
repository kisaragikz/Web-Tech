function calcu(){
    let val1 = document.getElementById('val1').value;
    let val2 = document.getElementById('val2').value;
    let p = document.createElement('p');
    document.getElementById('result').innerText = 'Result : ' + (parseInt(val1)+parseInt(val2));
    p.innerText = val1+' + '+val2+' = '+ (parseInt(val1)+parseInt(val2));
    document.getElementsByClassName('main')[0].appendChild(p);
}