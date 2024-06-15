<div class="container">
     <div class="row">
        <div class="col">
             <div class="mt-3">
                <form action="formulario.php" method="post">

                <input type="hidden" id="id_cliente" name="id_cliente" value="<?php echo $_SESSION['id_cliente']; ?>">
              
                    <div>
                        <label for="cpf">CPF do Dono:</label>
                        <input type="text" id="cpf" name="cpf" required>
                    </div>

                    <div>
                        <label for="nome_animal">Nome do Animal:</label>
                        <input type="text" id="nome_animal" name="nome_animal" required>
                    </div>

                    <div>
                        <label for="especie">Espécie:</label>
                        <input type="text" id="especie" name="especie" required>
                    </div>

                    <div>
                        <label for="idade">Idade:</label>
                        <input type="number" id="idade" name="idade" required>
                    </div>

                    <div>
                        <label for="alergia">Alergia a algum remédio?</label>
                        <input type="radio" id="alergia_sim" name="alergia" value="1" required>
                        <label for="alergia_sim">Sim</label>
                        <input type="radio" id="alergia_nao" name="alergia" value="0" required>
                        <label for="alergia_nao">Não</label>
                    </div>

                    <div>
                        <label for="cirurgia">Cirurgia nos últimos três anos?</label>
                        <input type="radio" id="cirurgia_sim" name="cirurgia" value="1" required>
                        <label for="cirurgia_sim">Sim</label>
                        <input type="radio" id="cirurgia_nao" name="cirurgia" value="0" required>
                        <label for="cirurgia_nao">Não</label>
                    </div>

                    <div>
                        <label for="tel">Telefone:</label>
                        <input type="text" id="tel" name="tel" required>
                    </div>

                    <div>
                        <label for="data_cons">Data da Consulta:</label>
                        <input type="date" id="data_cons" name="data_cons" required>
                    </div>

                    <div>
                        <label for="horario">Horário da Consulta:</label>
                        <input type="time" id="horario" name="horario" required>
                    </div>

                    <div>
                        <button type="submit">Confirmar Agendamento</button>
                    </div>

                </form>
             </div>
        </div>
     </div>
 </div>


