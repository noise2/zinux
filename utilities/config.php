<?php
namespace iMVC\utilities;


/**
 * @author dariush
 * @version 1.0
 * @created 04-Sep-2013 15:50:21
 */
class config
{
	/**
	 * Fetch config file's values
	 * @param string $file_address
	 * @param string $process_sections
	 * @param string $section_name
	 * @return array fetched configs
	 */
        public function Load($file_address, $process_sections = false, $section_name = null)
        {
            $GLOBALS[CONFIGS] = \iMVC\Tools\Ini_Parser::parse($file_address, $process_sections, $section_name);
            return $GLOBALS[CONFIGS];
        }

}
?>
