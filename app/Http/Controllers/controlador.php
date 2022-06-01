<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class controlador extends Controller
{
    public function Bienvenido(){
        return view('index');
    }

    public function Login(Request $request){
        if (auth()->attempt(['email'=>$request['email'], 'password'=>$request['contra']])) {
            return redirect( route('libros'));
        }
        else {
            return back()->withErrors([
                'message'=>'El email o la contraseña son incorrectos, por favor intentelo de nuevo',
            ]);
        }
    }

    public function MostrarLibros(){
        $usuario_logiado= auth()->user()->id;
        $Libros = Libro::where('id_users','=', $usuario_logiado)->get();
        $array = ['Libros'=>$Libros];
        // echo($Libros);     
        // if ($Libros=0){
        //         echo("usted no tiene libros");
        //         return view('mostrar_libro',compact('Libros'));
                
        //     }
        //     else {
        //             echo('usted si tiene libros' );
        //             return view('mostrar_libro', compact('Libros'));
        //         }
        return view('mostrar_libro', $array );
        
        // 
        
        
        
        // ->where('id', 'like', '%'.$this->userid.'%');
        
        // if (empty($libros)){
        //     echo("usted no tiene libros");
        //     return view('mostrar_libro', compact('libros'));
            
        // }
        // else {
        //     echo('usted si tiene libros' );
        //     return view('mostrar_libro', compact('libros'));
        // }
        
    }

    public function create(){
        return view ('registro');
    }

    public function Registro(Request $request){
        $usuario = new User();
        $usuario->nombre=$request->input('nombre');
        $usuario->email=$request->input('email');
        $usuario->password=Hash::make($request['contra']);
        $usuario->save();
        echo("registrado correctamente");
        return redirect (route('inicio'));
                
    //     if ($_request->isMethod('post')){
    //         $formulario = $_request->post();
    //         $formulario->save();
    //         return response()->json([
    //             "mensaje" => "Se ha creado correctamente", 
    //             "errores" => "No hay errores",
    //         ]);
    //         echo "registrado mi pai";
    // }
            // else{
            //     $errores=$formulario->errors;
            //     $mensaje=" No se ha creado correctamente!";
            //     $respuesta=JsonResponse(["mensaje"=> $mensaje, "errores"=> $errores]);
            //     $respuesta.status_code=400;
            //     return $respuesta;
            // }
            
    }
}