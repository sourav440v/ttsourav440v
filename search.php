<!DOCTYPE html>
<html>
<head>
<title>Google search box in PHP website</title>
<style type="text/css">

<style> 

*
{
    outline: none;
}

.col
{
    display: table-cell;
    vertical-align: middle;
}

input, button
{
    font-family: Nunito;
    padding: 0;
    margin: 0;
    border: 0;
    background-color: transparent;
}

.search_phase
{
    width: 500px;
    padding: 2px;
    border-radius: 20px;
  border: 2px solid #dfe1e5;
    transform: scale(0.5);
}
.search_phase:hover{ 
 -moz-box-shadow: 0 0 10px  rgba(0,0,0,0.6);
      -webkit-box-shadow: 0 0 10px  rgba(0,0,0,0.6);
      -o-box-shadow: 0 0 10px  rgba(0,0,0,0.6);
}
input[type="text"]
{
    width: 80%;
    height: 80%;
    font-size: 40px;
}
button
{
    position: relative;
    display: block;
    width: 60px;
    height: 70px;
    cursor: pointer;
}

#search-circle
{
    position: relative;
    top: -5px;
    left: 0;
    width: 25px;
    height: 20px;
    margin-top: 0;
    border-width: 15px;
    border: 15px solid #4285f4;
    background-color: transparent;
    border-radius: 50%;
    transition: 0.5s ease all;
}

button span
{
    position: absolute;
    top: 50px;
    left: 33px;
    display: block;
    width: 25px;
    height: 12px;
    background-color: transparent;
    border-radius: 8px;
    transform: rotateZ(52deg);
    transition: 0.5s ease all;
}

button span:before, button span:after
{
    content: '';
    position: absolute;
    bottom: 0;
    right: 0;
    width: 30px;
    height: 10px;
    background-color: #4285f4;
    border-radius: 10px;
    transform: rotateZ(0);
    transition: 0.5s ease all;
}

</style>

</head>

<body>
<div class="search_phase">
  <form action="" method="POST" target="_blank">
   
      <div class="col"><input type="text" placeholder="Search...." name="keywords" required=""></div>
      
      <div class="col">
        <button type="submit" name="keys_submit">
          <div id="search-circle"></div>
          <span></span>
        </button>
      
    </div>
  </form>
</div>

     
	 <?php
	   $base="Travel world";
	   $search_URL="http://www.google.com/search?q=";
	   if(isset($_POST['keys_submit'])){
		   $keywords=$_POST['keywords'];
		   header("location: ".$search_URL.$keywords.''.$base);
	   }
	   ?>
</body>
</html>