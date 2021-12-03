<?php
   require ('header.php');  
?>
        <div class="container"> 
            <h2> Inscreva seu serviço</h2>
            <div class="img-container">
                <img src="img/bota-mapa.jpg" class="destaque" alt="bota cano curto com estampa de mapa mundi" />
            </div>
            <br>
            <form>
                <div class="inputform">
                    <label>Empreendimento:</label><input type="text" required/>
                </div>
                <div class="inputform">
                <label>Profissional responsável:</label><input type="text" required/>
                </div>
                <label>E-mail:</label><input type="e-mail" required/></br>
                <label>Tipo de serviço:</label><input type="text" required/></br>
                <label>Mensagem:</label><textarea></textarea></br>
                <input type="submit" value="enviar"/>

            </form>
            <a href="javascript:history.go(-1);">Voltar</a>
        </div>
<?php
   require ('footer.php');  
?>