<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Manage Page</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <style>
        li {
          list-style-type: none ;       /* Suppression des puces */
        }
        </style>
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<a href="../web/Accueil.html"
      			<P><center><IMG src="../web/logo/logo.png" alt="logo" height="150" width="150"></center>
      			</a>
				<a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
				<a href="register.html"><i class="fas fa-user-plus"></i>Register</a>
				<a href="Manage.php"><i class="fas fa-crown"></i>Manage</a>
			</div>
		</nav>
		<div class="content">
			<h2>Manage Page</h2>
			<div>
				<p>Manage</p>
				<table>
                <center> <input type="text" id="txt">
        <button onclick="addLI()">Add</button>
        
        <button onclick="deleteLI()">Delete</button>
        
        <ul id="list">
            <ul>
            <li><img src="../web/../web/voiture/maybach.jpg" height="100" width="100"> </li> 
            </ul> <br><br>
            <br><br>
            <ul>
            <li><img src="../web/voiture/hummerjpg.jpg" height="100" width="100"></li>
            </ul> <br><br>
            <br><br>
            <ul>
            <li><img src="../web/voiture/p.jpg" height="100" width="100"></li>
        </ul><br><br>
            <br><br>
            <ul>
            <li><img src="../web/voiture/5f214d2da4730.jpg" height="100" width="100"></li>
            </ul> <br><br>
            <br><br>
            <ul>
            <li><img src="../web/voiture/f.jpg" height="100" width="100"></li>
            </ul><br><br>
            <br><br>
            <ul>
                <li><img src="../web/voiture/l1.jpg" height="100" width="100"></li>
                </ul><br><br>
                <br><br>
                <ul>
                    <li><img src="../web/voiture/peugeot-3008.jpg" height="100" width="100"></li>
                    </ul><br><br>
                    <br><br>
                    <ul>
                        <li><img src="../web/voiture/rc.jpg" height="100" width="100"></li>
                        </ul><br><br>
                        <br><br>
                        <ul>
                            <li><img src="../web/voiture/t1.jpg" height="100" width="100"></li>
                            </ul><br><br>
                            <br><br>
                            <ul>
                                <li><img src="../web/telephone/huawei.jpeg" height="100" width="100"></li>
                                </ul><br><br>
                                <br><br>
                                <ul>
                                    <li><img src="../web/telephone/iphone12.jpg" height="100" width="100"></li>
                                    </ul><br><br>
                                    <br><br>
                                    <ul>
                                        <li><img src="../web/telephone/samsung.jpg" height="100" width="100"></li>
                                        </ul><br><br>
                                        <br><br>
                                        <ul>
                                            <li><img src="../web/chaussure/adidas.jpg" height="100" width="100"></li>
                                            </ul><br><br>
                                            <br><br>
                                            <ul>
                                                <li><img src="../web/chaussure/nike1.jpg" height="100" width="100"></li>
                                                </ul><br><br>
                                                <br><br>
                                                <ul>
                                                    <li><img src="../web/chaussure/nikel.jpg" height="100" width="100"></li>
                                                    </ul><br><br>
                                                    <br><br>

                                                    <ul>
                                                        <li><img src="../web/livre/Harry-Potter.jpg" height="100" width="100"></li>
                                                        </ul><br><br>
                                                        <br><br>
                                                        <ul>
                                                            <li><img src="../web/livre/naruto.jpg" height="100" width="100"></li>
                                                            </ul><br><br>
                                                            <br><br>
                                                            <ul>
                                                                <li><img src="../web/livre/sda.jpg" height="100" width="100"></li>
                                                                </ul><br><br>
                                                                <br><br>
                                                                <ul>
                                                                    <li><img src="../web/sac/eastpak.jpg" height="100" width="100"></li>
                                                                    </ul><br><br>
                                                                    <br><br>
                                                                    <ul>
                                                                        <li><img src="../web/sac/louis-vuitton.jpg" height="100" width="100"></li>
                                                                        </ul><br><br>
                                                                        <br><br>
                                                                        <ul>
                                                                            <li><img src="../web/sac/rl.jpg" height="100" width="100"></li>
                                                                            </ul><br><br>
                                                                            <br><br>
                                                                            <ul>
                                                                                <li><img src="../web/jeux video/GTA-5-Xbox-One.jpg" height="100" width="100"></li>
                                                                                </ul><br><br>
                                                                                <br><br>
                                                                                <ul>
                                                                                    <li><img src="../web/jeux video/shopping.png" height="100" width="100"></li>
                                                                                    </ul><br><br>
                                                                                    <br><br>
                                                                                    <ul>
                                                                                        <li><img src="../web/jeux video/xboxone.PNG" height="100" width="100"></li>
                                                                                        </ul><br><br>
                                                                                        <br><br>
                                                                                        <ul>
                                                                                            <li><img src="../web/film/Avatar.jpg" height="100" width="100"></li>
                                                                                            </ul><br><br>
                                                                                            <br><br>
                                                                                            <ul>
                                                                                                <li><img src="../web/film/avengers.jpg" height="100" width="100"></li>
                                                                                                </ul><br><br>
                                                                                                <br><br>                       
                                                                                                <ul>
                                                                                                    <li><img src="../web/film/star-wars.jpg" height="100" width="100"></li>
                                                                                                    </ul><br><br>
                                                                                                    <br><br>           
                                                                                                    <ul>
                                                                                                        <li><img src="../web/pc/awm.webp" height="100" width="100"></li>
                                                                                                        </ul><br><br>
                                                                                                        <br><br>
                                                                                                        <ul>
                                                                                                            <li><img src="../web/pc/dell.png" height="100" width="100"></li>
                                                                                                            </ul><br><br>
                                                                                                            <br><br>
                                                                                                            <ul>
                                                                                                                <li><img src="../web/pc/macjpg.jpg" height="100" width="100"></li>
                                                                                                                </ul><br><br>
                                                                                                                <br><br>



                                                                                                                <ul>
                                                                                                                    <li><img src="../web/vetement/diesel.jpg" height="100" width="100"></li>
                                                                                                                    </ul><br><br>
                                                                                                                    <br><br>
                                                                                                                    <ul>
                                                                                                                        <li><img src="../web/vetement/gucci.webp" height="100" width="100"></li>
                                                                                                                        </ul><br><br>
                                                                                                                        <br><br>
                                                                                                                        <ul>
                                                                                                                            <li><img src="../web/vetement/maillot.jpg" height="100" width="100"></li>
                                                                                                                            </ul><br><br>
                                                                                                                            <br><br>
        </ul></center>
        
        <script>
            
            var inputText = document.getElementById("txt"),
                 items = document.querySelectorAll("#list li"),
                 tab = [], index;
         
             // get the selected li index using array
             // populate array with li values
             
             for(var i = 0; i < items.length; i++){
                 tab.push(items[i].innerHTML);
             }
             
             // get li index onclick
             for(var i = 0; i < items.length; i++){
                 
                 items[i].onclick = function(){
                     index = tab.indexOf(this.innerHTML);
                     console.log(this.innerHTML + " INDEX = " + index);
                     // set the selected li value into input text
                     inputText.value = this.innerHTML;
                 };
                 
             }
            
            function refreshArray()
            {
                // clear array
                tab.length = 0;
                items = document.querySelectorAll("#list li");
                // fill array
                for(var i = 0; i < items.length; i++){
                 tab.push(items[i].innerHTML);
               }
            }
            function addLI(){
                
                var listNode = document.getElementById("list"),
                    textNode = document.createTextNode(inputText.value),
                    liNode = document.createElement("LI");
                    
                    liNode.appendChild(textNode);
                    listNode.appendChild(liNode);
                    
                    refreshArray();
                    
                    // add event to the new LI
                    
                    liNode.onclick = function(){
                     index = tab.indexOf(liNode.innerHTML);
                     console.log(liNode.innerHTML + " INDEX = " + index);
                     // set the selected li value into input text
                     inputText.value = liNode.innerHTML;
                 };
                    
             }
             
             
              
              function deleteLI(){
                  
                      refreshArray();
                      if(items.length > 0){
                          items[index].parentNode.removeChild(items[index]);
                          inputText.value = "";
                      }
              }
            
        </script>
				</table>
			</div>
		</div>
	</body>
</html>