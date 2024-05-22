<form class="row g-3 needs-validation" novalidate action="formulario.php" method="post">
  <div class="col-md-4 position-relative">
    <label for="validationTooltip01" class="form-label">Nome do Dono:</label>
    <input type="text" name="nome" id="validationTooltip01" value="" required>
    <div class="valid-tooltip">
    </div>
  </div>
  <div class="col-md-4 position-relative">
    <label for="validationTooltip02" class="form-label"> Documento:</label>
    <input type="text" name = "documento" class="form-control" id="validationTooltip02" value="" required>
    <div class="valid-tooltip">
    </div>
  </div>
  <div class="col-md-4 position-relative">
    <label for="validationTooltip02" class="form-label">Nome do Animal:</label>
    <input type="text" name = "animal" class="form-control" id="validationTooltip02" value="" required>
    <div class="valid-tooltip">
    </div>
  </div>
  <div class="col-md-4 position-relative">
    <label for="validationTooltip02" class="form-label">Idade do Animal</label>
    <input type="text" name = "idade" class="form-control" id="validationTooltip02" value="" required>
    <div class="valid-tooltip">
    </div>
  </div>
  </div>
  <div class="col-md-6 position-relative">
    <label for="validationTooltip03" class="form-label">Espécie do Animal:</label>
    <input type="text" name = "especie" class="form-control" id="validationTooltip03" required>
    <div class="invalid-tooltip">
    </div>
  </div>
  <div class="col-md-6 position-relative">
    <label for="validationTooltip03" class="form-label">Alergia a algum remedio?</label>
    <input type="text" name = "alergia" class="form-control" id="validationTooltip03" required>
    <div class="invalid-tooltip">
    </div>
  </div>
  <div class="col-md-6 position-relative">
    <label for="validationTooltip03" class="form-label">Cirurgia nos ultimos tres anos?</label>
    <input type="text" name = "cirurgia" class="form-control" id="validationTooltip03" required>
    <div class="invalid-tooltip">
    </div>
  </div>
  <div class="col-md-6 position-relative">
    <label for="validationTooltip03" class="form-label">Telefone: </label>
    <input type="text" name = "telefone" class="form-control" id="validationTooltip03" required>
    <div class="invalid-tooltip">
    </div>
  </div>
  <div class="col-md-6 position-relative">
    <label for="validationTooltip03" class="form-label">Data da Consulta:</label>
    <input name = "data" id="date" type="date" />
    <div class="invalid-tooltip">
    </div>
  </div>
  <div class="col-md-6 position-relative">
    <label for="validationTooltip03" class="form-label">Horário da Consulta:</label>
    <input name = "horario" type="time">
    <div class="invalid-tooltip">
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-success" type="submit">Confirmar Agendamento</button>
  </div>
</form>