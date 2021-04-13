<script>
     var addToCartBtn = document.querySelector('#addToCart');
     var quantityInput= document.querySelector('input[name="quantity"]');
     if(addToCartBtn){
       addToCartBtn.addEventListener('click',function(){
         if(quantityInput){
           var quantity =parseInt(Cookies.get('quantity'))||0
           var addQuantity =parseInt(quantityInput.value)||0
           var newquantity =quantity+addQuantity;
           Cookies.set('quantity',newquantity)
           alert('quantity:'+ newquantity)
          
         }
       });
     }
</script>