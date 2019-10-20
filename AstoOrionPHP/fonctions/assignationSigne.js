function analyseDate(fete)
{
    try
    {
        
        signe = "";
        var datedefete = new Date(fete);
        
        if (((datedefete.getMonth()+1) === 3 && (datedefete.getDate()+1) >= 21) || ((datedefete.getMonth()+1) === 4 && (datedefete.getDate()+1) <= 19))
        {
            console.log("Bélier");
            signe = "Bélier";
            return document.getElementById("signe1").innerHTML = signe;
        }
        if (((datedefete.getMonth()+1) === 4 && (datedefete.getDate()+1) >= 20) || ((datedefete.getMonth()+1) === 5 && (datedefete.getDate()+1) <= 20))
        {
            console.log("Taureau");
            signe = "Taureau";
            return document.getElementById("signe1").innerHTML = signe;
        }
        if (((datedefete.getMonth()+1) === 5 && (datedefete.getDate()+1) >= 21) || ((datedefete.getMonth()+1) === 6 && (datedefete.getDate()+1) <= 20))
        {
            console.log("Gémeaux");
            signe = "Gémeaux";
            return document.getElementById("signe1").innerHTML = signe;
        }
        if (((datedefete.getMonth()+1) === 6 && (datedefete.getDate()+1) >= 21) || ((datedefete.getMonth()+1) === 7 && (datedefete.getDate()+1) <= 22))
        {
            console.log("Cancer");
            signe = "Cancer";
            return document.getElementById("signe1").innerHTML = signe;
        }
        if (((datedefete.getMonth()+1) === 7 && (datedefete.getDate()+1) >= 23) || ((datedefete.getMonth()+1) === 8 && (datedefete.getDate()+1) <= 22))
        {
            console.log("Léo");
            signe = "Léo";
            return document.getElementById("signe1").innerHTML = signe;
        }
        if (((datedefete.getMonth()+1) === 8 && (datedefete.getDate()+1) >= 23) || ((datedefete.getMonth()+1) === 9 && (datedefete.getDate()+1) <= 22))
        {
            console.log("Vierge");
            signe = "Vierge";
            return document.getElementById("signe1").innerHTML = signe;
        }
                if (((datedefete.getMonth()+1) === 9 && (datedefete.getDate()+1) >= 23) || ((datedefete.getMonth()+1) === 10 && (datedefete.getDate()+1) <= 22))
        {
            console.log("Balance");
            signe = "Balance";
            return document.getElementById("signe1").innerHTML = signe;
        }
                if (((datedefete.getMonth()+1) === 10 && (datedefete.getDate()+1) >= 23) || ((datedefete.getMonth()+1) === 11 && (datedefete.getDate()+1) <= 21))
        {
            console.log("Scorpion");
            signe = "Scorpion";
            return document.getElementById("signe1").innerHTML = signe;
        }
                if (((datedefete.getMonth()+1) === 11 && (datedefete.getDate()+1) >= 22) || ((datedefete.getMonth()+1) === 12 && (datedefete.getDate()+1) <= 21))
        {
            console.log("Sagittaire");
            signe = "Sagittaire";
            return document.getElementById("signe1").innerHTML = signe;
        }
                if (((datedefete.getMonth()+1) === 12 && (datedefete.getDate()+1) >= 22) || ((datedefete.getMonth()+1) === 1 && (datedefete.getDate()+1) <= 19))
        {
            console.log("Capricorne");
            signe = "Capricorne";
            return document.getElementById("signe1").innerHTML = signe;
        }
                if (((datedefete.getMonth()+1) === 1 && (datedefete.getDate()+1) >= 20) || ((datedefete.getMonth()+1) === 2 && (datedefete.getDate()+1) <= 18))
        {
            console.log("Verseau");
            signe = "Verseau";
            return document.getElementById("signe1").innerHTML = signe;
        }
                if (((datedefete.getMonth()+1) === 2 && (datedefete.getDate()+1) >= 19 ) || ((datedefete.getMonth()+1) === 3 && (datedefete.getDate()+1) <= 20))
        {
            console.log("Poisson");
            signe = "Poisson";
            return document.getElementById("signe1").innerHTML = signe;
        }

        
            
        
    }
    catch(erreur)
    {
        console.log(erreur);
    }
}

