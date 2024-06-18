<div class="agenda">
             <div class="mt-13">
                <form action="verificaAgenda.php" method="post">

                <input type="hidden" id="id_cliente" name="id_cliente" value="<?php echo $_SESSION['id_cliente']; ?>">
                    <div class="mb-3">
                        <label for="nome">Nome do Dono:</label>
                        <input type="text" id="nome" name="nome" required>
                    </div><br>

                    <div class="mb-3">
                        <label for="cpf">CPF do Dono:</label>
                        <input type="text" id="cpf" name="cpf" required>
                    </div><br>

                    <div class="mb-3">
                        <label for="nome_animal">Nome do Animal:</label>
                        <input type="text" id="nome_animal" name="nome_animal" required>
                    </div><br>

                    <div class="mb-3">
                        <label for="especie">Espécie:</label>
                        <input type="text" id="especie" name="especie" required>
                    </div><br>

                    <div class="mb-3">
                        <label for="idade">Idade:</label>
                        <input type="number" id="idade" name="idade" required>
                    </div><br>

                    <div class="mb-3">
                        <label for="alergia">Alergia a algum remédio?</label>
                        <input type="radio" id="alergia_sim" name="alergia" value="1" required>
                        <label for="alergia_sim">Sim</label>
                        <input type="radio" id="alergia_nao" name="alergia" value="0" required>
                        <label for="alergia_nao">Não</label>
                    </div><br>

                    <div class="mb-3">
                        <label for="cirurgia">Cirurgia nos últimos três anos?</label>
                        <input type="radio" id="cirurgia_sim" name="cirurgia" value="1" required>
                        <label for="cirurgia_sim">Sim</label>
                        <input type="radio" id="cirurgia_nao" name="cirurgia" value="0" required>
                        <label for="cirurgia_nao">Não</label>
                    </div><br>

                    <div class="mb-3">
                        <label for="tel">Telefone:</label>
                        <input type="text" id="tel" name="tel" required>
                    </div><br>

                    <div class="mb-3">
                        <label for="data_cons">Data da Consulta:</label>
                        <input type="date" id="data_cons" name="data_cons" required>
                    </div><br>

                    <div class="mb-3">
                        <label for="horario">Horário da Consulta:</label>
                        <input type="time" id="horario" name="horario" required>
                    </div><br>

                    <div class="text-center">
                        <button name="submitAgenda" type="submit" class="btn btn-primary mt-3">Confirmar Agendamento</button>
                    </div><br>

                </form>
             </div>
 </div>


