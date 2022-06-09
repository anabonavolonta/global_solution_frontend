<?php 
	require "_helpers/index.php"; 
	echo siteHeader("Agricultores"); //chama a função para retornar o Header
?>
<header>
    <div class="p-5 text-center bg-image" style="
      background-image: url('https://i.ibb.co/wMzLzKD/Group-574-12.png');
      background-position: top;
      height: 400px;
      margin-bottom:10px;
    ">
    </div>

</header>


<div class="sobre">
  
<div class="row">
<div class="col-lg-6 mb-4 mt-5">
<div class="foto-sobre" >
  <img src="https://fisioanimal.com/blog/wp-content/uploads/2018/08/27.08_FISIO.BLOG_Obesidade_alimentacao-natural-1140x467.jpg" alt="Snow" style="width:700px; ">
</div>
</div>
<div class="col-lg-6 mb-4 mt-5">
<div id="texto-principal" style=" margin-top: 40px;  ">
  <p class="text-right" style=" width:500px; font-size: 24px;  "><b>Se você se preocupa com a qualidade da sua alimentação e das pessoas que ama, por que seria diferente com seus animais?</b></p><br>
  <p class="text-right" style=" width:500px; font-size: 16px; ">O MIAUmirtex chega com a proposta de unir o melhor da agricultura orgânica com os cuidados essenciais para a alimentação do seu pet.</p>
</div>
</div>
</div>
</div>



<div class="container">
    <div id="servicos">
        <div class="row">
            <div class="col-lg-4 mb-4 mt-5">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://i.ibb.co/b30F0Z5/image-386.png" alt="Card image cap">
                    <div class="card-body">
                        <h4>Agricultura</h4>
                        <p class="card-text">Trazendo toda a visbilidade para os Agricultores Familiares. O app diponibilizará  informações de todos os nossos fornecedores, suas histórias, nomes e rostos. Queremos expor as pessoas que irão contribuir para a boa alimentação dos nossos pets.
Incluindo também informações sobre os produtos desses agricultores como, ficha técnica do alimento contendo todas as informações nutricionais.</div>
                </div>
            </div>

            <div class="col-lg-4 mb-4 mt-5">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://i.ibb.co/X2BDqdp/image-388.png" alt="Card image cap">
                    <div class="card-body">
                    <h4>Produtos</h4>
                        <p class="card-text">Após recebermos os melhores alimentos, todos fornecidos pelos nossos agricultores parceiros, é hora de alinhar os cardápios com os nossos médicos veterinários. Eles irão montar tudo com muito carinho, pensando em cada um dos nossos clientes de quatro patas. 
Teremos um catálogo de marmitinhas para cada tipo, porte pequeno, médio, grande, cães e gatos idosos, gestantes e muito mais.
</div>
                </div>
            </div>
            <div class="col-lg-4 mb-4 mt-5">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://i.ibb.co/wWqW7fG/image-389.png" alt="Card image cap">
                    <div class="card-body">
                    <h4>Blog Veterinário</h4>
                        <p class="card-text">No nosso aplicativo você encontrará informações nutricionais para o seu pet, fornecidas pelos nossos veterinários parceiros, atrelados a um blog de atualizações sobre os cuidados no mundo pet. Você conseguirá interagir com o blog deixando comentários e tirando dúvidas sobre a artigo postado, além de conseguir postar a foto do seu amigo de quatro patas para todos se encantarem.</div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="sobre">
  
<div class="row">

    <div class="col-lg-6 mb-4 mt-5">
        <div id="texto-principal" style=" margin-top: 40px;  ">
            <p class="text-right" style=" width:500px; font-size: 20px; margin-left: 70px; "><b>Preencha o campo abaixo para receber mais novidades sobre o App</b></p><br>

            <div class="container mb-5" style=" margin-left: 50px;  " >

                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Insira seu nome completo">
                            <small id="emailHelp" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group"  style=" margin-top: 15px;">
                            <label for="exampleInputPassword1">E-mail</label>
                            <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Insira seu e-mail">
                        </div>

                        <div class="form-group" style=" margin-top: 15px;">
                            <label for="exampleInputPassword1">Telefone</label>
                            <input type="text" class="form-control" id="exampleInputTelephone1" placeholder="Insira seu Telefone">
                        </div>

                        <div class="form-check" style=" margin-top: 15px;">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Aceito receber e-mails.</label>
                        </div>

                        <button type="submit" class="btn btn-seegreen" style=" margin-top: 20px;">Enviar</button>
                    </form>

            </div>
        </div>
    </div>

    <div class="col-lg-6 mb-4 mt-5">
        <div class="foto-sobre" >
        <img src="https://i.ibb.co/GFpD4D6/Group-575-1.png" alt="Snow" style="width:400px; margin-left: 120px; margin-bottom: 0; ">
        </div>
    </div>
</div>




<footer class="rodape text-center text-lg-start text-muted">

    <!-- Copyright -->
    <div class="text text-center p-4 ">
        © 2022 Copyright:
        <a class="text ">Todos os direitos reservados</a>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->

</body>
<style>
.rodape {
    
    bottom: 0;
    width: 100%;
    text-align: center;
    background-color: #000000;
    color: #fff;
}
.btn-seegreen{
  background-color: #FFA500;
  color:#fff;
}

.text {
    color: white;
}
h2{
  text-align:center;
  margin-top:15px;
  margin-bottom:15px;
}




</style>


</html>