<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Login and Registration Form</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        
        <link rel="shortcut icon" href="bildes/favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/logstyle.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    </head>
    <body>
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
                
                <span class="right">
                    <a href="Sakums.php">
                        <strong>Atpakaļ sākuma lapā</strong>
                    </a>
                </span>
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <header>
                <h1>Ielogošanās un reģistrācija</h1>
            </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="mysuperscript.php" autocomplete="on"> 
                                <h1>Ielogojies</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Tavs e-pasts vai lietotājvārds </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="manslietotajvārds vai manspasts@pasts.lv"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Tava parole </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Atcerēties mani</label>
								</p>
                                <p class="login button"> 
                                    <input type="submit" value="Ieiet" /> 
								</p>
                                <p class="change_link">
									Neesi vēl lietotājs ?
									<a href="#toregister" class="to_register">Pievienojies mums</a>
								</p>
                            </form>
                        </div>

                        <div id="register" class="animate form">
                            <form  action="mysuperscript.php" autocomplete="on"> 
                                <h1> Pieraksties </h1> 
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Tavs lietotājvārds</label>
                                    <input id="usernamesignup" name="usernamesignup" required="required" type="text" placeholder="mansvards111" />
                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon="e" > Tavs e-pasts</label>
                                    <input id="emailsignup" name="emailsignup" required="required" type="email" placeholder="manspasts@pasts.com"/> 
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Tava parole </label>
                                    <input id="passwordsignup" name="passwordsignup" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Lūdzu apstipriniet Jūsu paroli </label>
                                    <input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p class="signin button"> 
									<input type="submit" value="Pierakstīties"/> 
								</p>
                                <p class="change_link">  
									Jau esi lietotājs ?
									<a href="#tologin" class="to_register"> Turpinam un ieejam </a>
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>