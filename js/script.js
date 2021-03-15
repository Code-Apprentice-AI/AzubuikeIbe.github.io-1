const tab_btns = document.querySelectorAll("[data-target-tab]");
const tab_contents = document.querySelectorAll(".registration-form .content");
const theme_checkbox = document.getElementById("theme-checkbox");

 

tab_btns.forEach((btn) => {
    btn.addEventListener("click", () => 
    {
        tab_btns.forEach((btn) => btn.classList.remove("active"))
        tab_contents.forEach((btn) => btn.classList.remove("active"));
        btn.classList.toggle("active");
        document.querySelector(btn.dataset.targetTab).classList.add("active");
    });

    /*Ripple Effect */

    const ripple_btns = document.querySelectorAll(".btn-ripple");

    ripple_btns.forEach((btn) => {
    btn.addEventListener("click", function(e){
        let x_coord = e.clientX;
        let y_coord = e.clientY;

        let btn_pos_top = e.target.offsetTop;
        let btn_pos_left = e.target.offsetLeft;


        let x = x_coord - btn_pos_left;
        let y = y_coord - btn_pos_top;

            const span = document.createElement("span");
                span.classList.add("ripple");
                span.style.top = `${y}px`;
                span.style.left = `${x}px`;

                this.appendChild(span);

                setTimeout(() => {
                    this.removeChild(span);
                }, 400);
        });

    });



    /* Show And Hide Password*/

    const reg_eyes = document.querySelectorAll(".eye");

    reg_eyes.forEach((eye) => {
            eye.addEventListener("click", () => {
                const pass_field = eye.previousElementSibling.previousElementSibling;
                if (pass_field.type = "password") {
                    pass_field.setAttribute("type", "text");
                    eye.classList.replace("fa-eye-slash", "fa-eye");
                } else  {
                    pass_field.setAttribute("type", "password");
                     eye.classList.replace("fa-eye", "fa-eye-slash");
                }
            });
        });
});

const theme = localStorage.getItem("theme");

if (theme) {
    document.documentElement.setAttribute("data-theme", "dark");
    if (theme === "dark") {
        theme_checkbox.checked = true;
    }
}
theme_checkbox.addEventListener("change", function () {
    if (this.checked) {
        document.documentElement.setAttribute("data-theme", "dark");
        localStorage.setItem("theme", "dark");
    } else {
        document.documentElement.removeAttribute("data-theme");
        localStorage.removeItem("them");
    }
});