function validateForm() {
    let idnumber = document.forms.myForm.Idnumber.value;
    let nameprefix = document.forms.myForm.Nameprefix.value;
    let fname = document.forms.myForm.FirstName.value;
    let lname = document.forms.myForm.LastName.value;
    let address = document.forms.myForm.Address.value;
    let subdistrict = document.forms.myForm.Subdistrict.value;
    let district = document.forms.myForm.District.value;
    let province = document.forms.myForm.Province.value;
    let zipcode = document.forms.myForm.Zipcode.value;
    if (idnumber.length != 13 || !checkNumber(idnumber)) {
        alert("หมายเลขบัตรประชาชนต้องเป็นตัวเลข จำนวน 13 หลัก")
    }
    else if (nameprefix == "null") {
        alert("ต้องเลือกคำนำหน้านาม")
    }
    else if (fname.length < 2 || fname.length > 20 || !checkString(fname)) {
        alert("ชื่อต้องเป็นตัวอักษร ความยาวระหว่าง 2-20 ตัวอักษร");
    }
    else if (lname.length < 2 || lname.length > 30 || !checkString(lname)) {
        alert("นามสกุลต้องเป็นตัวอักษร ความยาวระหว่าง 2-30 ตัวอักษร");
    }
    else if (address.length <= 5) {
        alert("ที่อยู่ต้องความยาวไม่ต่ำกว่า 5 ตัวอักษร")
    }
    else if (subdistrict.length <= 2 || !checkString(subdistrict)) {
        alert("ตำบล/แขวงต้องเป็นตัวอักษร ความยาวไม่ต่ำกว่า 2 ตัวอักษร")
    }
    else if (district.length <= 2 || !checkString(district)) {
        alert("อำเภอ/เขตต้องเป็นตัวอักษร ความยาวไม่ต่ำกว่า 2 ตัวอักษร")
    }
    else if (province == "null") {
        alert("ต้องเลือกจังหวัด")
    }
    else if (zipcode.length != 5 || !checkNumber(zipcode)) {
        alert("รหัสไปรษณีย์ต้องเป็นตัวเลข จำนวน 5 หลัก")
    }
}

function checkString(string) { //กันตัวเลข เอาแค่ตัวอักษร ถ้ากันอักขระพิเศษด้วยมาเพิ่มตรงนี้
    for (let i = 0; i < string.length; i++) {
        if (string[i] in ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"]) {
            return false
        }
    }
    return true
}

function checkNumber(string) { //กันตัวอักษร เอาแค่ตัวเลข ถ้ากันอักขระพิเศษด้วยมาเพิ่มตรงนี้
    for (let i = 0; i < string.length; i++) {
        if (!(string[i] in ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"])) {
            return false
        }
    }
    return true
}
