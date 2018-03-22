function showRegister() {
    var stepPage = document.getElementById("registerBody");
    var body = document.getElementById("body");

    if (stepPage.style.display === "none") {
        stepPage.style.display = "block";
        body.style.display = "none";
    } else {
        stepPage.style.display = "none";
    }

}


function showStep2()
{
    var stepPage = document.getElementById("registerBody");
    var step1 = document.getElementById("step1");
    var step2 = document.getElementById("step2");
    var body = document.getElementById("body");

    if(stepPage.style.display === "block" && body.style.display === "none"){
        step1.style.display = "none";
        step2.style.display = "block";
    } else {
        step2.style.display = "none";
    }
}

function goBack()
{
    var stepPage = document.getElementById("registerBody");
    var step2 = document.getElementById("step2");
    var step1 = document.getElementById("step1");

    if(step2.style.display === "block" && step1.style.display === "none"){
        step2.style.display = "none";
        step1.style.display = "block";
    }
}