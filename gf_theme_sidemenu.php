<!-- Right sidebar start-->
        <div class="w3-col w3-mobile" style="width:18%; float: right; margin-top:0px; background-color:#666666; border-top: solid 1px #f6f6f6; border-left: solid 1px #f6f6f6; vertical-align: top;">

    <!-- Sidebar linkmenu start--> 
    <a href= "https://genealogiskforum.dk/Login/" class="w3-hover-text-blue" style="font-family: arial; font-weight: normal; font-size: 11px; color: #cccccc; font-weight: lighter; margin-left:10px;" >Login </a> <br>

    <a href= "https://genealogiskforum.dk/brugeroprettelse/" class="w3-hover-text-blue" style="font-family: arial; font-weight: normal; font-size: 11px; color: #cccccc; font-weight: lighter; margin-left:10px;" >Registrer </a> <br>

    <a href= "https://genealogiskforum.dk/bestil_slaegtstrae/" class="w3-hover-text-blue" style="font-family: arial; font-weight: normal; font-size: 11px; color: #cccccc; font-weight: lighter; margin-left:10px;" >Bestil slægtstræ </a> <br>


    <a href= "https://genealogiskforum.dk/om_gf/" class="w3-hover-text-blue" style="font-family: arial; font-weight: normal; font-size: 11px; color: #cccccc; font-weight: lighter; margin-left:10px;" >Om Genealogisk forum </a> <br>

    <a href= "https://genealogiskforum.dk/medlemmer/" class="w3-hover-text-blue" style="font-family: arial; font-weight: normal; font-size: 11px; color: #cccccc; font-weight: lighter; margin-left:10px;" >Medlemmer </a> <br>

    <a href= "https://genealogiskforum.dk/tips_vejledninger/" class="w3-hover-text-blue" style="font-family: arial; font-weight: normal; font-size: 11px; color: #cccccc; font-weight: lighter; margin-left:10px;" >Tips og vejledninger </a> <br>

    <a href= "https://genealogiskforum.dk/kontakt/" class="w3-hover-text-blue" style="font-family: arial; font-weight: normal; font-size: 11px; color: #cccccc; font-weight: lighter; margin-left:10px;" >Kontakt </a> <br>

    <a href= "https://genealogiskforum.dk/registrering/OpdaterProfil/" class="w3-hover-text-blue" style="font-family: arial; font-weight: normal; font-size: 11px; color: #cccccc; font-weight: lighter; margin-left:10px;" >Opdater brugerprofil </a> <br>

    <a href= "https://genealogiskforum.dk/registrering/Logout/" class="w3-hover-text-blue" style="font-family: arial; font-weight: normal; font-size: 11px; color: #cccccc; font-weight: lighter; margin-left:10px;" >Logout </a> <br>


    <hr>

    <!-- Sidebar linkmenu end--> 

<!-- SIdebar meddelelser start--> 
        <h4> Meddelser fra administrator </h4>
        <br>

        <div id="blabbox1" style="width: 200px; height: 250px; border: solid
        1px black; overflow: auto; background-color: #FFFFFF; margin-left: 15px;">
        </div>
        <script language="javascript" type="text/javascript">
        var blabsettings = new Array()
        blabsettings['object']="blabbox1"
        blabsettings['blabtype']="normalusergroups"
        blabsettings['number']=5
        blabsettings['refresh']=30
        blabsettings['datetoday']="!A! ago"
        blabsettings['dateearlier']="!D!/!M!/!Y! !H!:!I!:!S!"
        blabsettings['showimage']=true
        blabsettings['messagelinks']=true
        blabsettings['loadmore']="Load older messages"
        blabsettings['userpage']="userprofile.php";
        blabsettings['about']="";
        startblab(blabsettings)
        </script>

        <hr>
  
<!-- Sidebar meddelelser end--> 

<!-- Sidebar Hvem er online start--> 
        <h4> Hvem er online </h4>

        <hr>
  
        <div class= "w3-container">
        <ul class="slwhoisonline" style= "list-style-type: none; background-color:#666666; padding-left: 0px; padding-top:0px; margin-top:0px; padding-bottom:25px; margin-bottom:25px;">
        <?php
        if (function_exists('sl_whoisonline'))
        sl_whoisonline('<li><img src="***profileimage***" style="padding-bottom: 5px;width: 30px;"><span style="font-family:Helvetica;font-size: 11px; color: #E6E6E6;"> ***name***</span></li>');
        ?>
        </ul>
        </div> 
<!-- Sidebar Hvem er online end--> 


<!-- Donate, start--> 
        <div class= "w3-container" style="background-color: white; text-align: center; border: 1px solid #cccccc;">
        <br>
        <h6>Din hjælp til at genealogiskforum.dk fortsat kan være gratis er af stor værdi for alle medlemmer, og vil være meget højt påskønnet.</h6>
        <br>


        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="hosted_button_id" value="3WCQ75DT5F8BL">
        <input type="image" src="https://www.paypalobjects.com/da_DK/DK/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal – den sikre og nemme måde at betale på nettet.">
        <img alt="" border="0" src="https://www.paypalobjects.com/da_DK/i/scr/pixel.gif" width="1" height="1">
        </form>
        <br>

        </div>
<!-- Donate, end--> 
 
<!-- Ad, start--> 
        <div class= "w3-container" style="background-color: white; text-align: center; border: 1px solid #cccccc; padding-top:10px; padding-bottom: 10px;">

        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

        <ins class="adsbygoogle"
        style="display:block"
        data-ad-client="ca-pub-3626513934315518"
        data-ad-slot="7429817725"
        data-ad-format="auto"></ins>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
        </script>    
        </div>    

<!-- Ad, end--> 


       </div> 
<!-- Right sidebar end--> 
