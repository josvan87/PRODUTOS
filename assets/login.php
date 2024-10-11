<?php 

//Header
include_once 'header.php';

session_start();

// Função para validar o login (com sessões)
function validaLogin($email, $senha) {
  // Substitua 'usuario@exemplo.com' e 'senha123' pelo email e senha desejados
  if ($email === 'usuario@exemplo.com' && $senha === 'senha123') {
    // Define a variável de sessão para indicar que o usuário está logado
    $_SESSION['logado'] = true;
    echo "<p style='color: green;'>Login bem-sucedido!</p>";
    // Redireciona para a página de consulta
    header('Location: consultar.php'); 
    exit(); // Encerra a execução do script após o redirecionamento
  } else {
    echo "<p style='color: red;'>Email ou senha inválidos.</p>";
  }
}

// Verifica se o formulário foi enviado
if(isset($_GET['btlogin'])) {
  $email = $_GET['txtemail'];
  $senha = $_GET['txtsenha'];

  // Chama a função para validar o login
  validaLogin($email, $senha);
}
?>



<link rel="stylesheet" href="css/login.css">

 <div class="global-container"> 
	<div class="card login-form">
	<div class="card-body">
		<h3 class="card-title text-center">Autenticação do usuário</h3>
		<div class="card-text">
			
			<form>
			
				<div class="form-group">
					<label for="exampleInputEmail1">Email:</label>
					<input type="email" class="form-control form-control-sm" name="txtemail" >
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Senha:</label>					
					<input type="password" class="form-control form-control-sm" name="txtsenha">
				</div>
				<button type="submit" class="btn btn-primary btn-block" name="btlogin">Login</button>
				
				
			</form>
		</div>
	</div>
</div>
</div> 

<?php include_once 'footer.php';?>

   