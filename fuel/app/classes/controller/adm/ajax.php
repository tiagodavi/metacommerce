<?php
/**
 * The MIT License
 * Copyright (c) 2014  MetaCommerce Development Team
 * http://metacommerce.com.br
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the “Software”),
 * to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense,
 * and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
 *
 * -The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 * -The logo MetaCommerce must be included with the link to this site on all copies of this software.
 *
 * THE SOFTWARE IS PROVIDED “AS IS”, WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS
 * IN THE SOFTWARE.
 */
class Controller_Adm_Ajax extends Controller_Adm_Base
{
	/**
	 * @todo
	 * Este método é responsável por ativar/desativar qualquer
	 * campo Booleano (Tinyint) em qualquer modelo.
	 */
	public function get_activate()
	{
		if(\Input::is_ajax()){
			
			$id 	= \Input::get('id');
			$field 	= \Input::get('field');
			$value 	= \Input::get('value');
			$model 	= '\\Model\\'.\Input::get('model');			
			$model  = $model::find($id);
			if($model){
				$model->$field = $value;
				$model->save();
				echo 'true';
			}else{
				echo 'false';
			}
		}
	}
}