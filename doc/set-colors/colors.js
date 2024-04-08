
    const paleta = [{color1:"#EDF2F4",color2:"#0077B6",color3:"#0B0B27",color4:"#CAF0F8",color5:"#D80032"},
                    {color1:"#EDF2F4",color2:"#036666",color3:"#358F80",color4:"#99E2B4"},
                    {color1:"#EDF2F4",color2:"#E0AAFF",color3:"#10002B",color4:"#9D4EDD",color5:"#D80032",color6:"#2B2D42"},
                    {color1:"#FFFF4A",color2:"#3C3C3C",color3:"#242424",color4:"#FFFF4A",color5:"#D80032"},
                    {color1:"#D80032",color2:"#2B2D42",color3:"#8D99AE",color4:"#EDF2F4",color5:"#D80032",color6:"#2B2D42"}];
    let n=-1;
 
    document.getElementById("mybtn").addEventListener("click",function(){

      if( n<(paleta.length-1) ){
        
          n = n + 1;

          console.log(" longitud array  " + paleta[n].length );
          console.log(" tipus " + Object.keys(paleta[n]).length );

          document.documentElement.style.setProperty("--color-var-1", paleta[n].color1);  
          document.documentElement.style.setProperty("--color-var-2", paleta[n].color2);  
          document.documentElement.style.setProperty("--color-var-3", paleta[n].color3);  
          document.documentElement.style.setProperty("--color-var-4", paleta[n].color4);  
      }
      else {
        n=-1;
      }
    });



