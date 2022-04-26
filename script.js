/* ========== VARIABLES ========== */

var cliente = document.getElementById("cliente");
var cedula = document.getElementById("cedula");
var fecha = document.getElementById("fecha");
var equipo = document.getElementById("equipo");
var descripcion = document.getElementById("descripcion");
var falla = document.getElementById("falla");


var registrar = document.getElementById("registrar");
var aprobar = document.getElementById("aprobar");
/* ========== EVENTOS ========== */

registrar.addEventListener("click", registrarBoton);
aprobar.addEventListener("click", aprobarTarea);

/* ========== FUNCIONES ========== */

function registrarBoton()
{
  if (cliente.value != "" &&
      cedula.value != "" &&
      fecha.value != "" &&
      equipo.value != "" &&
      descripcion.value != "" &&
      falla.value != ""
    )
    {
      alert("Registro exitoso :)")
    }
  
}

function aprobarTarea()
{
  alert("Muchísimas gracias por apreciar el trabajo. será redireccionado a github :)")
  window.open('https://github.com/Isturiz/', target="_blank");
}