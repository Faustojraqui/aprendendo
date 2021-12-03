<?php
   require ('header.php');  
?>
        <div class="container"> 
            <h2> Mande um Whatsapp! </h2>
            <div class="img-container">
                <img src="img/gaga.jpg" class="destaque" alt="cantora Lady Gaga com telefone em formato de bota" />
            </div>
            <br>
            <a class="telefone" href="tel:+5521900000">Whatsapp: +5521900000</a>
            <form>
                <label>Nome:</label><input type="text" required/></br>
                <label>E-mail:</label><input type="e-mail" required/></br>
                <label>Assunto:</label><input type="text" required/></br>
                <label>Mensagem:</label><textarea></textarea></br>
                <input type="submit" value="enviar"/>

            </form>
            <a href="javascript:history.go(-1);">Voltar</a>
        </div>
<?php
   require ('footer.php');  
?>