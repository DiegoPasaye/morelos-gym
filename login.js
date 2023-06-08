
const username = document.querySelector(".username")
const pin = document.querySelector(".pin")

const send = () => {

    if(username.value.length <= 0 || pin.value.length <= 0){

        document.querySelector(".errorDatos").classList.toggle("mostrar")
        document.querySelector(".username").classList.toggle("errorInputs")
        document.querySelector(".pin").classList.toggle("errorInputs")
    }else{
        document.querySelector(".errorDatos").classList.remove("mostrar")
        document.querySelector(".username").classList.remove("errorInputs")
        document.querySelector(".pin").classList.remove("errorInputs")
        if(document.querySelector(".username").value == "diego" && document.querySelector(".pin").value == "0424"){
            console.log("bienvenido")
            document.location.href = "./perfil.html"
        }else{
            console.log("rechazadp")
            console.log(document.querySelector(".username").value)
        }
    }
}