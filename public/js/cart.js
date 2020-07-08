 /* var form = document.forms[0];
var confirm = document.getElementById('confirm');

form.onsubmit = function (event) {
if('confirm_order'){
Swal.fire({
  title: "Are you sure?",
  text: "If you click OK, your order will be processed",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal("Your order has not been confirmed, you will be redirected to your shopping cart", {
      icon: "success",
    });
  } else {
    swal("Thanks for booking with us!");
  }
});
}
}
*/
