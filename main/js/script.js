function onlyNum(evt)
{
    var ASCIICode = (evt.which) ? evt.which : evt.keyCode
    if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
        return false;
    return true;
}
function send()
{
    document.getElementById("enable1").style.display = "block";
    document.getElementById("enable2").style.display = "block";
    document.getElementById("enable3").style.display = "block";
}
function newstud()
{
    document.getElementById("enable4").style.display = "block";
}