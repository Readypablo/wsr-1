block = document.getElementById("oneprog");
btn = document.getElementById("btn-display");
vxod = document.getElementById("hide-vxod");
true_vxod = document.getElementById("profile-true");

function hide_prog() {
    block.style.display = "block";
    btn.style.display = "none";
};

function hide_vxod() {
    vxod.style.display = "none";
    true_vxod.style.display = "block";
};