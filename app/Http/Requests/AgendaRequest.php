<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

use Illuminate\Routing\Route;

class AgendaRequest extends Request
{
    
    
    public function __construct(Route $route){

        $this->route = $route;
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {  
      // dd($this->route->getParameter('agenda'));
        return [
            'nombre' => 'required|min:4|max:20',
            'apellido' => 'required|min:4|max:20',
            'email' => 'required|email|unique:agendas,email,'.$this->route->getParameter('agenda'),
            'grupo' => 'required|in:familia,trabajo,amigos',
        ];
    }
}




