document.addEventListener("DOMContentLoaded", function(){
    if (!Notification){
        alert('Las notificaciones no se soportan en tu navegador');
        return;
    }
    if (Notification.permission!=="granted") {
        Notification.requestPermission(); 
    }
});
function notificaciones(tituloNotificacion, mensaje, url_notificacion){
 if (Notification.permission!=="granted") {
    Notification.requestPermission(); 
}else{
    var notificacion = new Notification(tituloNotificacion,
    {
        icon:"http://localhost/access_control/recursos/img/user.png",
        body:mensaje
    }
    );
    notificacion.onclick = function(){
        window.open(url_notificacion);
    }
}
}