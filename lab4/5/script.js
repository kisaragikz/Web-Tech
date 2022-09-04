function addorder(clicked_id){
    let list = document.getElementById('list');
    let order = document.createElement('li');
    let orderatt = document.createAttribute('class');
    orderatt.value = "list-group-item";
    order.setAttributeNode(orderatt);
    if (clicked_id == "munkai"){
        let ordertext = document.createTextNode("ข้าวมันไก่ต้ม");
        order.appendChild(ordertext);
    } else if (clicked_id == "cha"){
        let ordertext = document.createTextNode('ชาไทย');
        order.appendChild(ordertext);
    } else if (clicked_id == "mukrob"){
        let ordertext = document.createTextNode('ข้าวกะเพราะหมูกรอบไข่ดาว');
        order.appendChild(ordertext);
    }
    let addone = document.createElement('div');
    let oneatt = document.createAttribute('class');
    oneatt.value = "float-right";
    addone.setAttributeNode(oneatt);
    addone.innerHTML = "x1";
    order.appendChild(addone);
    list.appendChild(order)
}