<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
public function lista()
{
// Buscar produtos usando Eloquent ORM
$produtos = Produto::all();
return view('listagem')->with('produtos', $produtos);
}

public function detalhes($id)
{
// Tentar encontrar o produto pelo ID
$produto = Produto::find($id);

// Se o produto não for encontrado, retorne a view com uma mensagem de erro
if (!$produto) {
return view('detalhes')->with('mensagem', 'Produto não encontrado.');
}

// Se o produto for encontrado, passe o objeto para a view
return view('detalhes')->with('produto', $produto);
}
}