<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_mercato
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace MercatoNamespace\Module\Mercato\Site\Helper;

\defined('_JEXEC') or die;
use Joomla\CMS\Factory;
use Joomla\CMS\Filesystem\Path;
use Joomla\CMS\Form\Form;
use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Text;

/**
 * Helper for mod_mercato
 *
 * @since  __BUMP_VERSION__
 */
class MercatoHelper
{
	/**
	 * Retrieve mercato test
	 *
	 * @param   Registry        $params  The module parameters
	 * @param   CMSApplication  $app     The application
	 *
	 * @return  array
	 */
	public static function getText()
	{
		return 'MercatoHelpertest';
	}


	// recupera tutti i dati da tebella 
	public static function get_dati($campo, $stato,$limit,$offset,$generico,$arrampicata,$alpinismo,$trekking,$sci,$ciclismo,$tutti)
    {
        $db = Factory::getDbo();
        $query = $db->getQuery(true);
        $query->select($campo) //
        ->from('#__segnalamercato_mercato');
        if ($stato) {
            $query->where($db->quoteName('state') . "=". $db->quote($stato));
        }
       
        if ($arrampicata) {
            $query->where($db->quoteName('tipo')."=". $db->quote('Arrampicata'));
        }
        if ($alpinismo) {
            $query->where($db->quoteName('tipo')."=". $db->quote('Alpinismo'));
        }
        if ($trekking) {
            $query->where($db->quoteName('tipo')."=". $db->quote('Trekking'));
        }
        if ($generico) {
            $query->where($db->quoteName('tipo')."=". $db->quote('Generico'));
        }
        if ($sci) {
            $query->where($db->quoteName('tipo')."=". $db->quote('Sci'));
        }
        if ($ciclismo) {
            $query->where($db->quoteName('tipo')."=". $db->quote('Ciclismo'));
        }
        if ($tutti) {
             $query->orWhere($db->quoteName('tipo')."=". $db->quote('Arrampicata'));
             $query->orWhere($db->quoteName('tipo')."=". $db->quote('Alpinismo'));
             $query->orWhere($db->quoteName('tipo')."=". $db->quote('Trekking'));
             $query->orWhere($db->quoteName('tipo')."=". $db->quote('Sci'));
			 $query->orWhere($db->quoteName('tipo')."=". $db->quote('Generico'));
             $query->orWhere($db->quoteName('tipo')."=". $db->quote('Ciclismo'));
            }  
            //$query->where($db->quoteName("STR_TO_DATE(inizio,'%d-%m-%Y'").">=". $db->quote('30-01-2010'));
 
            
        $query->order("title  asc")->setLimit($limit,$offset);
        //$query->order("id  ASC")->setLimit($limit, $offset);
        try {
            $db->setQuery($query);
                        
            //$result = $db->loadRowList();//loadAssoc();//;
            $result = $db->loadAssocList();
        } catch (RuntimeException $e) {
            echo $e->getMessage();
        }
                    
        return $result;
    }


    public static function get_descriz($titolo)
    {
        $db = Factory::getDBO();
        $query = $db->getQuery(true);
        $query->select('*')
        ->from('#__segnalamercato_mercato')
        ->where($db->quoteName('description')." LIKE ". $db->quote('%'.$titolo.'%'));
        $db->setQuery($query);
        $results = $db->loadAssocList();

        return $results;
    }

}
