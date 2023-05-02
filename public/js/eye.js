
function show() {
    var p = document.getElementById('inputPassword');
    p.setAttribute('type', 'text');
}

function hide() {
    var p = document.getElementById('inputPassword');
    p.setAttribute('type', 'password');
}
function showHide() {
    var pwShown = 0;

    document.getElementById("eye").addEventListener("click", function () {
        if (pwShown == 0) {
            pwShown = 1;
            show();
        } else {
            pwShown = 0;
            hide();
        }
    }, false);
};