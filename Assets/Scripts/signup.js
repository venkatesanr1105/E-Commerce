fname.oninput = (event) => {
    validate(event.target,/^[A-Za-z]{5,}$/,"Please enter proper name")
}

lname.oninput = (event) => {
    validate(event.target,/^[A-Za-z]{5,}$/,"Please enter proper name")
}

email.oninput = (event) => {
    validate(event.target,/^[A-Za-z0-9.]{5,}@[A-za-z]{3,}\.[A-Za-z]{2,}$/,"Please enter proper email address")
}

mobile.oninput = (event) => {
    validate(event.target,/^[6789][0-9]{9}$/,"please enter proper mobile number")
}

password.oninput = (event) => {
    validate(event.target,/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[!@#$%^&*])[A-Za-z0-9!@#$%^&*]{6,16}$/,"Weak password")
}

confirmpassword.oninput = (event) => {
    validate(event.target,new RegExp(password.value),"Both passwords must be same")
}

address.oninput = (event) => {
    validate(event.target,/^[a-zA-Z0-9\s,'-]*$/,"Please enter your address")
}
pincode.oninput = (event) => {
    validate(event.target,/^[0-9]{6}$/,"Please enter valid pincode")
}

btn.onclick = (event) => {
    var input_fields = Array.from(document.getElementsByClassName("form_fields"))
    var flag = true
    for(i=0;i<input_fields.length;i++){
        if(input_fields[i].value == "")
            input_fields[i].nextElementSibling.nextElementSibling.innerHTML = "Please fill in this field"
    }
    for(i=0;i<input_fields.length;i++){
        if(input_fields[i].nextElementSibling.nextElementSibling.innerHTML!=""){
            flag = false
            break
        }
    }
    if(flag)
        event.target.parentElement.submit()

}
const validate = (element, pattern, message) => {
    if(pattern.test(element.value)){
        element.nextElementSibling.nextElementSibling.innerHTML = ""
        setSuccess(element)
    }
    else{
        element.nextElementSibling.nextElementSibling.innerHTML = message
        setError(element)
    }
}

const setSuccess = (element) => {
    if(element.classList.contains("error"))
        element.classList.remove("error")
    element.classList.add("success")
}

const setError = (element) => {
    if(element.classList.contains("success"))
        element.classList.remove("success")
    element.classList.add("error")
}