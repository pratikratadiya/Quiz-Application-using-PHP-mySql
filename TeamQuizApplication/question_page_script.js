function selectOption(id)
{
    document.getElementById("option1").classList.remove("optionActive");
    document.getElementById("option2").classList.remove("optionActive");
    document.getElementById("option3").classList.remove("optionActive");
    document.getElementById("option4").classList.remove("optionActive");
    id.classList.add("optionActive");
    option_check();
}

function option_check()
{
    if(document.getElementById("option1").classList.contains("optionActive"))
    {
        document.getElementById("radio1").checked=true;
    }
    else if(document.getElementById("option2").classList.contains("optionActive"))
    {
        document.getElementById("radio2").checked=true;
    }
    else if(document.getElementById("option3").classList.contains("optionActive"))
    {
        document.getElementById("radio3").checked=true;
    }
    else if(document.getElementById("option4").classList.contains("optionActive"))
    {
        document.getElementById("radio4").checked=true;
    }
}
function make_active()
{
    if(document.getElementById("radio1").checked==true)
    {
        document.getElementById("option1").classList.add("optionActive");
    }
    else if(document.getElementById("radio2").checked==true)
    {
        document.getElementById("option2").classList.add("optionActive");
    }
    else if(document.getElementById("radio3").checked==true)
    {
        document.getElementById("option3").classList.add("optionActive");
    }
    else if(document.getElementById("radio4").checked==true)
    {
        document.getElementById("option4").classList.add("optionActive");
    }
}
make_active();