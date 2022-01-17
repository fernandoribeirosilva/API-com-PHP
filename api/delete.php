<?php 
require '../config.php';

$method = strtolower($_SERVER['REQUEST_METHOD']);

if($method === 'delete') {

  //para pegar dados com o metodo do tipo PUT 
  // as informação são inserida na variavel $input
  parse_str(file_get_contents('php://input'), $input);

  // só funciona no php >= 7.5
  $id = $input['id'] ?? null;

  // validando as variaves 
  $id = filter_var($id);

  if($id) {

    $sql = $pdo->prepare("DELETE FROM notes WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

  } else {
    $array['error'] = 'ID inexistente';
  }

} else {
  $array['error'] = 'Metodo nao permitido apenas (DELETE)';
}

require '../return.php'; 