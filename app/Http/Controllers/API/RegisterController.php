<?php


namespace App\Http\Controllers\API;


use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\User;
use Illuminate\Support\Facades\Auth;
use Validator;


class RegisterController extends BaseController
{
    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'c_password' => 'required|same:password',
            'roles' => 'required'
        ]);


        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }


        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] =  $user->createToken($user->email)->accessToken;
        $success['name'] =  $user->name;
        
        $user->assignRole($request->input('roles'));


        return $this->sendResponse($success, 'Usuario registrado com sucesso.');
    }



    /*--- Login de usuario ---*/
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6'
        ]);


        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $credentials = request(['email', 'password']);
        //
        if(Auth::attempt($credentials)){
            $user = auth()->user();
            //gera o token passport
            $user->token = $user->createToken($user->email)->accessToken;
            $success['usuario'] = $user;
            return $this->sendResponse($success, 'Usuario logado com sucesso.');
        }else{
            return $this->sendError('Usuario não logado.');
        }

        
    }

}
