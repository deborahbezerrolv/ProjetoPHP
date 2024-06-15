<?php

?>


<div class="container">
     <div class="row">
        <div class="col">
             <div class="mt-3">
                <form action="verificaCadastro.php" method="post">

                     <div>
                         <h3>Insira seus dados</h3>
                     </div>

                    <div class="mb-3">
                        <label for="usuario" class="form-label">Nome</label>
                         <input type="text" name="nome" class="form-control" id="nome" aria-describedby="">
                     </div>

                    <div class="mb-3">
                         <label for="usuario" class="form-label">Usuario</label>
                         <input type="text" name="usuario" class="form-control" id="usuario" aria-describedby="">
                     </div>

                     <div class="mb-3">
                         <label for="email" class="form-label">E-Mail</label>
                          <input type="email" name="email" class="form-control" id="email">
                     </div>

                     <div class="mb-3">
                           <label for="senha" class="form-label">Senha</label>
                          <input type="password" name="senha" class="form-control" id="senha">
                     </div>

                     <div class="text-center">
                         <button type="submit" name="submitCad" class="btn btn-primary mt-3">Registrar</button>
                      </div>

                 </form>
             </div>
        </div>
     </div>
 </div>
