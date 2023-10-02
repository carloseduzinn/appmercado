<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Validator;

class mercadoController extends Controller
{
    public function tela1()
    {
        return view('index');
    }


    public function tela()
    {
        return view('about');
    }

    public function tela2()
    {
        return view('aplicativo');
    }



    public function produtomenu(){    
        $itens = Produto::select('nomeproduto')->get();
        return view('aplicativo', ['itens' => $itens]);
    }
    
    public function buscarPreco(Request $request)
{
    $produtoNome = $request->input('produto_id');
    
    $produto = Produto::where('nomeproduto', $produtoNome)->first();

    if ($produto) {
        $precoProduto = $produto->preco;
        return response()->json(['preco' => $precoProduto]);
    } else {
        return response()->json(['preco' => 'N/A']);
    }
}



// UPDATE

public function salvarDispositivo(Request $request)
{
    $produto = $request->validate([
        'nomeproduto' => 'required|string',
        'estoque' => 'required|string',
        'preco' => 'required|numeric',
    ]);

    Produto::create($produto);
    return redirect()->route('view.cadastro');
}

}