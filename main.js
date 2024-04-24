/* conexão */
function cadastrarProdutos(){
    document.getElementById('form').addEventListener('submit',function(e){
      e.preventDefault();

      var dadosForm = new FormData(this)

      fetch ('conn.php',{
        method: 'POST',
        body: dadosForm
      }).then(response =>{
        if(!response.ok){
          throw new Error('Resposta da rede foi negativa.')
        }
        return response.text()
      }).then(data =>{
        console.log(data);
      }).catch(error =>{
        console.error("Ocorreu um problema no fetch")
      })
    })
  }