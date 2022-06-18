<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Gerando arquivos .docx PHP"/>
	<title>phpword</title>
	<!-- bootstrap CDN -->
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
	
	<div class="container">
		<div class="row">
			<div class="col-md-12 my-5">
				<div class="page-header">
					<h3>Gerar Arquivo(.docx)</h3>
				</div>
				<hr>
				<div class="card">
					<div class="card-header">
						<span class="text-muted">Formulário de geração de arquivo(.docx) Word</span>
					</div>
					<div class="card-body">
						<div class="alert alert-info my-3" role="alert">
							Preencha os campos perante o formulário abaixo gerando o arquivo
						</div>
						<form id="form" name="form" method="POST" action="gerar_arquivo.php">
							<div class="mb-3">
								<label for="titulo" class="form-label">Título</label>
								<input type="text" name="titulo" class="form-control" autofocus autocomplete="off" placeholder="Título" required/>
							</div>
							<div class="mb-3">
								<label for="descricao" class="form-label">Descrição</label>
								<textarea name="descricao" rows="6" class="form-control" autocomplete="off" placeholder="Descrição..." required style="resize: none!important;"></textarea>
							</div>
							<div class="mb-3">
								<label for="font" class="form-label">Fonte</label>
								<select name="font" class="form-control" onautocomplete required>
									<option value="" selected>SELECIONE</option>
									<option value="Arial">Arial</option>
									<option value="Tahoma">Tahoma</option>
									<option value="Sans-Serif">Sans-Serif</option>
									<option value="Verdana">Verdana</option>
								</select>
							</div>
							<div class="mb-3">
								<label for="size" class="form-label">Tamanho</label>
								<select name="size" class="form-control" onautocomplete required>
									<option value="" selected>SELECIONE</option>
									<option value="10">10px</option>
									<option value="11">11px</option>
									<option value="12">12px</option>
									<option value="13">13px</option>
									<option value="14">14px</option>
									<option value="15">15px</option>
									<option value="16">16px</option>
									<option value="17">17px</option>
									<option value="18">18px</option>
									<option value="19">19px</option>
									<option value="20">20px</option>
									<option value="21">21px</option>
									<option value="22">22px</option>
									<option value="23">23px</option>
									<option value="24">24px</option>
									<option value="25">25px</option>
									<option value="26">26px</option>
									<option value="27">27px</option>
									<option value="28">28px</option>
									<option value="29">29px</option>
									<option value="30">30px</option>
								</select>
							</div>
							<div class="mb-3">
								<label for="bold" class="form-label">Negrito</label>
								<select name="bold" class="form-control" onautocomplete required>
									<option value="" selected>SELECIONE</option>
									<option value="Sim">Sim</option>
									<option value="Não">Não</option>
								</select>
							</div>
							<div class="mb-3">
								<label for="nome_arquivo" class="form-label">Nome Arquivo</label>
								<input type="text" name="nome_arquivo" class="form-control" autocomplete="off" placeholder="exemplo.docx" required/>
							</div>
							<div class="mb-3">
								<div class="btn-group">
									<button type="submit" class="btn btn-primary">Gerar Arquivo</button>
									<button type="button" class="btn btn-danger" onclick="resetForm()">Cancelar</button>
								</div>
							</div>
						</form>
					</div>
					<div class="card-footer">
						<span><?=date("d/m/Y");?></span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	<script type="text/javascript">
		
		//function resetForm()
		function resetForm() {
			let info = confirm("Tem certeza de que deseja cancelar os dados perante o formulário ?");
			if(info == true) {
				document.querySelector("#form").reset();
			}
		}

	</script>
</body>
</html>