"use strict";

showNotification({
    top: 10, // 10px desde la parte superior de la ventana (por defecto es 0px)
    right: 10, // 10px desde el borde derecho de la ventana (por defecto es 0px)
    className: "welcome", // una clase adicional para el "div" (opcional)
    html: "Hello!" // el HTML de la notificación
  });

  function showNotification({top = 0, right = 0, className, html}) {

    let notification = document.createElement('div');
    notification.className = "notification";
    
    if (className) {
      notification.classList.add(className);
    }

    notification.style.top = top + 'px';
    notification.style.right = right + 'px';
    notification.innerHTML = html;
    
    document.body.append(notification);

    setTimeout(() => notification.remove(), 1500);
  }

  let i = 1;
  setInterval(() => {
    showNotification({
      top: 10,
      right: 10,
      html: 'Hello!',
      className: "welcome"
    });
  }, 2000);