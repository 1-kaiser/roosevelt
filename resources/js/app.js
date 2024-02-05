import "./bootstrap";

import "toastify-js/src/toastify.css";
import Toastify from "toastify-js";

window.Toastify = Toastify;

window.addEventListener("swal", (event) => {
    let data = event.detail;

    Swal.fire({
        title: data.title,
        text: data.text,
        icon: data.icon,
    });
});
