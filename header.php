<div>
     <a href="index.php"><button id="button">Login / SignUp </button> </a>
</div>

 <div class="dropdown">
      <button onclick="myFunction()" class="dropbtn"> RECIPES.COM </button>
        <div id="myDropdown" class="dropdown-content">
          <ul class="list">
            
            <ul><a href="cuisine.php"> Cuisines    </a>
              <li><a href="american.php">American</a></li>
              <li><a href="indian.php">Indian</a></li>
              <li><a href="italian.php">Italian</a></li>
              <li><a href="chinese.php">Chinese</a></li>
              
                  <ul> <a href="healthy.php" > Diet & Health  </a>
                      <li><a href="vegan.php" >Vegan</a></li>
                      <li><a href="salad.php" >Salads</a></li>
                      <li><a href="desserts.php" >Desserts</a></li>
                      <li><a href="smoothies.php" >Smoothies</a></li>
                  </ul>
                  
            </ul>
            
        </ul>
        </div>
        </div>
                          <br><br>
         <form action="myPhp.php" method="GET">
    <div align="center">
         
    <button type="button" onclick="location.href = 'index.html';" style="width:80px;height:40px;" > HOME </button>
          <input name="search" type="text" style="width:280px;height:40px;" placeholder="Type Here...">
        <button id="submit" type="submit" style="width:80px;height:40px;" > SUBMIT </button>
    </div>
    
    </form>
   