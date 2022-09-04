function changetable(){
    let table = document.getElementById('table');
    table.innerHTML = '';
    let num = parseInt(document.getElementById('amount').value);
    let check = 1;
    let j = 1;
    let row = true;
    // สร้างแถว
    for (let i=1; i<=8; i++) {
        let col = document.createElement("div");
        let colatt = document.createAttribute("id");
        colatt.value = "col" + i;
        col.setAttributeNode(colatt);
        table.appendChild(col);
    }
    // สร้างตาราง
    for (let i=1; i<=num; i++){
        if (j>8){
            j=1;
            row = true;
        }
        let box = document.createElement('div');
        let boxclass = document.createAttribute('class');
        boxclass.value = "box";
        box.setAttributeNode(boxclass);
        let boxid = document.createAttribute('id');
        boxid.value = "box" + i;
        box.setAttributeNode(boxid);
        let colid = document.getElementById('col' + j);
        colid.appendChild(box)
        if (row) {
            check++;
            row = false;
        }
        // ทำสีขาวดำ
        let getbox = document.getElementById("box" + i);
        if (check % 2 == 1) {
            getbox.style.backgroundColor = "black";
        } else { getbox.style.backgroundColor = "white"; }
        j++;
        check++;
    }
    console.log(table);
}