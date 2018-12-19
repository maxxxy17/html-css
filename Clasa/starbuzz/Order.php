<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercitiu</title>
    <link rel="stylesheet" href="order.css">
  </head>

  <h1>Exercitiu</h1>
  <body>
    <style>
      input {

        display: block;
      }
    </style>
    <form class="form" action="order.php" method="post">

<header>

Choose your beans:
      <select class="name=">
        <option value="">House Blade</option>
        <option value="">Bolivia</option>
        <option value="">Organic Guatemala</option>
        <option value="">Kenya</option>
      </select>

	<div id="radio">
    <ul>
Type:
	  
	    <input type="radio" name="type" value="Whole Bean">Whole bean</input>
		<input type="radio" name="type" value="Ground">Ground</input>
    </ul>
		</div>

    <ul>
Extra:
      <input type="checkbox" value="Gift">Gift</input>
      <input type="checkbox" value="Catalog">Catalog</input>
    </ul>

Ship to:
      <ul>
       <label for="name">Name:</label>
       <input type="text" name="">
       <label for="adress">Adress</label>
       <input type="text" adress="">
       <label for="city">City:</label>
       <input type="text" city="">
       <label for="country">Country:</label>
       <input type="text" country="">
       <label for="zip">ZipCode:</label>
       <input type="text" zipcode="">
     </ul>

     Observations:
    <ul>
       <input type"text" name="text">
       <input type="submit" name="postsubmit" value="Plaseaza comanda" class="button">
    </ul>

  </header>

    </form>

  </body>
</html>
