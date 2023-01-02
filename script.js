var NameError = document.getElementById("nameError")
var emailError = document.getElementById("emailError")
RecordEmail = document.querySelector(".email")
RecordName = document.querySelector(".name")
Submit = document.querySelector(".submit")
Elem = document.querySelector(".validated")

function ValidateName(){
    var Name = document.getElementById("name").value

    if(Name.length == 0){
        NameError.innerHTML = "*Name is required"
        return false
    }

    NameError.innerHTML = ""
    return true
}

function ValidateEmail(){
    var Email = document.getElementById("email").value

    if(Email.length == 0){
        emailError.innerHTML ="*email is required"
        return false
    }

    if(Email.length < 8){
        emailError.innerHTML ="*incorrect Email"
        return false
    }

    emailError.innerHTML = ""
    return true
}

function Validated(){
    if(!ValidateName() && !ValidateEmail()){
        return true
    }
}

Submit.addEventListener("click",(e)=>{
    e.preventDefault()
    addRecord()
})

function addRecord(){
    let Recent = document.createElement("div")
    Recent.classList.add("vv")
    Recent.innerHTML =`
    <h2>Your input</h2>
    <p class="p1">${RecordName.value}</p>
    <p class="p2">${RecordEmail.value}</p>
    `
    Elem.appendChild(Recent)
    RecordName =""
    RecordEmail=""
}

