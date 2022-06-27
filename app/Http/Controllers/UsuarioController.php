<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(isset($_GET['nome_pesquisar']) && strlen($_GET['nome_pesquisar'])>1)
        {
            $search_text = $request->input('nome_pesquisar');
            $usuarios = Usuario::where('nome', 'LIKE', '%' .$search_text.'%')->get();
            return view('usuario.index', compact('usuarios'));
        }else{
            $usuarios = Usuario::all();
            return view('usuario.index', compact('usuarios'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mensagens = [
            'required' => ':Attribute é obrigatório!',
        ];

        $validator = Validator::make($request->all(),[
            'nome' => 'required',
            'cpf' => 'required',
            'logradouro' => 'required',
            'numero' => 'required',
            'bairro' => 'required',
            'cidade' => 'required',
            'estado'=> 'required',
            'pais'=> 'required',
            'cep' => 'required',

        ], $mensagens);

        if($validator->fails())
        {
            return response()->json([
                'status' =>400,
                'errors' => $validator->getMessageBag(),
            ]);
        }else{
             $usuario = new Usuario;
             $usuario ->nome = $request->input('nome');
             $usuario ->cpf = $request->input('cpf');
             $usuario ->logradouro = $request->input('logradouro');
             $usuario ->numero = $request->input('numero');
             $usuario ->bairro = $request->input('bairro');
             $usuario ->cidade = $request->input('cidade');
             $usuario ->estado = $request->input('estado');
             $usuario ->pais = $request->input('pais');
             $usuario ->cep = $request->input('cep');
             $usuario ->save();
             return response()->json([
                'status' =>200,
                'message' => 'Usuario Adicionado com Sucesso',
             ]);

        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = Usuario::find($id);
        if($usuario)
        {
            return response()->json([
                'status'=>200,
                'usuario'=> $usuario,
            ]);
        }
        else
        {
            return response()->json([
                'status'=>404,
                'message'=>'Nenhum Usuário Encontrado'
            ]);
        }

    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $mensagens = [
            'required' => ':Attribute é obrigatório!',
        ];
        
        $validator = Validator::make($request->all(), [
            'nome' => 'required',
            'cpf' => 'required',
            'logradouro' => 'required',
            'numero' => 'required',
            'bairro' => 'required',
            'cidade' => 'required',
            'estado'=> 'required',
            'pais'=> 'required',
            'cep' => 'required',
        ], $mensagens);

        if($validator->fails())
        {
            return response()->json([
                'status'=>400,
                'errors' => $validator->getMessageBag(),
            ]);
        }
        else
        {
            $usuario = Usuario::find($id);
            if($usuario)
            {
            $usuario ->nome = $request->input('nome');
            $usuario ->cpf = $request->input('cpf');
            $usuario ->logradouro = $request->input('logradouro');
            $usuario ->numero = $request->input('numero');
            $usuario ->bairro = $request->input('bairro');
            $usuario ->cidade = $request->input('cidade');
            $usuario ->estado = $request->input('estado');
            $usuario ->pais = $request->input('pais');
            $usuario ->cep = $request->input('cep');
             $usuario->update();
                return response()->json([
                    'status'=>200,
                    'message'=>'Usuário Atualizado com Sucesso.'
                ]);
            }
            else
            {
                return response()->json([
                    'status'=>404,
                    'message'=>'Nenhum Usuário Encontrado'
                ]);
            }

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = Usuario::find($id);
        if($usuario)
        {
            $usuario->delete();
            return response()->json([
                'status'=>200,
                'message'=>'Usuário Deletado com Sucesso.'
            ]);
        }
        else
        {
            return response()->json([
                'status'=>404,
                'message'=>'Nenhum Usuário Encontrado.'
            ]);
        }
    }

    public function modificarStatus(Request $request)
    {
        $usuario = Usuario::find($request->usuario_id);
        $usuario->status = $request->status;
        $usuario->save();
        return response()->json(['success'=>'Status modificado com sucesso!']);
    }
    public function modificarStatusPagamento(Request $request)
    {
        $usuario = Usuario::find($request->usuario_id);
        $usuario->servicos = $request->servicos;
        $usuario->save();
        return response()->json(['success'=>'Status do Pagamento modificado com sucesso!']);
    }

}