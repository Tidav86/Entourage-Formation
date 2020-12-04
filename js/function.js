$('#submit').on('click',function(){
  $.ajax({
    url:"/back/index.php",
    method:"POST",
    data:{
      interets: $('#interets').val(),
      objectifs: $('#objectifs').val(),
      temps: $('#temps').val(),
      nom: $('#name').val(),
      prenom: $('#firstname').val(),
      email: $('#email').val(),
      tel: $('#tel').val(),
    },
    success:function(data){
      $('.business_form_custom').empty();
      $('.business_form_custom').append('<h3> Votre demande a ete recu.</h3>');
    },
    async:false
  });
});
