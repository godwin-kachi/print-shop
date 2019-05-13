
$.ajax({
    url:'http://localhost/dez/cart.php',
    method:'POST'
}).done(data => {
    console.log(data)
}).fail(err=>{
    console.log(err)
})