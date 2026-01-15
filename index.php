<?php include "config/db.php"; ?>
<h1>Online Shop</h1>

<?php
$q=mysqli_query($conn,"SELECT * FROM products");
while($p=mysqli_fetch_assoc($q)){
?>
<div>
 <img src="uploads/<?php echo $p['image']; ?>" width="150">
 <h3><?php echo $p['name']; ?></h3>
 <p>₹<?php echo $p['price']; ?></p>
 <a href="cart.php?id=<?php echo $p['id']; ?>">Add to Cart</a>
</div>
<?php } ?>
