var imageTV=1;
var imagePC=1;

function changeImageTV() {
    if (imageTV==1)
    {
        document.getElementById("TV").src = "../Images/TVg.png";
    	imageTV=0;

    }
    else if (imageTV==0)
    {
    	document.getElementById("TV").src = "../Images/TVr.png";
    	imageTV=1;
    }
 }

function changeImagePC() {
    if (imagePC==1)
    {
        document.getElementById("PC").src = "../Images/PCg.png";
    	imagePC=0;

    }
    else if (imagePC==0)
    {
    	document.getElementById("PC").src = "../Images/PCr.png";
    	imagePC=1;
    }
 }
