function calcAge(){
    let dob = new Date(document.getElementById("dob").value);
    let diff = Date.now() - dob.getTime();
    let age = new Date(diff).getUTCFullYear() - 1970;
    document.getElementById("result").innerHTML = "Your age is: " + age;
}