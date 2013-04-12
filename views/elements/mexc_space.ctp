<?php

/**
 *
 * Copyright 2011-2013, Museu Exploratório de Ciências da Unicamp (http://www.museudeciencias.com.br)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2011-2013, Museu Exploratório de Ciências da Unicamp (http://www.museudeciencias.com.br)
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 * @link          https://github.com/museudecienciasunicamp/mexc_space.git Mexc Space public repository
 */

switch ($type[0])
{
	case 'buro':
		switch ($type[1])
		{
			case 'view':
			case 'belongsto_preview':
				echo $this->Bl->paraDry(array('Esse conteúdo será publicado no(a) ' . $this->Bl->mexcSpaceDry($data)));
			break;
			
			
			case 'form':
			break;
		}
	break;
	
	case 'type':
	break;
}